<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MomoSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class MomoSettingsController extends Controller
{
    public function index()
    {
        $momoSettings = MomoSettings::all()->pluck('value', 'key')->toArray();
        return view('admin.settings.momo-settings', compact('momoSettings'));
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'momo_base_url'    => ['required', 'url'],
            'momo_environment' => ['required', 'in:sandbox,live'],
            'momo_currency'    => ['required'],
            'momo_primary_key' => ['required'],
            'momo_user_id'     => ['required'],
            'momo_api_secret'  => ['required'],
        ]);

        foreach ($validatedData as $key => $value) {
            MomoSettings::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        Artisan::call('config:clear');
        notyf()->success('MTN MoMo Settings mis à jour !');
        return redirect()->back();
    }
}
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeniusPaySettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class GeniusPaySettingsController extends Controller
{
    public function index()
    {
        $geniusSettings = GeniusPaySettings::all()->pluck('value', 'key')->toArray();
        return view('admin.settings.geniuspay-settings', compact('geniusSettings'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'genius_base_url'       => ['required', 'url'],
            'genius_api_key'        => ['required'],
            'genius_api_secret'     => ['required'],
            'genius_webhook_secret' => ['required'],
        ]);

        foreach ($validated as $key => $value) {
            GeniusPaySettings::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        Artisan::call('config:clear');
        notyf()->success('GeniusPay Settings mis à jour !');
        return redirect()->back();
    }
}
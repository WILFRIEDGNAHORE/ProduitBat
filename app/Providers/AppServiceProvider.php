<?php

namespace App\Providers;

use App\Models\MomoSettings;
use App\Models\Settings;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        Paginator::useBootstrapFive();
        $settings = Settings::first();

        Config::set('app.timezone', $settings->time_zone ?? 'UTC');

        // Charger les settings MoMo depuis la DB
        $momoSettings = MomoSettings::all()->pluck('value', 'key')->toArray();

        if (!empty($momoSettings)) {
            Config::set('momo.baseUrl',              $momoSettings['momo_base_url']        ?? 'https://sandbox.momodeveloper.mtn.com');
            Config::set('momo.currency',             $momoSettings['momo_currency']         ?? 'EUR');
            Config::set('momo.targetEnvironment',    $momoSettings['momo_environment']      ?? 'sandbox');
            Config::set('momo.collectionPrimaryKey', $momoSettings['momo_primary_key']      ?? '');
            Config::set('momo.collectionUserId',     $momoSettings['momo_user_id']          ?? '');
            Config::set('momo.collectionApiSecret',  $momoSettings['momo_api_secret']       ?? '');
        }

        View::composer('*', function ($view) use ($settings, $momoSettings) {
            $view->with([
                'settings'     => $settings,
                'momoSettings' => $momoSettings ?? [],
            ]);
        });
    }
}
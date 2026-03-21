<?php

namespace App\Providers;

use App\Models\GeniusPaySettings;
use App\Models\MomoSettings;
use App\Models\Settings;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        URL::forceScheme('https');

        Paginator::useBootstrapFive();
        $settings = Settings::first();

        Config::set('app.timezone', $settings->time_zone ?? 'UTC');

        // ── MoMo settings ──────────────────────────────────────
        $momoSettings = MomoSettings::all()->pluck('value', 'key')->toArray();

        if (!empty($momoSettings)) {
            Config::set('momo.baseUrl',              $momoSettings['momo_base_url']     ?? 'https://sandbox.momodeveloper.mtn.com');
            Config::set('momo.currency',             $momoSettings['momo_currency']      ?? 'EUR');
            Config::set('momo.targetEnvironment',    $momoSettings['momo_environment']   ?? 'sandbox');
            Config::set('momo.collectionPrimaryKey', $momoSettings['momo_primary_key']   ?? '');
            Config::set('momo.collectionUserId',     $momoSettings['momo_user_id']       ?? '');
            Config::set('momo.collectionApiSecret',  $momoSettings['momo_api_secret']    ?? '');
        }

        // ── GeniusPay settings ─────────────────────────────────
        $geniusSettings = GeniusPaySettings::all()->pluck('value', 'key')->toArray();

        if (!empty($geniusSettings)) {
            Config::set('geniuspay.base_url',        $geniusSettings['genius_base_url']       ?? 'https://pay.genius.ci/api/v1/merchant');
            Config::set('geniuspay.api_key',         $geniusSettings['genius_api_key']        ?? '');
            Config::set('geniuspay.api_secret',      $geniusSettings['genius_api_secret']     ?? '');
            Config::set('geniuspay.webhook_secret',  $geniusSettings['genius_webhook_secret'] ?? '');
        }

        // ── View composer ──────────────────────────────────────
        View::composer('*', function ($view) use ($settings, $momoSettings, $geniusSettings) {
            $view->with([
                'settings'       => $settings,
                'momoSettings'   => $momoSettings   ?? [],
                'geniusSettings' => $geniusSettings ?? [],
            ]);
        });
    }
}
<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    public function run(): void
    {
        Settings::create([
            'site_name'       => 'ProduitBat',
            'layout'          => 'default',
            'contact_email'   => 'contact@produitbat.com',
            'contact_phone'   => '+33 1 23 45 67 89',
            'contact_address' => '1 Rue de la Paix, 75001 Paris, France',
            'map'             => null,
            'currency_name'   => 'Euro Member Countries',
            'currency_icon'   => 'EUR',
            'time_zone'       => 'Europe/Paris',
        ]);
    }
}

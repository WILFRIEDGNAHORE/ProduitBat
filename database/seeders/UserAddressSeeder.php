<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserAddressSeeder extends Seeder
{
    public function run(): void
    {
        $vendor = DB::table('users')->where('email', 'vendor@gmail.com')->first();
        $user   = DB::table('users')->where('email', 'user@gmail.com')->first();

        if (! $vendor || ! $user) {
            $this->command->warn('UserAddressSeeder: users not found — run UserSeeder first.');
            return;
        }

        $addresses = [
            [
                'user_id' => $vendor->id,
                'name'    => 'Dupont Martin',
                'email'   => 'vendor@gmail.com',
                'phone'   => '0612345678',
                'country' => 'France',
                'state'   => 'Île-de-France',
                'city'    => 'Paris',
                'zip'     => '75008',
                'address' => '15 Avenue des Champs-Élysées',
            ],
            [
                'user_id' => $vendor->id,
                'name'    => 'Entrepôt Dupont & Fils',
                'email'   => 'depot@gmail.com',
                'phone'   => '0698765432',
                'country' => 'France',
                'state'   => 'Île-de-France',
                'city'    => 'Bobigny',
                'zip'     => '93000',
                'address' => '42 Rue de l\'Industrie, Zone Commerciale Nord',
            ],
            [
                'user_id' => $user->id,
                'name'    => 'Sophie Bernard',
                'email'   => 'user@gmail.com',
                'phone'   => '0756789012',
                'country' => 'France',
                'state'   => 'Provence-Alpes-Côte d\'Azur',
                'city'    => 'Marseille',
                'zip'     => '13001',
                'address' => '8 Rue de la République',
            ],
            [
                'user_id' => $user->id,
                'name'    => 'Chantier Bernard — Site Marseille',
                'email'   => 'user@gmail.com',
                'phone'   => '0756789012',
                'country' => 'France',
                'state'   => 'Provence-Alpes-Côte d\'Azur',
                'city'    => 'Aix-en-Provence',
                'zip'     => '13100',
                'address' => '3 Chemin des Carrières, Lotissement Les Garrigues',
            ],
        ];

        foreach ($addresses as $addr) {
            DB::table('user_addresses')->updateOrInsert(
                ['user_id' => $addr['user_id'], 'address' => $addr['address']],
                $addr
            );
        }
    }
}

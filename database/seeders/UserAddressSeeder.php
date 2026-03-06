<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserAddressSeeder extends Seeder
{
    public function run(): void
    {
        $addresses = [
            // Adresses du vendor (user_id = 1)
            [
                'user_id' => 1,
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
                'user_id' => 1,
                'name'    => 'Entrepôt Dupont & Fils',
                'email'   => 'depot@gmail.com',
                'phone'   => '0698765432',
                'country' => 'France',
                'state'   => 'Île-de-France',
                'city'    => 'Bobigny',
                'zip'     => '93000',
                'address' => '42 Rue de l\'Industrie, Zone Commerciale Nord',
            ],

            // Adresses du user (user_id = 2)
            [
                'user_id' => 2,
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
                'user_id' => 2,
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

        DB::table('user_addresses')->insert($addresses);
    }
}

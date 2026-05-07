<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    public function run(): void
    {
        $stores = [
            [
                'name'    => 'Entrepôt Central',
                'type'    => 'centrale',
                'city'    => 'Abidjan',
                'address' => 'Zone Industrielle, Yopougon',
                'phone'   => '+225 07 00 00 00 01',
                'status'  => true,
            ],
            [
                'name'    => 'Boutique Plateau',
                'type'    => 'vente',
                'city'    => 'Abidjan',
                'address' => 'Avenue Chardy, Le Plateau',
                'phone'   => '+225 07 00 00 00 02',
                'status'  => true,
            ],
            [
                'name'    => 'Boutique Cocody',
                'type'    => 'vente',
                'city'    => 'Abidjan',
                'address' => 'Boulevard Latrille, Cocody',
                'phone'   => '+225 07 00 00 00 03',
                'status'  => true,
            ],
        ];

        foreach ($stores as $data) {
            Store::firstOrCreate(['name' => $data['name']], $data);
        }
    }
}

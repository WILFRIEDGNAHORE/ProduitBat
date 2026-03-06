<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingRuleSeeder extends Seeder
{
    public function run(): void
    {
        $rules = [
            [
                'name'      => 'Livraison standard',
                'type'      => 'flat_rate',
                'min_cost'  => null,
                'cost'      => 9.90,
                'status'    => 1,
            ],
            [
                'name'      => 'Livraison gratuite (commande > 150 €)',
                'type'      => 'free_above',
                'min_cost'  => 150.00,
                'cost'      => 0.00,
                'status'    => 1,
            ],
            [
                'name'      => 'Livraison express (48h)',
                'type'      => 'flat_rate',
                'min_cost'  => null,
                'cost'      => 19.90,
                'status'    => 1,
            ],
            [
                'name'      => 'Livraison palettisée (matériaux lourds)',
                'type'      => 'flat_rate',
                'min_cost'  => null,
                'cost'      => 49.90,
                'status'    => 1,
            ],
            [
                'name'      => 'Retrait en agence',
                'type'      => 'free_above',
                'min_cost'  => 0.00,
                'cost'      => 0.00,
                'status'    => 0,
            ],
        ];

        DB::table('shipping_rules')->insert($rules);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouponSeeder extends Seeder
{
    public function run(): void
    {
        $coupons = [
            [
                'name'          => 'Bienvenue',
                'code'          => 'BIENVENUE10',
                'quantity'      => 100,
                'max_use'       => 1,
                'start_date'    => '2026-03-01',
                'end_date'      => '2026-06-30',
                'discount_type' => 'percentage',
                'discount'      => 10,
                'status'        => 1,
                'total_used'    => 0,
            ],
            [
                'name'          => 'Promo Printemps',
                'code'          => 'PRINTEMPS15',
                'quantity'      => 50,
                'max_use'       => 2,
                'start_date'    => '2026-03-20',
                'end_date'      => '2026-05-31',
                'discount_type' => 'percentage',
                'discount'      => 15,
                'status'        => 1,
                'total_used'    => 0,
            ],
            [
                'name'          => 'Remise Fixe 20€',
                'code'          => 'REMISE20',
                'quantity'      => 30,
                'max_use'       => 1,
                'start_date'    => '2026-03-01',
                'end_date'      => '2026-04-30',
                'discount_type' => 'fixed',
                'discount'      => 20,
                'status'        => 1,
                'total_used'    => 0,
            ],
            [
                'name'          => 'Gros Chantier',
                'code'          => 'CHANTIER25',
                'quantity'      => 20,
                'max_use'       => 1,
                'start_date'    => '2026-03-01',
                'end_date'      => '2026-12-31',
                'discount_type' => 'percentage',
                'discount'      => 25,
                'status'        => 1,
                'total_used'    => 0,
            ],
            [
                'name'          => 'Offre Expirée',
                'code'          => 'OLDPROMO',
                'quantity'      => 10,
                'max_use'       => 1,
                'start_date'    => '2025-01-01',
                'end_date'      => '2025-12-31',
                'discount_type' => 'percentage',
                'discount'      => 5,
                'status'        => 0,
                'total_used'    => 7,
            ],
        ];

        DB::table('coupons')->insert($coupons);
    }
}

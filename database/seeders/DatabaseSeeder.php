<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            SettingsSeeder::class,
            CategorySeeder::class,
            BrandSeeder::class,
            ProductSeeder::class,
            ProductVariantSeeder::class,
            CouponSeeder::class,
            ShippingRuleSeeder::class,
            UserAddressSeeder::class,
            StoreSeeder::class,
            StoreStockSeeder::class,
            RolePermissionSeeder::class,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Store;
use App\Models\StoreStock;
use Illuminate\Database\Seeder;

class StoreStockSeeder extends Seeder
{
    public function run(): void
    {
        $centrale = Store::where('type', 'centrale')->first();

        if (! $centrale) {
            $this->command->warn('Aucune boutique centrale trouvée. Lancez StoreSeeder d\'abord.');
            return;
        }

        $products = Product::where('status', 1)->get();

        foreach ($products as $product) {
            StoreStock::firstOrCreate(
                ['store_id' => $centrale->id, 'product_id' => $product->id],
                ['qty' => $product->qty, 'low_stock_threshold' => 5]
            );
        }

        $this->command->info("Stock initialisé : {$products->count()} produits → Centrale \"{$centrale->name}\"");
    }
}

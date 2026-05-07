<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stock_inventory_lines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stock_inventory_id')->constrained('stock_inventories')->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->integer('qty_system');   // qty in store_stocks at time of inventory
            $table->integer('qty_real');     // qty physically counted
            $table->integer('gap')->storedAs('qty_real - qty_system');
            $table->timestamps();

            $table->unique(['stock_inventory_id', 'product_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stock_inventory_lines');
    }
};

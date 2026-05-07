<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockInventoryLine extends Model
{
    protected $fillable = [
        'stock_inventory_id', 'product_id', 'qty_system', 'qty_real',
    ];

    public function inventory()
    {
        return $this->belongsTo(StockInventory::class, 'stock_inventory_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoreStock extends Model
{
    protected $fillable = ['store_id', 'product_id', 'qty', 'low_stock_threshold'];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function isLow(): bool
    {
        return $this->qty > 0 && $this->qty <= $this->low_stock_threshold;
    }
}

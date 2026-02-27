<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    protected $fillable = ['admin_id', 'vendor_id', 'product_id', 'name', 'status'];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
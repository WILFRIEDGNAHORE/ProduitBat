<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariantItem extends Model
{
    protected $fillable = [
        'product_variant_id', 'product_id', 'admin_id', 'vendor_id',
        'name', 'price', 'is_default', 'status',
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name', 'type', 'address', 'phone', 'email', 'city', 'note', 'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function isCentrale(): bool
    {
        return $this->type === 'centrale';
    }

    public function storeStocks()
    {
        return $this->hasMany(StoreStock::class);
    }
}

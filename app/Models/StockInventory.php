<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockInventory extends Model
{
    protected $fillable = [
        'store_id', 'label', 'status', 'note', 'created_by', 'validated_at',
    ];

    protected $casts = [
        'validated_at' => 'datetime',
    ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function lines()
    {
        return $this->hasMany(StockInventoryLine::class);
    }

    public function creator()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }

    public function isDraft(): bool     { return $this->status === 'draft'; }
    public function isValidated(): bool { return $this->status === 'validated'; }
}

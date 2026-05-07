<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockTransfer extends Model
{
    protected $fillable = [
        'from_store_id', 'to_store_id', 'product_id', 'qty',
        'status', 'note', 'created_by', 'approved_by', 'received_at',
    ];

    protected $casts = [
        'received_at' => 'datetime',
    ];

    const STATUSES = [
        'pending'    => ['label' => 'En attente',   'color' => 'bg-secondary-lt'],
        'approved'   => ['label' => 'Approuvé',     'color' => 'bg-azure-lt'],
        'in_transit' => ['label' => 'En transit',   'color' => 'bg-warning-lt'],
        'received'   => ['label' => 'Reçu',         'color' => 'bg-success-lt'],
        'cancelled'  => ['label' => 'Annulé',       'color' => 'bg-danger-lt'],
    ];

    public function fromStore()
    {
        return $this->belongsTo(Store::class, 'from_store_id');
    }

    public function toStore()
    {
        return $this->belongsTo(Store::class, 'to_store_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function creator()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }

    public function approver()
    {
        return $this->belongsTo(Admin::class, 'approved_by');
    }

    public function statusLabel(): string
    {
        return self::STATUSES[$this->status]['label'] ?? $this->status;
    }

    public function statusColor(): string
    {
        return self::STATUSES[$this->status]['color'] ?? 'bg-secondary-lt';
    }

    public function isPending(): bool   { return $this->status === 'pending'; }
    public function isReceived(): bool  { return $this->status === 'received'; }
    public function isCancelled(): bool { return $this->status === 'cancelled'; }
}

<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'is_user',
        'user_status',
        'is_vendor',
        'vendor_status',
        'document',
        'contact',
        'vendor_request',
        'banner',
        'address',
        'desc',
        'fb_link',
        'tw_link',
        'insta_link',
        'tiktok_link',
        'yt_link'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function storeUsers()
    {
        return $this->hasMany(StoreUser::class);
    }

    public function stores()
    {
        return $this->hasManyThrough(Store::class, StoreUser::class, 'user_id', 'id', 'id', 'store_id');
    }

    public function hasPermission(string $slug): bool
    {
        return $this->storeUsers()
            ->with('role.permissions')
            ->get()
            ->flatMap(fn($su) => $su->role->permissions)
            ->pluck('slug')
            ->contains($slug);
    }
}

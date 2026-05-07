<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'vendor@gmail.com'],
            [
                'name'           => 'vendor',
                'username'       => 'vendor',
                'password'       => bcrypt('password'),
                'role'           => 'vendor',
                'is_user'        => '0',
                'user_status'    => 'is_vendor',
                'is_vendor'      => '1',
                'vendor_status'  => 'approved',
                'document'       => 'demo.pdf',
                'vendor_request' => '1',
            ]
        );

        User::firstOrCreate(
            ['email' => 'user@gmail.com'],
            [
                'name'           => 'user',
                'username'       => 'user',
                'password'       => bcrypt('password'),
                'role'           => 'user',
                'is_user'        => '1',
                'user_status'    => 'active',
                'is_vendor'      => '0',
                'vendor_status'  => 'is_user',
                'document'       => '',
                'vendor_request' => 0,
            ]
        );
    }
}

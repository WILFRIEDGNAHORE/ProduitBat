<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name'       => 'admin',
                'password'   => bcrypt('password'),
                'image'      => '',
                'status'     => 'approved',
                'contact'    => '',
                'created_by' => '',
                'address'    => '',
            ]
        );
    }
}

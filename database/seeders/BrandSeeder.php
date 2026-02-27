<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Seed construction material brands.
     */
    public function run(): void
    {
        $brands = [
            ['name' => 'Weber',              'is_featured' => 1],
            ['name' => 'Knauf',              'is_featured' => 1],
            ['name' => 'Isover',             'is_featured' => 1],
            ['name' => 'Legrand',            'is_featured' => 1],
            ['name' => 'Grohe',              'is_featured' => 1],
            ['name' => 'Schneider Electric', 'is_featured' => 0],
            ['name' => 'Lafarge',            'is_featured' => 1],
            ['name' => 'Saint-Gobain',       'is_featured' => 0],
        ];

        foreach ($brands as $brand) {
            Brand::create([
                'name'        => $brand['name'],
                'slug'        => Str::slug($brand['name']),
                'logo'        => 'images/brands/default.png',
                'is_featured' => $brand['is_featured'],
                'status'      => 1,
            ]);
        }
    }
}

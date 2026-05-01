<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ChildCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'name' => 'Accessoires',
                'icon' => 'hgi hgi-stroke hgi-package-01',
                'sub_categories' => [
                    ['name' => 'Lampes & Bougies',    'children' => []],
                    ['name' => 'Encens & Diffuseurs',  'children' => []],
                    ['name' => 'Filtration & Eau',     'children' => []],
                ],
            ],
            [
                'name' => 'Alimentation BIO',
                'icon' => 'hgi hgi-stroke hgi-leaf-01',
                'sub_categories' => [
                    ['name' => 'Fruits secs & Graines', 'children' => []],
                    ['name' => 'Céréales & Légumineuses','children' => []],
                    ['name' => 'Barres & Snacks BIO',   'children' => []],
                ],
            ],
            [
                'name' => 'Compléments alimentaires',
                'icon' => 'hgi hgi-stroke hgi-medicine-01',
                'sub_categories' => [
                    ['name' => 'Vitamines & Minéraux', 'children' => []],
                    ['name' => 'Plantes & Extraits',   'children' => []],
                    ['name' => 'Probiotiques',          'children' => []],
                ],
            ],
            [
                'name' => 'Cosmétiques',
                'icon' => 'hgi hgi-stroke hgi-flower-01',
                'sub_categories' => [
                    ['name' => 'Soins du visage', 'children' => []],
                    ['name' => 'Soins du corps',  'children' => []],
                    ['name' => 'Soins capillaires','children' => []],
                ],
            ],
            [
                'name' => 'Huiles Essentielles',
                'icon' => 'hgi hgi-stroke hgi-drop-01',
                'sub_categories' => [
                    ['name' => 'Relaxation & Sommeil', 'children' => []],
                    ['name' => 'Immunité & Défenses',  'children' => []],
                    ['name' => 'Beauté & Peau',         'children' => []],
                ],
            ],
            [
                'name' => 'Huiles Végétales',
                'icon' => 'hgi hgi-stroke hgi-test-tube-01',
                'sub_categories' => [
                    ['name' => 'Huiles de soin',    'children' => []],
                    ['name' => 'Huiles alimentaires','children' => []],
                ],
            ],
            [
                'name' => 'Nutrition sportive',
                'icon' => 'hgi hgi-stroke hgi-dumbbell-01',
                'sub_categories' => [
                    ['name' => 'Protéines',         'children' => []],
                    ['name' => 'Barres protéinées', 'children' => []],
                    ['name' => 'Récupération',      'children' => []],
                ],
            ],
            [
                'name' => 'Phytothérapie',
                'icon' => 'hgi hgi-stroke hgi-herb',
                'sub_categories' => [
                    ['name' => 'Tisanes & Infusions', 'children' => []],
                    ['name' => 'Gélules de plantes',  'children' => []],
                    ['name' => 'Ampoules & Extraits', 'children' => []],
                ],
            ],
        ];

        foreach ($data as $categoryData) {
            $category = Category::updateOrCreate(
                ['slug' => Str::slug($categoryData['name'])],
                [
                    'name'   => $categoryData['name'],
                    'icon'   => $categoryData['icon'],
                    'status' => 1,
                ]
            );

            foreach ($categoryData['sub_categories'] as $subData) {
                $subCategory = SubCategory::updateOrCreate(
                    ['slug' => Str::slug($subData['name']), 'category_id' => $category->id],
                    [
                        'name'   => $subData['name'],
                        'status' => 1,
                    ]
                );

                foreach ($subData['children'] as $childName) {
                    ChildCategory::updateOrCreate(
                        ['slug' => Str::slug($childName), 'sub_category_id' => $subCategory->id],
                        [
                            'category_id'     => $category->id,
                            'name'            => $childName,
                            'status'          => 1,
                        ]
                    );
                }
            }
        }
    }
}

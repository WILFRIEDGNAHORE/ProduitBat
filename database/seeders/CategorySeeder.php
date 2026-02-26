<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ChildCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Seed categories, sub-categories and child-categories
     * for a construction materials e-commerce (ProduitBat).
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Gros Œuvre',
                'icon' => 'hgi hgi-stroke hgi-building-03',
                'sub_categories' => [
                    [
                        'name' => 'Béton & Ciment',
                        'children' => ['Béton prêt à l\'emploi', 'Ciment Portland', 'Mortier sec', 'Béton cellulaire'],
                    ],
                    [
                        'name' => 'Briques & Parpaings',
                        'children' => ['Briques pleines', 'Briques creuses', 'Parpaings béton', 'Blocs de béton cellulaire'],
                    ],
                    [
                        'name' => 'Acier & Armatures',
                        'children' => ['Barres d\'armature', 'Treillis soudé', 'Profilés métalliques'],
                    ],
                ],
            ],
            [
                'name' => 'Menuiserie',
                'icon' => 'hgi hgi-stroke hgi-door-01',
                'sub_categories' => [
                    [
                        'name' => 'Portes',
                        'children' => ['Portes intérieures', 'Portes d\'entrée', 'Portes blindées', 'Portes coulissantes'],
                    ],
                    [
                        'name' => 'Fenêtres & Vitrages',
                        'children' => ['Fenêtres PVC', 'Fenêtres aluminium', 'Double vitrage', 'Velux & fenêtres de toit'],
                    ],
                    [
                        'name' => 'Volets & Stores',
                        'children' => ['Volets roulants', 'Volets battants', 'Stores intérieurs', 'Stores extérieurs'],
                    ],
                ],
            ],
            [
                'name' => 'Revêtements de Sol',
                'icon' => 'hgi hgi-stroke hgi-layers-01',
                'sub_categories' => [
                    [
                        'name' => 'Carrelage & Faïence',
                        'children' => ['Carrelage sol', 'Faïence murale', 'Carrelage extérieur', 'Mosaïque'],
                    ],
                    [
                        'name' => 'Parquet & Stratifié',
                        'children' => ['Parquet massif', 'Parquet contrecollé', 'Stratifié', 'Parquet flottant'],
                    ],
                    [
                        'name' => 'Béton ciré & Résine',
                        'children' => ['Béton ciré', 'Sol époxy', 'Résine décorative'],
                    ],
                ],
            ],
            [
                'name' => 'Plomberie & Sanitaire',
                'icon' => 'hgi hgi-stroke hgi-bathtub-01',
                'sub_categories' => [
                    [
                        'name' => 'Tuyaux & Raccords',
                        'children' => ['Tuyaux PVC', 'Tuyaux cuivre', 'Tuyaux multicouche', 'Raccords & joints'],
                    ],
                    [
                        'name' => 'Robinetterie',
                        'children' => ['Robinets de cuisine', 'Robinets de salle de bain', 'Mitigeurs thermostatiques'],
                    ],
                    [
                        'name' => 'Sanitaires',
                        'children' => ['WC & Toilettes', 'Lavabos', 'Baignoires', 'Douches & receveurs'],
                    ],
                ],
            ],
            [
                'name' => 'Électricité',
                'icon' => 'hgi hgi-stroke hgi-flash',
                'sub_categories' => [
                    [
                        'name' => 'Câblage & Fils',
                        'children' => ['Câbles électriques', 'Fils rigides', 'Gaines & conduits'],
                    ],
                    [
                        'name' => 'Tableaux & Protection',
                        'children' => ['Tableaux électriques', 'Disjoncteurs', 'Interrupteurs différentiels'],
                    ],
                    [
                        'name' => 'Éclairage',
                        'children' => ['Ampoules LED', 'Spots encastrés', 'Luminaires extérieurs', 'Éclairage de chantier'],
                    ],
                ],
            ],
            [
                'name' => 'Isolation & Étanchéité',
                'icon' => 'hgi hgi-stroke hgi-shield-01',
                'sub_categories' => [
                    [
                        'name' => 'Isolation Thermique',
                        'children' => ['Laine de verre', 'Laine de roche', 'Polystyrène expansé', 'Polyuréthane'],
                    ],
                    [
                        'name' => 'Isolation Acoustique',
                        'children' => ['Panneaux acoustiques', 'Sous-couches', 'Mousse acoustique'],
                    ],
                    [
                        'name' => 'Étanchéité',
                        'children' => ['Membranes d\'étanchéité', 'Bitume', 'Enduits d\'étanchéité'],
                    ],
                ],
            ],
            [
                'name' => 'Couverture & Toiture',
                'icon' => 'hgi hgi-stroke hgi-home-01',
                'sub_categories' => [
                    [
                        'name' => 'Tuiles & Ardoises',
                        'children' => ['Tuiles béton', 'Tuiles terre cuite', 'Ardoises naturelles', 'Bac acier'],
                    ],
                    [
                        'name' => 'Charpente',
                        'children' => ['Bois de charpente', 'Fermes de toit', 'Pannes & chevrons'],
                    ],
                    [
                        'name' => 'Accessoires de toiture',
                        'children' => ['Gouttières', 'Faîtages', 'Solins & noues', 'Fixations'],
                    ],
                ],
            ],
            [
                'name' => 'Peinture & Finitions',
                'icon' => 'hgi hgi-stroke hgi-paint-board',
                'sub_categories' => [
                    [
                        'name' => 'Peintures intérieures',
                        'children' => ['Peinture mur & plafond', 'Peinture laque', 'Peinture décorative'],
                    ],
                    [
                        'name' => 'Peintures extérieures',
                        'children' => ['Peinture façade', 'Lasure bois', 'Peinture anti-rouille'],
                    ],
                    [
                        'name' => 'Enduits & Plâtres',
                        'children' => ['Enduit de finition', 'Plâtre', 'Ragréage', 'Enduit de rebouchage'],
                    ],
                ],
            ],
        ];

        foreach ($data as $categoryData) {
            $category = Category::create([
                'name'   => $categoryData['name'],
                'slug'   => Str::slug($categoryData['name']),
                'icon'   => $categoryData['icon'],
                'status' => 1,
            ]);

            foreach ($categoryData['sub_categories'] as $subData) {
                $subCategory = SubCategory::create([
                    'category_id' => $category->id,
                    'name'        => $subData['name'],
                    'slug'        => Str::slug($subData['name']),
                    'status'      => 1,
                ]);

                foreach ($subData['children'] as $childName) {
                    ChildCategory::create([
                        'category_id'     => $category->id,
                        'sub_category_id' => $subCategory->id,
                        'name'            => $childName,
                        'slug'            => Str::slug($childName),
                        'status'          => 1,
                    ]);
                }
            }
        }
    }
}

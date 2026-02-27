<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\ProductVariantItem;
use Illuminate\Database\Seeder;

class ProductVariantSeeder extends Seeder
{
    /**
     * Seed product variants and variant items for admin and vendor products.
     *
     * Admin products  : vendor_id = 0, admin_id = 1
     * Vendor products : vendor_id = 1, admin_id = 0
     */
    public function run(): void
    {
        // ----------------------------------------------------------------
        // Données de variants par produit (indexées sur le nom du produit)
        // ----------------------------------------------------------------
        $variantData = [

            // ── Admin products ───────────────────────────────────────────
            'Ciment Portland CEM I 52.5' => [
                [
                    'name'  => 'Conditionnement',
                    'items' => [
                        ['name' => 'Sac 25 kg',  'price' => 8.50,  'is_default' => 0],
                        ['name' => 'Sac 35 kg',  'price' => 12.50, 'is_default' => 1],
                        ['name' => 'Palette 35 sacs (35 kg)', 'price' => 410.00, 'is_default' => 0],
                    ],
                ],
                [
                    'name'  => 'Classe de résistance',
                    'items' => [
                        ['name' => 'CEM I 42.5', 'price' => 10.00, 'is_default' => 0],
                        ['name' => 'CEM I 52.5', 'price' => 12.50, 'is_default' => 1],
                    ],
                ],
            ],

            'Mortier-colle Weber.col flex' => [
                [
                    'name'  => 'Poids',
                    'items' => [
                        ['name' => 'Sac 5 kg',  'price' => 6.50,  'is_default' => 0],
                        ['name' => 'Sac 15 kg', 'price' => 18.00, 'is_default' => 1],
                        ['name' => 'Sac 25 kg', 'price' => 28.00, 'is_default' => 0],
                    ],
                ],
                [
                    'name'  => 'Type',
                    'items' => [
                        ['name' => 'Standard C1',  'price' => 14.00, 'is_default' => 0],
                        ['name' => 'Amélioré C2T', 'price' => 18.00, 'is_default' => 1],
                        ['name' => 'Flexible C2TE','price' => 22.00, 'is_default' => 0],
                    ],
                ],
            ],

            'Plaque de plâtre Knauf BA13' => [
                [
                    'name'  => 'Épaisseur',
                    'items' => [
                        ['name' => 'BA10 (10 mm)', 'price' => 7.90,  'is_default' => 0],
                        ['name' => 'BA13 (13 mm)', 'price' => 9.80,  'is_default' => 1],
                        ['name' => 'BA18 (18 mm)', 'price' => 13.50, 'is_default' => 0],
                        ['name' => 'BA25 (25 mm)', 'price' => 18.00, 'is_default' => 0],
                    ],
                ],
                [
                    'name'  => 'Type',
                    'items' => [
                        ['name' => 'Standard',       'price' => 9.80,  'is_default' => 1],
                        ['name' => 'Hydrofuge (H)',   'price' => 12.50, 'is_default' => 0],
                        ['name' => 'Feu (F)',         'price' => 14.00, 'is_default' => 0],
                    ],
                ],
            ],

            'Câble électrique U1000R2V 3G2.5' => [
                [
                    'name'  => 'Section',
                    'items' => [
                        ['name' => '1.5 mm² (éclairage)',      'price' => 1.50, 'is_default' => 0],
                        ['name' => '2.5 mm² (prises 16A)',     'price' => 2.30, 'is_default' => 1],
                        ['name' => '4 mm² (prises 20A)',       'price' => 3.60, 'is_default' => 0],
                        ['name' => '6 mm² (circuit spécialisé)','price' => 5.20, 'is_default' => 0],
                    ],
                ],
                [
                    'name'  => 'Nombre de conducteurs',
                    'items' => [
                        ['name' => '2G (bipolaire)',  'price' => 1.80, 'is_default' => 0],
                        ['name' => '3G (tripolaire)', 'price' => 2.30, 'is_default' => 1],
                        ['name' => '5G (pentapolaire)','price' => 3.80, 'is_default' => 0],
                    ],
                ],
            ],

            'Laine de verre Isover Isoconfort 35' => [
                [
                    'name'  => 'Épaisseur',
                    'items' => [
                        ['name' => '45 mm (R=1,25)',  'price' => 12.00, 'is_default' => 0],
                        ['name' => '100 mm (R=2,85)', 'price' => 24.90, 'is_default' => 1],
                        ['name' => '150 mm (R=4,25)', 'price' => 35.00, 'is_default' => 0],
                    ],
                ],
                [
                    'name'  => 'Format',
                    'items' => [
                        ['name' => 'Rouleau 6 m²',   'price' => 24.90, 'is_default' => 1],
                        ['name' => 'Rouleau 12 m²',  'price' => 47.00, 'is_default' => 0],
                        ['name' => 'Panneau rigide',  'price' => 32.00, 'is_default' => 0],
                    ],
                ],
            ],

            // ── Vendor products ──────────────────────────────────────────
            'Parpaing béton creux 20×20×50' => [
                [
                    'name'  => 'Dimension',
                    'items' => [
                        ['name' => '10×20×50 cm', 'price' => 0.85, 'is_default' => 0],
                        ['name' => '15×20×50 cm', 'price' => 1.00, 'is_default' => 0],
                        ['name' => '20×20×50 cm', 'price' => 1.20, 'is_default' => 1],
                    ],
                ],
                [
                    'name'  => 'Type',
                    'items' => [
                        ['name' => 'Creux standard', 'price' => 1.20, 'is_default' => 1],
                        ['name' => 'Plein (porteur)', 'price' => 1.80, 'is_default' => 0],
                        ['name' => 'Cellulaire',      'price' => 2.20, 'is_default' => 0],
                    ],
                ],
            ],

            'Robinet mitigeur cuisine Grohe Bauloop' => [
                [
                    'name'  => 'Finition',
                    'items' => [
                        ['name' => 'Chromé brillant',  'price' => 89.00, 'is_default' => 1],
                        ['name' => 'Inox brossé',      'price' => 105.00,'is_default' => 0],
                        ['name' => 'Or brossé',        'price' => 125.00,'is_default' => 0],
                    ],
                ],
                [
                    'name'  => 'Bec',
                    'items' => [
                        ['name' => 'Bec bas fixe',      'price' => 79.00, 'is_default' => 0],
                        ['name' => 'Bec haut orientable','price' => 89.00, 'is_default' => 1],
                        ['name' => 'Bec extractible',   'price' => 115.00,'is_default' => 0],
                    ],
                ],
            ],

            'Disjoncteur différentiel Schneider 40A 30mA' => [
                [
                    'name'  => 'Calibre',
                    'items' => [
                        ['name' => '25 A', 'price' => 28.00, 'is_default' => 0],
                        ['name' => '40 A', 'price' => 34.50, 'is_default' => 1],
                        ['name' => '63 A', 'price' => 45.00, 'is_default' => 0],
                    ],
                ],
                [
                    'name'  => 'Sensibilité',
                    'items' => [
                        ['name' => '10 mA (haute sensibilité)', 'price' => 38.00, 'is_default' => 0],
                        ['name' => '30 mA (standard)',          'price' => 34.50, 'is_default' => 1],
                        ['name' => '300 mA (sélective)',        'price' => 52.00, 'is_default' => 0],
                    ],
                ],
            ],

            'Tuile béton Lafarge Edilians Romane' => [
                [
                    'name'  => 'Coloris',
                    'items' => [
                        ['name' => 'Rouge naturel', 'price' => 3.80, 'is_default' => 1],
                        ['name' => 'Ardoise',       'price' => 4.10, 'is_default' => 0],
                        ['name' => 'Vieilli',       'price' => 4.50, 'is_default' => 0],
                        ['name' => 'Brun basque',   'price' => 4.20, 'is_default' => 0],
                    ],
                ],
                [
                    'name'  => 'Conditionnement',
                    'items' => [
                        ['name' => 'À l\'unité',         'price' => 3.80,  'is_default' => 1],
                        ['name' => 'Palette 120 unités', 'price' => 420.00,'is_default' => 0],
                    ],
                ],
            ],

            'Enduit de façade Saint-Gobain Weber.pral F' => [
                [
                    'name'  => 'Grain',
                    'items' => [
                        ['name' => 'Fin (1,5 mm)',    'price' => 21.00, 'is_default' => 1],
                        ['name' => 'Moyen (2,5 mm)',  'price' => 19.50, 'is_default' => 0],
                        ['name' => 'Grossier (4 mm)', 'price' => 18.00, 'is_default' => 0],
                    ],
                ],
                [
                    'name'  => 'Teinte',
                    'items' => [
                        ['name' => 'Blanc cassé', 'price' => 21.00, 'is_default' => 1],
                        ['name' => 'Beige sable', 'price' => 21.00, 'is_default' => 0],
                        ['name' => 'Gris clair',  'price' => 21.00, 'is_default' => 0],
                        ['name' => 'Ocre',        'price' => 23.00, 'is_default' => 0],
                    ],
                ],
            ],
        ];

        // ----------------------------------------------------------------
        // Chargement des produits admin (vendor_id = 0, admin_id = 1)
        // ----------------------------------------------------------------
        $adminProducts  = Product::where('vendor_id', 0)->where('admin_id', 1)->get();

        // ----------------------------------------------------------------
        // Chargement des produits vendor (vendor_id = 1)
        // ----------------------------------------------------------------
        $vendorProducts = Product::where('vendor_id', 1)->get();

        if ($adminProducts->isEmpty() && $vendorProducts->isEmpty()) {
            $this->command->warn('ProductVariantSeeder: aucun produit trouvé — lancez ProductSeeder d\'abord.');
            return;
        }

        $allProducts = $adminProducts->merge($vendorProducts);

        foreach ($allProducts as $product) {
            $isAdmin   = ($product->vendor_id == 0);
            $adminId   = $isAdmin ? 1 : 0;
            $vendorId  = $isAdmin ? 0 : 1;

            $variants = $variantData[$product->name] ?? null;

            if (! $variants) {
                continue;
            }

            foreach ($variants as $variantDef) {
                $variant = ProductVariant::create([
                    'admin_id'   => $adminId,
                    'vendor_id'  => $vendorId,
                    'product_id' => $product->id,
                    'name'       => $variantDef['name'],
                    'status'     => 1,
                ]);

                foreach ($variantDef['items'] as $itemDef) {
                    ProductVariantItem::create([
                        'product_variant_id' => $variant->id,
                        'product_id'         => $product->id,
                        'admin_id'           => $adminId,
                        'vendor_id'          => $vendorId,
                        'name'               => $itemDef['name'],
                        'price'              => $itemDef['price'],
                        'is_default'         => $itemDef['is_default'],
                        'status'             => 1,
                    ]);
                }
            }
        }

        $adminCount  = $adminProducts->count();
        $vendorCount = $vendorProducts->count();
        $this->command->info("ProductVariantSeeder: variants créés pour {$adminCount} produits admin + {$vendorCount} produits vendor.");
    }
}

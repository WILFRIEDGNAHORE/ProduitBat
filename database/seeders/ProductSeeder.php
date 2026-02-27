<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Seed products for admin (vendor_id=0, admin_id=1)
     * and for vendor (vendor_id=1, admin_id=null).
     */
    public function run(): void
    {
        $category    = Category::first();
        $subCategory = SubCategory::first();
        $child       = ChildCategory::first();
        $brand       = Brand::first();

        if (! $category || ! $brand) {
            $this->command->warn('ProductSeeder: run CategorySeeder and BrandSeeder first.');
            return;
        }

        // ----------------------------------------------------------------
        // Admin products  (vendor_id = 0, admin_id = 1)
        // ----------------------------------------------------------------
        $adminProducts = [
            [
                'name'              => 'Ciment Portland CEM I 52.5',
                'short_description' => 'Ciment de haute résistance pour béton armé et ouvrages structurels.',
                'long_description'  => '<p>Le ciment Portland CEM I 52,5 est un liant hydraulique de classe résistance 52,5 MPa. Idéal pour les bétons armés, dalles, fondations et ouvrages soumis à de fortes charges. Conditionnement en sac de 35 kg.</p>',
                'price'             => 12.50,
                'offer_price'       => 10.90,
                'offer_start_date'  => '2026-03-01',
                'offer_end_date'    => '2026-03-31',
                'qty'               => 500,
                'product_type'      => 'featured_product',
                'is_approved'       => 1,
            ],
            [
                'name'              => 'Mortier-colle Weber.col flex',
                'short_description' => 'Mortier-colle flexible C2TE pour pose de carrelage grand format.',
                'long_description'  => '<p>Mortier-colle amélioré et flexible pour la pose de carrelage céramique, grès cérame et pierre naturelle jusqu\'à 60×60 cm. Convient pour les supports déformables et les zones humides.</p>',
                'price'             => 18.00,
                'offer_price'       => null,
                'offer_start_date'  => null,
                'offer_end_date'    => null,
                'qty'               => 300,
                'product_type'      => 'top_product',
                'is_approved'       => 1,
            ],
            [
                'name'              => 'Plaque de plâtre Knauf BA13',
                'short_description' => 'Plaque standard 2,5 m × 1,2 m, épaisseur 13 mm.',
                'long_description'  => '<p>Plaque de plâtre Knauf BA13 pour cloisons, doublages et plafonds. Bords amincis, prête à enduire. Résistance au feu classée A1. Idéale pour les travaux de second œuvre.</p>',
                'price'             => 9.80,
                'offer_price'       => null,
                'offer_start_date'  => null,
                'offer_end_date'    => null,
                'qty'               => 800,
                'product_type'      => 'best_product',
                'is_approved'       => 1,
            ],
            [
                'name'              => 'Câble électrique U1000R2V 3G2.5',
                'short_description' => 'Câble rigide 3 conducteurs 2.5 mm² pour installation électrique.',
                'long_description'  => '<p>Câble d\'installation U1000R2V tripolaire 3G2,5 mm². Gaine extérieure en PVC, résistant aux UV. Vendu au mètre. Conforme à la norme NF C 32-321. Pour circuits d\'éclairage et prises de courant 16 A.</p>',
                'price'             => 2.30,
                'offer_price'       => 1.99,
                'offer_start_date'  => '2026-03-15',
                'offer_end_date'    => '2026-04-15',
                'qty'               => 2000,
                'product_type'      => 'new_arrival',
                'is_approved'       => 1,
            ],
            [
                'name'              => 'Laine de verre Isover Isoconfort 35',
                'short_description' => 'Rouleau 6 m², épaisseur 100 mm, λ 0,035 W/m·K.',
                'long_description'  => '<p>Laine de verre en rouleau pour isolation thermique des toitures sous rampants et combles aménagés. Classement au feu A2-s1,d0. Rouleau de 6 m², épaisseur 100 mm. Résistance thermique R=2,85 m²·K/W.</p>',
                'price'             => 24.90,
                'offer_price'       => null,
                'offer_start_date'  => null,
                'offer_end_date'    => null,
                'qty'               => 150,
                'product_type'      => 'featured_product',
                'is_approved'       => 1,
            ],
        ];

        foreach ($adminProducts as $index => $data) {
            $slug = Str::slug($data['name']);
            Product::create([
                'name'              => $data['name'],
                'slug'              => $slug . '-admin-' . ($index + 1),
                'thumb_image'       => 'images/products/default.jpg',
                'vendor_id'         => 0,
                'admin_id'          => 1,
                'category_id'       => $category->id,
                'sub_category_id'   => $subCategory?->id,
                'child_category_id' => $child?->id,
                'brand_id'          => $brand->id,
                'qty'               => $data['qty'],
                'short_description' => $data['short_description'],
                'long_description'  => $data['long_description'],
                'video_link'        => null,
                'sku'               => strtoupper(Str::random(8)),
                'price'             => $data['price'],
                'offer_price'       => $data['offer_price'],
                'offer_start_date'  => $data['offer_start_date'],
                'offer_end_date'    => $data['offer_end_date'],
                'product_type'      => $data['product_type'],
                'status'            => 1,
                'is_approved'       => $data['is_approved'],
                'seo_title'         => $data['name'],
                'seo_description'   => $data['short_description'],
            ]);
        }

        // ----------------------------------------------------------------
        // Vendor products  (vendor_id = 1, admin_id = null)
        // ----------------------------------------------------------------
        $vendorProducts = [
            [
                'name'              => 'Parpaing béton creux 20×20×50',
                'short_description' => 'Bloc béton creux standard pour maçonnerie courante.',
                'long_description'  => '<p>Parpaing béton creux aux dimensions 20×20×50 cm. Résistance à la compression ≥ 4 MPa. Vendu à l\'unité ou par palette. Idéal pour la construction de murs porteurs et de clôtures.</p>',
                'price'             => 1.20,
                'offer_price'       => null,
                'offer_start_date'  => null,
                'offer_end_date'    => null,
                'qty'               => 1000,
                'product_type'      => 'top_product',
                'is_approved'       => 0,
            ],
            [
                'name'              => 'Robinet mitigeur cuisine Grohe Bauloop',
                'short_description' => 'Mitigeur monocommande chromé pour évier de cuisine.',
                'long_description'  => '<p>Mitigeur monocommande Grohe Bauloop pour cuisine. Corps en laiton chromé brillant, bec haut orientable 360°. Cartouche céramique longue durée. Conforme aux normes EN 200.</p>',
                'price'             => 89.00,
                'offer_price'       => 74.90,
                'offer_start_date'  => '2026-03-01',
                'offer_end_date'    => '2026-03-31',
                'qty'               => 50,
                'product_type'      => 'featured_product',
                'is_approved'       => 0,
            ],
            [
                'name'              => 'Disjoncteur différentiel Schneider 40A 30mA',
                'short_description' => 'Interrupteur différentiel type AC 40A 30mA pour tableau électrique.',
                'long_description'  => '<p>Interrupteur différentiel Schneider Electric de type AC, calibre 40 A, sensibilité 30 mA. Protection des personnes contre les contacts indirects. Compatible avec les tableaux Rési9 et Pragma.</p>',
                'price'             => 34.50,
                'offer_price'       => null,
                'offer_start_date'  => null,
                'offer_end_date'    => null,
                'qty'               => 200,
                'product_type'      => 'new_arrival',
                'is_approved'       => 1,
            ],
            [
                'name'              => 'Tuile béton Lafarge Edilians Romane',
                'short_description' => 'Tuile de couverture grand moule, coloris rouge naturel.',
                'long_description'  => '<p>Tuile béton grand moule Lafarge Edilians Romane. Poids : 4,3 kg/unité. Couverture minimale : 30°. Résistance au gel/dégel certifiée. Conditionnement par palette de 120 unités.</p>',
                'price'             => 3.80,
                'offer_price'       => 3.20,
                'offer_start_date'  => '2026-04-01',
                'offer_end_date'    => '2026-04-30',
                'qty'               => 600,
                'product_type'      => 'best_product',
                'is_approved'       => 0,
            ],
            [
                'name'              => 'Enduit de façade Saint-Gobain Weber.pral F',
                'short_description' => 'Enduit monocouche hydrofugé pour façades extérieures.',
                'long_description'  => '<p>Enduit monocouche de finition Weber.pral F, grain fin. Application à la machine ou à la main. Hydrofuge en masse. Disponible en 40 teintes. Sac de 25 kg. Consommation : 15 kg/m² pour 10 mm d\'épaisseur.</p>',
                'price'             => 21.00,
                'offer_price'       => null,
                'offer_start_date'  => null,
                'offer_end_date'    => null,
                'qty'               => 400,
                'product_type'      => 'top_product',
                'is_approved'       => 1,
            ],
        ];

        foreach ($vendorProducts as $index => $data) {
            $slug = Str::slug($data['name']);
            Product::create([
                'name'              => $data['name'],
                'slug'              => $slug . '-vendor-' . ($index + 1),
                'thumb_image'       => 'images/products/default.jpg',
                'vendor_id'         => 1,
                'admin_id'          => null,
                'category_id'       => $category->id,
                'sub_category_id'   => $subCategory?->id,
                'child_category_id' => $child?->id,
                'brand_id'          => $brand->id,
                'qty'               => $data['qty'],
                'short_description' => $data['short_description'],
                'long_description'  => $data['long_description'],
                'video_link'        => null,
                'sku'               => strtoupper(Str::random(8)),
                'price'             => $data['price'],
                'offer_price'       => $data['offer_price'],
                'offer_start_date'  => $data['offer_start_date'],
                'offer_end_date'    => $data['offer_end_date'],
                'product_type'      => $data['product_type'],
                'status'            => 1,
                'is_approved'       => $data['is_approved'],
                'seo_title'         => $data['name'],
                'seo_description'   => $data['short_description'],
            ]);
        }

        $this->command->info('ProductSeeder: 5 admin products + 5 vendor products created.');
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\FlashSale;
use App\Models\FlashSaleItem;
use App\Models\Product;
use App\Models\Slider;

class HomeController extends Controller
{
    public function home()
    {
        $sliders               = Slider::where('status', '1')->orderBy('serial', 'ASC')->get();
        $flashSaleDate         = FlashSale::first();
        $flashSaleItemsSliders = FlashSaleItem::where(['status' => '1', 'show_at_home' => '1'])->orderBy('id', 'DESC')->get();
        $categories            = Category::where('status', 1)->get();

        $allProducts = Product::where('status', 1)->where('is_approved', 1)->latest()->take(12)->get();

        $topCats = $categories->take(5);
        $catIds  = $topCats->pluck('id');

        // 1 seule requête pour tous les produits des 5 catégories
        $productsByCatRaw = Product::where('status', 1)->where('is_approved', 1)
            ->whereIn('category_id', $catIds)
            ->latest()
            ->get()
            ->groupBy('category_id');

        $productsByCategory = $topCats->map(fn($cat) => [
            'category' => $cat,
            'products' => $productsByCatRaw->get($cat->id, collect())->take(12),
        ]);

        return view('frontend.home', compact(
            'sliders',
            'flashSaleItemsSliders',
            'flashSaleDate',
            'categories',
            'allProducts',
            'productsByCategory'
        ));
    }
}

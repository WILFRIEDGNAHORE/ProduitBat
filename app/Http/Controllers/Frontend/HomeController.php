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

        $allProducts      = Product::where('status', 1)->where('is_approved', 1)->latest()->take(12)->get();
        $productsByCategory = $categories->take(5)->map(function ($cat) {
            return [
                'category' => $cat,
                'products' => Product::where('status', 1)
                    ->where('is_approved', 1)
                    ->where('category_id', $cat->id)
                    ->latest()
                    ->take(12)
                    ->get(),
            ];
        });

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

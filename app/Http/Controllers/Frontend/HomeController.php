<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\TopCategorySection;
use App\Models\FlashSale;
use App\Models\FlashSaleItem;
use App\Models\Slider;

class HomeController extends Controller
{
    public function home(){
        $sliders = Slider::where('status', '1')->orderBy('serial', 'ASC')->get();
        $flashSaleDate = FlashSale::first();
        $flashSaleItemsSliders = FlashSaleItem::where(['status' => '1', 'show_at_home' => '1'])->orderBy('id', 'DESC')->get();
        $topCategories = TopCategorySection::first();

        // Load categories from admin-selected top category section; fall back to all active categories
        if ($topCategories && $topCategories->value) {
            $topData     = collect(json_decode($topCategories->value, true))->pluck('category')->filter()->values();
            $categories  = Category::where('status', 1)->whereIn('name', $topData)->get()
                               ->sortBy(fn($c) => $topData->search($c->name))->values();
        } else {
            $categories = Category::where('status', 1)->get();
        }

        return view('frontend.home', compact(
            'sliders',
            'flashSaleItemsSliders',
            'flashSaleDate',
            'topCategories',
            'categories'
        ));
    }
}
<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::where('status', 1)->where('is_approved', 1);

        if ($request->filled('category')) {
            $query->whereIn('category_id', (array) $request->category);
        }

        if ($request->filled('brand')) {
            $query->whereIn('brand_id', (array) $request->brand);
        }

        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }

        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $sort = $request->get('sort', 'latest');
        match ($sort) {
            'price_asc'  => $query->orderBy('price', 'asc'),
            'price_desc' => $query->orderBy('price', 'desc'),
            'name_asc'   => $query->orderBy('name', 'asc'),
            'name_desc'  => $query->orderBy('name', 'desc'),
            default      => $query->latest(),
        };

        $products   = $query->paginate(12)->withQueryString();
        $categories = Category::where('status', 1)->get()->map(function ($cat) {
            $cat->products_count = Product::where('status', 1)->where('is_approved', 1)->where('category_id', $cat->id)->count();
            return $cat;
        });
        $brands = Brand::where('status', 1)->get()->map(function ($brand) {
            $brand->products_count = Product::where('status', 1)->where('is_approved', 1)->where('brand_id', $brand->id)->count();
            return $brand;
        });

        $minPrice = Product::where('status', 1)->where('is_approved', 1)->min('price') ?? 0;
        $maxPrice = Product::where('status', 1)->where('is_approved', 1)->max('price') ?? 100000;

        return view('frontend.pages.nos-produits', compact(
            'products',
            'categories',
            'brands',
            'minPrice',
            'maxPrice',
            'sort'
        ));
    }
}

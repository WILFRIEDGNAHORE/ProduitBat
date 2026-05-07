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

        $products = $query->paginate(12)->withQueryString();

        // Counts en 1 seule requête GROUP BY au lieu de N requêtes
        $catCounts   = Product::where('status', 1)->where('is_approved', 1)
            ->selectRaw('category_id, count(*) as total')
            ->groupBy('category_id')->pluck('total', 'category_id');

        $brandCounts = Product::where('status', 1)->where('is_approved', 1)
            ->selectRaw('brand_id, count(*) as total')
            ->groupBy('brand_id')->pluck('total', 'brand_id');

        $categories = Category::where('status', 1)->get()->each(function ($cat) use ($catCounts) {
            $cat->products_count = $catCounts[$cat->id] ?? 0;
        });
        $brands = Brand::where('status', 1)->get()->each(function ($brand) use ($brandCounts) {
            $brand->products_count = $brandCounts[$brand->id] ?? 0;
        });

        $priceRange = Product::where('status', 1)->where('is_approved', 1)
            ->selectRaw('min(price) as min_p, max(price) as max_p')
            ->first();
        $minPrice = $priceRange->min_p ?? 0;
        $maxPrice = $priceRange->max_p ?? 100000;

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

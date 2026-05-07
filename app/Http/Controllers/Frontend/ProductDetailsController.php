<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FlashSale;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::with([
            'variants.variantItem',
            'productGallery',
            'storeStocks.store',
        ])->findOrFail($id);

        $flashSaleDate = FlashSale::first();

        // Toutes boutiques actives avec leur stock (même à 0 ou absent)
        $allStores = Store::where('status', true)->orderBy('type')->get(); // centrale (c) avant vente (v)
        $stockMap  = $product->storeStocks->keyBy('store_id');

        $storeStocks = $allStores->map(function ($store) use ($stockMap, $product) {
            $ss = $stockMap->get($store->id);
            if ($ss) {
                return $ss;
            }
            // Boutique sans ligne store_stock → qty = 0 virtuel
            $virtual = new \App\Models\StoreStock([
                'store_id'            => $store->id,
                'product_id'          => $product->id,
                'qty'                 => 0,
                'low_stock_threshold' => 5,
            ]);
            $virtual->setRelation('store', $store);
            return $virtual;
        });

        // Présélection : première boutique avec stock > 0
        $defaultStoreId = $storeStocks->firstWhere('qty', '>', 0)?->store_id;

        return view('frontend.pages.product-details', compact(
            'product', 'flashSaleDate', 'storeStocks', 'defaultStoreId'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
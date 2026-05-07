<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Store;
use App\Models\StoreStock;
use Illuminate\Http\Request;

class StoreStockController extends Controller
{
    public function index(Request $request)
    {
        $stores   = Store::where('status', true)->get();
        $storeId  = $request->get('store_id', $stores->first()?->id);
        $search   = $request->get('search');

        $store = Store::find($storeId);

        $products = Product::where('status', 1)
            ->where('is_approved', 1)
            ->when($search, fn($q) => $q->where('name', 'like', "%{$search}%"))
            ->with(['storeStocks' => fn($q) => $q->where('store_id', $storeId), 'category'])
            ->orderBy('name')
            ->paginate(30)
            ->withQueryString();

        return view('admin.stock.index', compact('stores', 'store', 'products', 'storeId', 'search'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'stocks'                => ['required', 'array'],
            'stocks.*.product_id'   => ['required', 'exists:products,id'],
            'stocks.*.store_id'     => ['required', 'exists:stores,id'],
            'stocks.*.qty'          => ['required', 'integer', 'min:0'],
            'stocks.*.threshold'    => ['nullable', 'integer', 'min:0'],
        ]);

        foreach ($request->stocks as $row) {
            $stock = StoreStock::updateOrCreate(
                ['store_id' => $row['store_id'], 'product_id' => $row['product_id']],
                [
                    'qty'                 => $row['qty'],
                    'low_stock_threshold' => $row['threshold'] ?? 5,
                ]
            );

            $stock->product->syncQtyFromStores();
        }

        notyf()->success('Stocks mis à jour avec succès !');
        return back();
    }

    public function adjustOne(Request $request)
    {
        $request->validate([
            'store_id'   => ['required', 'exists:stores,id'],
            'product_id' => ['required', 'exists:products,id'],
            'qty'        => ['required', 'integer', 'min:0'],
            'threshold'  => ['nullable', 'integer', 'min:0'],
        ]);

        $stock = StoreStock::updateOrCreate(
            ['store_id' => $request->store_id, 'product_id' => $request->product_id],
            ['qty' => $request->qty, 'low_stock_threshold' => $request->threshold ?? 5]
        );

        $stock->product->syncQtyFromStores();

        return response()->json([
            'status'    => 'success',
            'total_qty' => $stock->product->qty,
        ]);
    }
}

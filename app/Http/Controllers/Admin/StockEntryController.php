<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Store;
use App\Models\StockEntry;
use App\Models\StoreStock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StockEntryController extends Controller
{
    public function index(Request $request)
    {
        $stores  = Store::where('status', true)->get();
        $query   = StockEntry::with(['store', 'product', 'creator'])->latest();

        if ($request->filled('store_id')) {
            $query->where('store_id', $request->store_id);
        }
        if ($request->filled('product_id')) {
            $query->where('product_id', $request->product_id);
        }
        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $entries  = $query->paginate(20)->withQueryString();
        $products = Product::where('status', 1)->orderBy('name')->get();

        return view('admin.stock-entry.index', compact('entries', 'stores', 'products'));
    }

    public function create()
    {
        $stores   = Store::where('status', true)->get();
        $products = Product::where('status', 1)->where('is_approved', 1)->orderBy('name')->get();

        return view('admin.stock-entry.create', compact('stores', 'products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'store_id'   => ['required', 'exists:stores,id'],
            'product_id' => ['required', 'exists:products,id'],
            'qty'        => ['required', 'integer', 'min:1'],
            'unit_cost'  => ['nullable', 'numeric', 'min:0'],
            'reference'  => ['nullable', 'string', 'max:100'],
            'note'       => ['nullable', 'string'],
        ]);

        $entry = StockEntry::create([
            'store_id'   => $request->store_id,
            'product_id' => $request->product_id,
            'qty'        => $request->qty,
            'unit_cost'  => $request->unit_cost,
            'reference'  => $request->reference,
            'note'       => $request->note,
            'created_by' => Auth::guard('admin')->id(),
        ]);

        // Mettre à jour le stock de la boutique
        $stock = StoreStock::firstOrCreate(
            ['store_id' => $request->store_id, 'product_id' => $request->product_id],
            ['qty' => 0, 'low_stock_threshold' => 5]
        );
        $stock->increment('qty', $request->qty);
        $stock->product->syncQtyFromStores();

        notyf()->success("Entrée de {$request->qty} unité(s) enregistrée !");
        return redirect()->route('admin.stock-entry.index');
    }

    public function show(StockEntry $stockEntry)
    {
        $stockEntry->load(['store', 'product', 'creator']);
        return view('admin.stock-entry.show', compact('stockEntry'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Store;
use App\Models\StockTransfer;
use App\Models\StoreStock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StockTransferController extends Controller
{
    public function index(Request $request)
    {
        $query = StockTransfer::with(['fromStore', 'toStore', 'product', 'creator'])->latest();

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        if ($request->filled('store_id')) {
            $query->where(function ($q) use ($request) {
                $q->where('from_store_id', $request->store_id)
                  ->orWhere('to_store_id', $request->store_id);
            });
        }

        $transfers = $query->paginate(20)->withQueryString();
        $stores    = Store::where('status', true)->get();
        $statuses  = StockTransfer::STATUSES;

        return view('admin.stock-transfer.index', compact('transfers', 'stores', 'statuses'));
    }

    public function create()
    {
        $stores   = Store::where('status', true)->get();
        $products = Product::where('status', 1)->where('is_approved', 1)->orderBy('name')->get();

        return view('admin.stock-transfer.create', compact('stores', 'products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'from_store_id' => ['required', 'exists:stores,id', 'different:to_store_id'],
            'to_store_id'   => ['required', 'exists:stores,id'],
            'product_id'    => ['required', 'exists:products,id'],
            'qty'           => ['required', 'integer', 'min:1'],
            'note'          => ['nullable', 'string'],
        ]);

        // Vérifier stock suffisant dans la boutique source
        $sourceStock = StoreStock::where('store_id', $request->from_store_id)
            ->where('product_id', $request->product_id)
            ->first();

        if (!$sourceStock || $sourceStock->qty < $request->qty) {
            $available = $sourceStock?->qty ?? 0;
            notyf()->error("Stock insuffisant dans la boutique source ({$available} disponible).");
            return back()->withInput();
        }

        StockTransfer::create([
            'from_store_id' => $request->from_store_id,
            'to_store_id'   => $request->to_store_id,
            'product_id'    => $request->product_id,
            'qty'           => $request->qty,
            'status'        => 'pending',
            'note'          => $request->note,
            'created_by'    => Auth::guard('admin')->id(),
        ]);

        notyf()->success('Transfert créé, en attente de validation.');
        return redirect()->route('admin.stock-transfer.index');
    }

    public function show(StockTransfer $stockTransfer)
    {
        $stockTransfer->load(['fromStore', 'toStore', 'product', 'creator', 'approver']);
        return view('admin.stock-transfer.show', compact('stockTransfer'));
    }

    public function approve(StockTransfer $stockTransfer)
    {
        if (!$stockTransfer->isPending()) {
            notyf()->error('Ce transfert ne peut pas être approuvé.');
            return back();
        }

        $stockTransfer->update([
            'status'      => 'in_transit',
            'approved_by' => Auth::guard('admin')->id(),
        ]);

        notyf()->success('Transfert approuvé — en transit.');
        return back();
    }

    public function receive(StockTransfer $stockTransfer)
    {
        if ($stockTransfer->status !== 'in_transit') {
            notyf()->error('Ce transfert ne peut pas être réceptionné.');
            return back();
        }

        DB::transaction(function () use ($stockTransfer) {
            // Déduire de la boutique source
            $from = StoreStock::firstOrCreate(
                ['store_id' => $stockTransfer->from_store_id, 'product_id' => $stockTransfer->product_id],
                ['qty' => 0, 'low_stock_threshold' => 5]
            );
            $from->decrement('qty', $stockTransfer->qty);

            // Ajouter à la boutique destination
            $to = StoreStock::firstOrCreate(
                ['store_id' => $stockTransfer->to_store_id, 'product_id' => $stockTransfer->product_id],
                ['qty' => 0, 'low_stock_threshold' => 5]
            );
            $to->increment('qty', $stockTransfer->qty);

            // Resync le total produit
            $stockTransfer->product->syncQtyFromStores();

            $stockTransfer->update([
                'status'      => 'received',
                'received_at' => now(),
            ]);
        });

        notyf()->success('Transfert réceptionné, stock mis à jour.');
        return back();
    }

    public function cancel(StockTransfer $stockTransfer)
    {
        if ($stockTransfer->isReceived() || $stockTransfer->isCancelled()) {
            notyf()->error('Ce transfert ne peut pas être annulé.');
            return back();
        }

        $stockTransfer->update(['status' => 'cancelled']);

        notyf()->success('Transfert annulé.');
        return back();
    }
}

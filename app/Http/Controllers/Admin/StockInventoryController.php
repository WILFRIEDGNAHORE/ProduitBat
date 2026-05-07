<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Store;
use App\Models\StockInventory;
use App\Models\StockInventoryLine;
use App\Models\StoreStock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StockInventoryController extends Controller
{
    public function index()
    {
        $inventories = StockInventory::with(['store', 'creator'])
            ->withCount('lines')
            ->latest()
            ->paginate(15);

        return view('admin.stock-inventory.index', compact('inventories'));
    }

    public function create()
    {
        $stores = Store::where('status', true)->get();
        return view('admin.stock-inventory.create', compact('stores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'store_id' => ['required', 'exists:stores,id'],
            'label'    => ['required', 'string', 'max:150'],
            'note'     => ['nullable', 'string'],
        ]);

        $inventory = StockInventory::create([
            'store_id'   => $request->store_id,
            'label'      => $request->label,
            'note'       => $request->note,
            'status'     => 'draft',
            'created_by' => Auth::guard('admin')->id(),
        ]);

        // Pré-remplir les lignes avec le stock système actuel
        $stocks = StoreStock::where('store_id', $request->store_id)
            ->with('product')
            ->get();

        foreach ($stocks as $ss) {
            StockInventoryLine::create([
                'stock_inventory_id' => $inventory->id,
                'product_id'         => $ss->product_id,
                'qty_system'         => $ss->qty,
                'qty_real'           => $ss->qty, // pré-rempli, à corriger par l'opérateur
            ]);
        }

        notyf()->success('Inventaire créé — saisissez les quantités réelles.');
        return redirect()->route('admin.stock-inventory.edit', $inventory->id);
    }

    public function edit(StockInventory $stockInventory)
    {
        if ($stockInventory->isValidated()) {
            return redirect()->route('admin.stock-inventory.show', $stockInventory->id);
        }

        $stockInventory->load(['store', 'lines.product']);
        return view('admin.stock-inventory.edit', compact('stockInventory'));
    }

    public function update(Request $request, StockInventory $stockInventory)
    {
        if ($stockInventory->isValidated()) {
            notyf()->error('Cet inventaire est déjà validé.');
            return back();
        }

        $request->validate([
            'lines'          => ['required', 'array'],
            'lines.*.id'     => ['required', 'exists:stock_inventory_lines,id'],
            'lines.*.qty_real' => ['required', 'integer', 'min:0'],
        ]);

        foreach ($request->lines as $lineData) {
            StockInventoryLine::where('id', $lineData['id'])->update([
                'qty_real' => $lineData['qty_real'],
            ]);
        }

        notyf()->success('Quantités sauvegardées.');
        return back();
    }

    public function validate(StockInventory $stockInventory)
    {
        if ($stockInventory->isValidated()) {
            notyf()->error('Déjà validé.');
            return back();
        }

        DB::transaction(function () use ($stockInventory) {
            foreach ($stockInventory->lines as $line) {
                if ($line->qty_real !== $line->qty_system) {
                    StoreStock::updateOrCreate(
                        ['store_id' => $stockInventory->store_id, 'product_id' => $line->product_id],
                        ['qty' => $line->qty_real]
                    );
                    $line->product->syncQtyFromStores();
                }
            }

            $stockInventory->update([
                'status'       => 'validated',
                'validated_at' => now(),
            ]);
        });

        notyf()->success('Inventaire validé — stock ajusté.');
        return redirect()->route('admin.stock-inventory.show', $stockInventory->id);
    }

    public function show(StockInventory $stockInventory)
    {
        $stockInventory->load(['store', 'creator', 'lines.product']);
        return view('admin.stock-inventory.show', compact('stockInventory'));
    }
}

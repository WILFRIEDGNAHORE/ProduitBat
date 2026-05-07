<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\StockEntry;
use App\Models\StockInventory;
use App\Models\StockTransfer;
use App\Models\StoreStock;
use Illuminate\Http\Request;

class StockReportController extends Controller
{
    // ── Dashboard global ─────────────────────────────────────────
    public function dashboard()
    {
        $stores = Store::where('status', true)->get();

        // Stats par boutique
        $storeStats = $stores->map(function ($store) {
            $stocks = StoreStock::where('store_id', $store->id)->get();
            return [
                'store'       => $store,
                'total_skus'  => $stocks->count(),
                'out_of_stock'=> $stocks->where('qty', '<=', 0)->count(),
                'low_stock'   => $stocks->filter(fn($s) => $s->qty > 0 && $s->qty <= $s->low_stock_threshold)->count(),
                'ok'          => $stocks->filter(fn($s) => $s->qty > $s->low_stock_threshold)->count(),
                'total_units' => $stocks->sum('qty'),
            ];
        });

        // Top produits épuisés (toutes boutiques)
        $outOfStock = StoreStock::with(['product', 'store'])
            ->where('qty', '<=', 0)
            ->latest('updated_at')
            ->take(10)
            ->get();

        // Top produits stock faible
        $lowStock = StoreStock::with(['product', 'store'])
            ->whereRaw('qty > 0 AND qty <= low_stock_threshold')
            ->orderBy('qty')
            ->take(10)
            ->get();

        // Activité récente (dernières entrées + transferts)
        $recentEntries   = StockEntry::with(['store', 'product'])->latest()->take(5)->get();
        $recentTransfers = StockTransfer::with(['fromStore', 'toStore', 'product'])->latest()->take(5)->get();

        return view('admin.stock-report.dashboard', compact(
            'stores', 'storeStats', 'outOfStock', 'lowStock', 'recentEntries', 'recentTransfers'
        ));
    }

    // ── Page alertes ─────────────────────────────────────────────
    public function alerts(Request $request)
    {
        $storeId = $request->get('store_id');

        $outQuery = StoreStock::with(['product.category', 'store'])
            ->where('qty', '<=', 0);

        $lowQuery = StoreStock::with(['product.category', 'store'])
            ->whereRaw('qty > 0 AND qty <= low_stock_threshold');

        if ($storeId) {
            $outQuery->where('store_id', $storeId);
            $lowQuery->where('store_id', $storeId);
        }

        $outOfStock = $outQuery->orderBy('updated_at', 'desc')->get();
        $lowStock   = $lowQuery->orderBy('qty')->get();
        $stores     = Store::where('status', true)->get();

        return view('admin.stock-report.alerts', compact('outOfStock', 'lowStock', 'stores', 'storeId'));
    }

    // ── Exports CSV ──────────────────────────────────────────────
    public function exportEntries(Request $request)
    {
        $query = StockEntry::with(['store', 'product', 'creator'])
            ->latest();

        if ($request->filled('store_id'))   $query->where('store_id', $request->store_id);
        if ($request->filled('date_from'))  $query->whereDate('created_at', '>=', $request->date_from);
        if ($request->filled('date_to'))    $query->whereDate('created_at', '<=', $request->date_to);

        $entries = $query->get();

        $filename = 'entrees-stock-' . now()->format('Y-m-d') . '.csv';
        $headers  = [
            'Content-Type'        => 'text/csv; charset=UTF-8',
            'Content-Disposition' => "attachment; filename=\"{$filename}\"",
        ];

        $callback = function () use ($entries) {
            $f = fopen('php://output', 'w');
            fprintf($f, chr(0xEF) . chr(0xBB) . chr(0xBF)); // BOM UTF-8
            fputcsv($f, ['ID', 'Date', 'Boutique', 'Produit', 'Qté', 'Coût unit.', 'Référence', 'Note', 'Par'], ';');

            foreach ($entries as $e) {
                fputcsv($f, [
                    $e->id,
                    $e->created_at->format('d/m/Y H:i'),
                    $e->store->name,
                    $e->product->name,
                    $e->qty,
                    $e->unit_cost ?? '',
                    $e->reference ?? '',
                    $e->note ?? '',
                    $e->creator?->name ?? '',
                ], ';');
            }
            fclose($f);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function exportTransfers(Request $request)
    {
        $query = StockTransfer::with(['fromStore', 'toStore', 'product', 'creator'])->latest();

        if ($request->filled('status'))   $query->where('status', $request->status);
        if ($request->filled('store_id')) {
            $query->where(function ($q) use ($request) {
                $q->where('from_store_id', $request->store_id)->orWhere('to_store_id', $request->store_id);
            });
        }

        $transfers = $query->get();

        $filename = 'transferts-' . now()->format('Y-m-d') . '.csv';
        $headers  = [
            'Content-Type'        => 'text/csv; charset=UTF-8',
            'Content-Disposition' => "attachment; filename=\"{$filename}\"",
        ];

        $callback = function () use ($transfers) {
            $f = fopen('php://output', 'w');
            fprintf($f, chr(0xEF) . chr(0xBB) . chr(0xBF));
            fputcsv($f, ['ID', 'Date', 'De', 'Vers', 'Produit', 'Qté', 'Statut', 'Reçu le', 'Note'], ';');

            foreach ($transfers as $t) {
                fputcsv($f, [
                    $t->id,
                    $t->created_at->format('d/m/Y H:i'),
                    $t->fromStore->name,
                    $t->toStore->name,
                    $t->product->name,
                    $t->qty,
                    $t->statusLabel(),
                    $t->received_at?->format('d/m/Y H:i') ?? '',
                    $t->note ?? '',
                ], ';');
            }
            fclose($f);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function exportInventory(StockInventory $stockInventory)
    {
        $stockInventory->load(['store', 'lines.product']);

        $filename = 'inventaire-' . $stockInventory->id . '-' . now()->format('Y-m-d') . '.csv';
        $headers  = [
            'Content-Type'        => 'text/csv; charset=UTF-8',
            'Content-Disposition' => "attachment; filename=\"{$filename}\"",
        ];

        $callback = function () use ($stockInventory) {
            $f = fopen('php://output', 'w');
            fprintf($f, chr(0xEF) . chr(0xBB) . chr(0xBF));
            fputcsv($f, ['Boutique', 'Libellé', 'Validé le'], ';');
            fputcsv($f, [
                $stockInventory->store->name,
                $stockInventory->label,
                $stockInventory->validated_at?->format('d/m/Y') ?? 'Brouillon',
            ], ';');
            fputcsv($f, [], ';');
            fputcsv($f, ['Produit', 'Qté système', 'Qté réelle', 'Écart'], ';');

            foreach ($stockInventory->lines as $line) {
                fputcsv($f, [
                    $line->product->name,
                    $line->qty_system,
                    $line->qty_real,
                    $line->gap,
                ], ';');
            }
            fclose($f);
        };

        return response()->stream($callback, 200, $headers);
    }
}

@extends('admin.layouts.layout')
@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col"><h2 class="page-title">Entrées de stock</h2></div>
            <div class="col-auto ms-auto d-flex gap-2">
                <a href="{{ route('admin.stock-report.export.entries', request()->all()) }}"
                   class="btn btn-outline-secondary">
                    <iconify-icon icon="solar:download-minimalistic-bold"></iconify-icon> CSV
                </a>
                <a href="{{ route('admin.stock-entry.create') }}" class="btn btn-primary">
                    + Nouvelle entrée
                </a>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">

        {{-- Filtres --}}
        <div class="card mb-3">
            <div class="card-body">
                <form method="GET" action="{{ route('admin.stock-entry.index') }}" class="row g-3 align-items-end">
                    <div class="col-md-3">
                        <label class="form-label">Boutique</label>
                        <select name="store_id" class="form-select form-select-sm">
                            <option value="">Toutes</option>
                            @foreach($stores as $s)
                                <option value="{{ $s->id }}" {{ request('store_id') == $s->id ? 'selected' : '' }}>{{ $s->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Produit</label>
                        <select name="product_id" class="form-select form-select-sm">
                            <option value="">Tous</option>
                            @foreach($products as $p)
                                <option value="{{ $p->id }}" {{ request('product_id') == $p->id ? 'selected' : '' }}>{{ $p->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Du</label>
                        <input type="date" name="date_from" value="{{ request('date_from') }}" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Au</label>
                        <input type="date" name="date_to" value="{{ request('date_to') }}" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-2 d-flex gap-2">
                        <button type="submit" class="btn btn-sm btn-secondary">Filtrer</button>
                        <a href="{{ route('admin.stock-entry.index') }}" class="btn btn-sm btn-outline-secondary">✕</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-vcenter table-striped card-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Boutique</th>
                                <th>Produit</th>
                                <th>Qté reçue</th>
                                <th>Coût unit.</th>
                                <th>Référence</th>
                                <th>Par</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($entries as $entry)
                                <tr>
                                    <td class="text-muted">{{ $entry->id }}</td>
                                    <td>{{ $entry->created_at->format('d/m/Y H:i') }}</td>
                                    <td><span class="fw-semibold">{{ $entry->store->name }}</span></td>
                                    <td>{{ $entry->product->name }}</td>
                                    <td><span class="badge bg-success-lt fw-semibold">+{{ $entry->qty }}</span></td>
                                    <td>{{ $entry->unit_cost ? number_format($entry->unit_cost, 0) . ' CFA' : '—' }}</td>
                                    <td class="text-muted small">{{ $entry->reference ?? '—' }}</td>
                                    <td class="text-muted small">{{ $entry->creator?->name ?? 'Admin' }}</td>
                                </tr>
                            @empty
                                <tr><td colspan="8" class="text-center py-4 text-muted">Aucune entrée enregistrée.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            @if($entries->hasPages())
                <div class="card-footer">{{ $entries->links() }}</div>
            @endif
        </div>

    </div>
</div>
@endsection

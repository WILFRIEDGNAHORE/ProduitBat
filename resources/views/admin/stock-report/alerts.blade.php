@extends('admin.layouts.layout')
@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">Alertes Stock</h2>
                @if($stockAlertCount > 0)
                    <div class="text-muted">
                        <span class="badge bg-danger me-1">{{ $outOfStock->count() }}</span> épuisé(s) —
                        <span class="badge bg-warning-lt text-warning ms-1">{{ $lowStock->count() }}</span> stock faible
                    </div>
                @endif
            </div>
            <div class="col-auto ms-auto d-flex gap-2">
                <a href="{{ route('admin.stock-entry.create') }}" class="btn btn-success btn-sm">
                    + Entrée de stock
                </a>
                <a href="{{ route('admin.stock-transfer.create') }}" class="btn btn-outline-secondary btn-sm">
                    Transférer
                </a>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">

        {{-- Filtre boutique --}}
        <div class="card mb-3">
            <div class="card-body py-2">
                <form method="GET" action="{{ route('admin.stock-report.alerts') }}" class="d-flex gap-2 align-items-center">
                    <label class="mb-0 small fw-semibold">Boutique :</label>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="{{ route('admin.stock-report.alerts') }}"
                           class="btn btn-sm {{ !$storeId ? 'btn-primary' : 'btn-outline-secondary' }}">Toutes</a>
                        @foreach($stores as $s)
                            <a href="{{ route('admin.stock-report.alerts', ['store_id' => $s->id]) }}"
                               class="btn btn-sm {{ $storeId == $s->id ? 'btn-primary' : 'btn-outline-secondary' }}">
                                {{ $s->name }}
                            </a>
                        @endforeach
                    </div>
                </form>
            </div>
        </div>

        {{-- Épuisés --}}
        <div class="card mb-4 {{ $outOfStock->isEmpty() ? '' : 'border-danger' }}">
            <div class="card-header bg-danger-lt d-flex justify-content-between align-items-center">
                <span class="fw-semibold text-danger d-flex align-items-center gap-2">
                    <iconify-icon icon="solar:danger-bold-duotone"></iconify-icon>
                    Produits épuisés
                    <span class="badge bg-danger">{{ $outOfStock->count() }}</span>
                </span>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>Produit</th>
                                <th>Catégorie</th>
                                <th>Boutique</th>
                                <th>Dernière MAJ</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($outOfStock as $ss)
                                <tr>
                                    <td class="fw-semibold">{{ $ss->product->name }}</td>
                                    <td class="text-muted small">{{ $ss->product->category?->name ?? '—' }}</td>
                                    <td>{{ $ss->store->name }}</td>
                                    <td class="text-muted small">{{ $ss->updated_at->format('d/m/Y H:i') }}</td>
                                    <td class="text-end d-flex gap-1 justify-content-end">
                                        <a href="{{ route('admin.stock-entry.create') }}?store_id={{ $ss->store_id }}&product_id={{ $ss->product_id }}"
                                           class="btn btn-sm btn-success">+ Stock</a>
                                        <a href="{{ route('admin.stock-transfer.create') }}?to_store_id={{ $ss->store_id }}&product_id={{ $ss->product_id }}"
                                           class="btn btn-sm btn-outline-secondary">Transférer</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-4 text-success fw-semibold">
                                        Aucun produit épuisé 🎉
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Stock faible --}}
        <div class="card {{ $lowStock->isEmpty() ? '' : 'border-warning' }}">
            <div class="card-header bg-warning-lt d-flex justify-content-between align-items-center">
                <span class="fw-semibold text-warning d-flex align-items-center gap-2">
                    <iconify-icon icon="solar:shield-warning-bold-duotone"></iconify-icon>
                    Stock faible (sous le seuil d'alerte)
                    <span class="badge bg-warning text-dark">{{ $lowStock->count() }}</span>
                </span>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>Produit</th>
                                <th>Catégorie</th>
                                <th>Boutique</th>
                                <th class="text-center">Qté actuelle</th>
                                <th class="text-center">Seuil</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($lowStock as $ss)
                                <tr>
                                    <td class="fw-semibold">{{ $ss->product->name }}</td>
                                    <td class="text-muted small">{{ $ss->product->category?->name ?? '—' }}</td>
                                    <td>{{ $ss->store->name }}</td>
                                    <td class="text-center">
                                        <span class="badge bg-warning text-dark fw-semibold">{{ $ss->qty }}</span>
                                    </td>
                                    <td class="text-center text-muted">≤ {{ $ss->low_stock_threshold }}</td>
                                    <td class="text-end">
                                        <a href="{{ route('admin.stock-entry.create') }}?store_id={{ $ss->store_id }}&product_id={{ $ss->product_id }}"
                                           class="btn btn-sm btn-success">+ Stock</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-4 text-success fw-semibold">
                                        Tous les stocks sont au-dessus du seuil 🎉
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

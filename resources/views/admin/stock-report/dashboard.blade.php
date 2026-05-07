@extends('admin.layouts.layout')
@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col"><h2 class="page-title">Dashboard Stock</h2></div>
            <div class="col-auto ms-auto d-flex gap-2">
                <a href="{{ route('admin.stock-report.export.entries', request()->all()) }}"
                   class="btn btn-outline-secondary btn-sm">
                    <iconify-icon icon="solar:download-minimalistic-bold"></iconify-icon>
                    CSV Entrées
                </a>
                <a href="{{ route('admin.stock-report.export.transfers', request()->all()) }}"
                   class="btn btn-outline-secondary btn-sm">
                    <iconify-icon icon="solar:download-minimalistic-bold"></iconify-icon>
                    CSV Transferts
                </a>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">

        {{-- Stats par boutique --}}
        <div class="row g-3 mb-4">
            @foreach($storeStats as $stat)
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="fw-semibold">{{ $stat['store']->name }}</span>
                        @if($stat['store']->isCentrale())
                            <span class="badge bg-purple-lt">Centrale</span>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="row g-2 text-center">
                            <div class="col-4">
                                <div class="h3 mb-0">{{ $stat['total_units'] }}</div>
                                <div class="text-muted small">Unités</div>
                            </div>
                            <div class="col-4">
                                <div class="h3 mb-0 {{ $stat['low_stock'] > 0 ? 'text-warning' : '' }}">
                                    {{ $stat['low_stock'] }}
                                </div>
                                <div class="text-muted small">Stock faible</div>
                            </div>
                            <div class="col-4">
                                <div class="h3 mb-0 {{ $stat['out_of_stock'] > 0 ? 'text-danger' : '' }}">
                                    {{ $stat['out_of_stock'] }}
                                </div>
                                <div class="text-muted small">Épuisés</div>
                            </div>
                        </div>
                        @php $total = max($stat['total_skus'], 1); @endphp
                        <div class="mt-3">
                            <div class="progress" style="height:8px">
                                <div class="progress-bar bg-success"
                                     style="width:{{ round($stat['ok']/$total*100) }}%"
                                     title="{{ $stat['ok'] }} OK"></div>
                                <div class="progress-bar bg-warning"
                                     style="width:{{ round($stat['low_stock']/$total*100) }}%"
                                     title="{{ $stat['low_stock'] }} Stock faible"></div>
                                <div class="progress-bar bg-danger"
                                     style="width:{{ round($stat['out_of_stock']/$total*100) }}%"
                                     title="{{ $stat['out_of_stock'] }} Épuisés"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-1 small text-muted">
                                <span>{{ $stat['ok'] }} OK</span>
                                <span>{{ $stat['low_stock'] }} faible</span>
                                <span>{{ $stat['out_of_stock'] }} épuisé</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row g-3">

            {{-- Produits épuisés --}}
            <div class="col-lg-6">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="fw-semibold text-danger">
                            <iconify-icon icon="solar:danger-bold-duotone" class="me-1"></iconify-icon>
                            Épuisés ({{ $outOfStock->count() }})
                        </span>
                        <a href="{{ route('admin.stock-report.alerts') }}" class="text-muted small">Voir tout →</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-sm table-vcenter card-table mb-0">
                                <thead><tr><th>Produit</th><th>Boutique</th><th class="text-end">Action</th></tr></thead>
                                <tbody>
                                    @forelse($outOfStock as $ss)
                                        <tr>
                                            <td class="fw-semibold small">{{ $ss->product->name }}</td>
                                            <td class="text-muted small">{{ $ss->store->name }}</td>
                                            <td class="text-end">
                                                <a href="{{ route('admin.stock-entry.create') }}"
                                                   class="btn btn-xs btn-outline-success py-0 px-2">+ Stock</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="3" class="text-center py-3 text-muted small">Aucun produit épuisé 🎉</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Stock faible --}}
            <div class="col-lg-6">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="fw-semibold text-warning">
                            <iconify-icon icon="solar:shield-warning-bold-duotone" class="me-1"></iconify-icon>
                            Stock faible ({{ $lowStock->count() }})
                        </span>
                        <a href="{{ route('admin.stock-report.alerts') }}" class="text-muted small">Voir tout →</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-sm table-vcenter card-table mb-0">
                                <thead><tr><th>Produit</th><th>Boutique</th><th class="text-center">Stock</th><th class="text-center">Seuil</th></tr></thead>
                                <tbody>
                                    @forelse($lowStock as $ss)
                                        <tr>
                                            <td class="fw-semibold small">{{ $ss->product->name }}</td>
                                            <td class="text-muted small">{{ $ss->store->name }}</td>
                                            <td class="text-center">
                                                <span class="badge bg-warning-lt">{{ $ss->qty }}</span>
                                            </td>
                                            <td class="text-center text-muted small">{{ $ss->low_stock_threshold }}</td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="4" class="text-center py-3 text-muted small">Aucun stock faible 🎉</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Activité récente --}}
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="fw-semibold">Dernières entrées de stock</span>
                        <a href="{{ route('admin.stock-entry.index') }}" class="text-muted small">Voir tout →</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-sm table-vcenter card-table mb-0">
                                <thead><tr><th>Produit</th><th>Boutique</th><th>Qté</th><th>Date</th></tr></thead>
                                <tbody>
                                    @forelse($recentEntries as $e)
                                        <tr>
                                            <td class="small fw-semibold">{{ $e->product->name }}</td>
                                            <td class="small text-muted">{{ $e->store->name }}</td>
                                            <td><span class="badge bg-success-lt">+{{ $e->qty }}</span></td>
                                            <td class="small text-muted">{{ $e->created_at->format('d/m H:i') }}</td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="4" class="text-center py-3 text-muted small">Aucune entrée.</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Transferts récents --}}
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="fw-semibold">Derniers transferts</span>
                        <a href="{{ route('admin.stock-transfer.index') }}" class="text-muted small">Voir tout →</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-sm table-vcenter card-table mb-0">
                                <thead><tr><th>Produit</th><th>De → Vers</th><th>Qté</th><th>Statut</th></tr></thead>
                                <tbody>
                                    @forelse($recentTransfers as $t)
                                        <tr>
                                            <td class="small fw-semibold">{{ $t->product->name }}</td>
                                            <td class="small text-muted">{{ $t->fromStore->name }} → {{ $t->toStore->name }}</td>
                                            <td><span class="badge bg-blue-lt">{{ $t->qty }}</span></td>
                                            <td><span class="badge {{ $t->statusColor() }} small">{{ $t->statusLabel() }}</span></td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="4" class="text-center py-3 text-muted small">Aucun transfert.</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

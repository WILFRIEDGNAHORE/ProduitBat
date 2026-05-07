@extends('admin.layouts.layout')
@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col"><h2 class="page-title">Transferts inter-boutiques</h2></div>
            <div class="col-auto ms-auto d-flex gap-2">
                <a href="{{ route('admin.stock-report.export.transfers', request()->all()) }}"
                   class="btn btn-outline-secondary">
                    <iconify-icon icon="solar:download-minimalistic-bold"></iconify-icon> CSV
                </a>
                <a href="{{ route('admin.stock-transfer.create') }}" class="btn btn-primary">
                    + Nouveau transfert
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
                <form method="GET" action="{{ route('admin.stock-transfer.index') }}" class="row g-3 align-items-end">
                    <div class="col-md-4">
                        <label class="form-label">Boutique</label>
                        <select name="store_id" class="form-select form-select-sm">
                            <option value="">Toutes</option>
                            @foreach($stores as $s)
                                <option value="{{ $s->id }}" {{ request('store_id') == $s->id ? 'selected' : '' }}>{{ $s->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Statut</label>
                        <select name="status" class="form-select form-select-sm">
                            <option value="">Tous</option>
                            @foreach($statuses as $key => $info)
                                <option value="{{ $key }}" {{ request('status') == $key ? 'selected' : '' }}>{{ $info['label'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 d-flex gap-2">
                        <button type="submit" class="btn btn-sm btn-secondary">Filtrer</button>
                        <a href="{{ route('admin.stock-transfer.index') }}" class="btn btn-sm btn-outline-secondary">✕</a>
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
                                <th>De</th>
                                <th>Vers</th>
                                <th>Produit</th>
                                <th>Qté</th>
                                <th>Statut</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($transfers as $t)
                                <tr>
                                    <td class="text-muted">{{ $t->id }}</td>
                                    <td>{{ $t->created_at->format('d/m/Y') }}</td>
                                    <td class="fw-semibold">{{ $t->fromStore->name }}</td>
                                    <td class="fw-semibold">{{ $t->toStore->name }}</td>
                                    <td>{{ $t->product->name }}</td>
                                    <td><span class="badge bg-blue-lt">{{ $t->qty }}</span></td>
                                    <td><span class="badge {{ $t->statusColor() }}">{{ $t->statusLabel() }}</span></td>
                                    <td class="text-end">
                                        <a href="{{ route('admin.stock-transfer.show', $t->id) }}" class="btn btn-sm btn-outline-secondary">Détail</a>
                                        @if($t->isPending())
                                            <form action="{{ route('admin.stock-transfer.approve', $t->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-azure">Approuver</button>
                                            </form>
                                            <form action="{{ route('admin.stock-transfer.cancel', $t->id) }}" method="POST" class="d-inline"
                                                  onsubmit="return confirm('Annuler ce transfert ?')">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger">Annuler</button>
                                            </form>
                                        @elseif($t->status === 'in_transit')
                                            <form action="{{ route('admin.stock-transfer.receive', $t->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-success">Réceptionner</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="8" class="text-center py-4 text-muted">Aucun transfert.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            @if($transfers->hasPages())
                <div class="card-footer">{{ $transfers->links() }}</div>
            @endif
        </div>

    </div>
</div>
@endsection

@extends('admin.layouts.layout')
@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col"><h2 class="page-title">Inventaires physiques</h2></div>
            <div class="col-auto ms-auto">
                <a href="{{ route('admin.stock-inventory.create') }}" class="btn btn-primary">
                    + Nouvel inventaire
                </a>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-vcenter table-striped card-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Libellé</th>
                                <th>Boutique</th>
                                <th>Lignes</th>
                                <th>Statut</th>
                                <th>Créé le</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($inventories as $inv)
                                <tr>
                                    <td class="text-muted">{{ $inv->id }}</td>
                                    <td class="fw-semibold">{{ $inv->label }}</td>
                                    <td>{{ $inv->store->name }}</td>
                                    <td><span class="badge bg-secondary-lt">{{ $inv->lines_count }} produit(s)</span></td>
                                    <td>
                                        @if($inv->isDraft())
                                            <span class="badge bg-warning-lt">Brouillon</span>
                                        @else
                                            <span class="badge bg-success-lt">Validé</span>
                                        @endif
                                    </td>
                                    <td>{{ $inv->created_at->format('d/m/Y') }}</td>
                                    <td class="text-end">
                                        @if($inv->isDraft())
                                            <a href="{{ route('admin.stock-inventory.edit', $inv->id) }}" class="btn btn-sm btn-warning">Saisir</a>
                                        @else
                                            <a href="{{ route('admin.stock-inventory.show', $inv->id) }}" class="btn btn-sm btn-outline-secondary">Voir</a>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="7" class="text-center py-4 text-muted">Aucun inventaire créé.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            @if($inventories->hasPages())
                <div class="card-footer">{{ $inventories->links() }}</div>
            @endif
        </div>
    </div>
</div>
@endsection

@extends('admin.layouts.layout')
@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">Gestion des Boutiques</h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <a href="{{ route('admin.store.create') }}" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M12 5l0 14"/><path d="M5 12l14 0"/>
                    </svg>
                    Ajouter une boutique
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
                                <th>Nom</th>
                                <th>Type</th>
                                <th>Ville</th>
                                <th>Téléphone</th>
                                <th>Email</th>
                                <th>Statut</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($stores as $store)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="fw-bold">
                                        {{ $store->name }}
                                        @if($store->isCentrale())
                                            <span class="badge bg-purple ms-1">Centrale</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($store->isCentrale())
                                            <span class="badge bg-purple-lt">Entrepôt central</span>
                                        @else
                                            <span class="badge bg-blue-lt">Boutique vente</span>
                                        @endif
                                    </td>
                                    <td>{{ $store->city ?? '—' }}</td>
                                    <td>{{ $store->phone ?? '—' }}</td>
                                    <td>{{ $store->email ?? '—' }}</td>
                                    <td>
                                        @if($store->status)
                                            <span class="badge bg-success-lt">Active</span>
                                        @else
                                            <span class="badge bg-danger-lt">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="text-end">
                                        <a href="{{ route('admin.store.edit', $store->id) }}" class="btn btn-sm btn-warning">
                                            Modifier
                                        </a>
                                        <button
                                            class="btn btn-sm btn-danger delete-item"
                                            data-id="{{ $store->id }}"
                                            data-action="{{ route('admin.store.destroy', $store->id) }}">
                                            Supprimer
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center py-4 text-muted">Aucune boutique créée.</td>
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

@extends('admin.layouts.layout')

@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">Rôles & Permissions</h2>
            </div>
            <div class="col-auto ms-auto">
                <a href="{{ route('admin.role.create') }}" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M12 5l0 14"/><path d="M5 12l14 0"/>
                    </svg>
                    Nouveau rôle
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
                                <th>Rôle</th>
                                <th>Description</th>
                                <th>Permissions</th>
                                <th>Utilisateurs</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($roles as $role)
                                <tr>
                                    <td>
                                        <span class="fw-semibold">{{ $role->name }}</span>
                                        <div class="text-muted small font-monospace">{{ $role->slug }}</div>
                                    </td>
                                    <td class="text-muted">{{ $role->description ?? '—' }}</td>
                                    <td>
                                        <div class="d-flex flex-wrap gap-1">
                                            @forelse($role->permissions as $perm)
                                                <span class="badge bg-azure-lt">{{ $perm->name }}</span>
                                            @empty
                                                <span class="text-muted small">Aucune</span>
                                            @endforelse
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-secondary-lt">{{ $role->store_users_count }}</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="{{ route('admin.role.edit', $role->id) }}" class="btn btn-sm btn-warning">
                                            Modifier
                                        </a>
                                        <button
                                            class="btn btn-sm btn-danger delete-item"
                                            data-id="{{ $role->id }}"
                                            data-action="{{ route('admin.role.destroy', $role->id) }}">
                                            Supprimer
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-4 text-muted">Aucun rôle créé.</td>
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

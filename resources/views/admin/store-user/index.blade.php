@extends('admin.layouts.layout')

@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">Utilisateurs par boutique</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">

        {{-- Sélecteur de boutique --}}
        <div class="card mb-3">
            <div class="card-body">
                <label class="form-label fw-semibold">Choisir une boutique</label>
                <div class="d-flex flex-wrap gap-2">
                    @foreach($stores as $s)
                        <a href="{{ route('admin.store-user.index', ['store_id' => $s->id]) }}"
                           class="btn btn-sm {{ $s->id == $storeId ? 'btn-primary' : 'btn-outline-secondary' }}">
                            {{ $s->name }}
                            @if($s->isCentrale())
                                <span class="badge bg-purple ms-1">centrale</span>
                            @endif
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        @if($store)
        <div class="row g-3">

            {{-- Liste des utilisateurs assignés --}}
            <div class="col-lg-7">
                <div class="card h-100">
                    <div class="card-header fw-semibold">
                        Équipe — {{ $store->name }}
                        <span class="badge bg-secondary-lt ms-2">{{ $assignments->count() }} membre(s)</span>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                                <thead>
                                    <tr>
                                        <th>Utilisateur</th>
                                        <th>Rôle</th>
                                        <th class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($assignments as $assignment)
                                        <tr>
                                            <td>
                                                <div class="fw-semibold">{{ $assignment->user->name }}</div>
                                                <div class="text-muted small">{{ $assignment->user->email }}</div>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.store-user.update', $assignment->id) }}"
                                                      method="POST" class="d-flex gap-2 align-items-center">
                                                    @csrf @method('PUT')
                                                    <select name="role_id" class="form-select form-select-sm" style="width:auto">
                                                        @foreach($roles as $r)
                                                            <option value="{{ $r->id }}"
                                                                {{ $assignment->role_id == $r->id ? 'selected' : '' }}>
                                                                {{ $r->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <button type="submit" class="btn btn-sm btn-outline-primary">OK</button>
                                                </form>
                                            </td>
                                            <td class="text-end">
                                                <form action="{{ route('admin.store-user.destroy', $assignment->id) }}"
                                                      method="POST"
                                                      onsubmit="return confirm('Retirer cet utilisateur ?')">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Retirer</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center py-4 text-muted">
                                                Aucun utilisateur assigné à cette boutique.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Formulaire d'ajout --}}
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header fw-semibold">Assigner un utilisateur</div>
                    <div class="card-body">
                        <form action="{{ route('admin.store-user.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="store_id" value="{{ $storeId }}">

                            <div class="mb-3">
                                <label class="form-label required">Utilisateur</label>
                                <select name="user_id"
                                        class="form-select @error('user_id') is-invalid @enderror">
                                    <option value="">— Choisir un utilisateur —</option>
                                    @foreach($allUsers as $user)
                                        @if(!in_array($user->id, $assignedIds))
                                            <option value="{{ $user->id }}">
                                                {{ $user->name }} ({{ $user->email }})
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('user_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label required">Rôle</label>
                                <select name="role_id"
                                        class="form-select @error('role_id') is-invalid @enderror">
                                    <option value="">— Choisir un rôle —</option>
                                    @foreach($roles as $r)
                                        <option value="{{ $r->id }}">{{ $r->name }}</option>
                                    @endforeach
                                </select>
                                @error('role_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <button type="submit" class="btn btn-primary w-100">
                                Assigner à la boutique
                            </button>
                        </form>
                    </div>

                    {{-- Rappel des permissions par rôle --}}
                    <div class="card-footer">
                        <div class="text-muted small fw-semibold mb-2">Permissions par rôle :</div>
                        @foreach($roles as $r)
                            <div class="mb-1">
                                <span class="fw-medium">{{ $r->name }}</span> —
                                <span class="text-muted small">
                                    {{ $r->permissions->pluck('name')->implode(', ') ?: 'Aucune' }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
        @endif

    </div>
</div>

@endsection

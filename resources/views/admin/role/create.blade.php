@extends('admin.layouts.layout')

@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">Nouveau rôle</h2>
            </div>
            <div class="col-auto">
                <a href="{{ route('admin.role.index') }}" class="btn btn-outline-secondary">
                    ← Retour
                </a>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.role.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label required">Nom du rôle</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                               class="form-control @error('name') is-invalid @enderror"
                               placeholder="ex: Gestionnaire, Vendeur...">
                        @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" name="description" value="{{ old('description') }}"
                               class="form-control"
                               placeholder="Courte description du rôle">
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Permissions</label>
                        <div class="row g-2 mt-1">
                            @foreach($permissions as $perm)
                                <div class="col-md-4">
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox"
                                               name="permissions[]" value="{{ $perm->id }}"
                                               {{ in_array($perm->id, old('permissions', [])) ? 'checked' : '' }}>
                                        <span class="form-check-label">
                                            <span class="fw-medium">{{ $perm->name }}</span>
                                            @if($perm->description)
                                                <br><small class="text-muted">{{ $perm->description }}</small>
                                            @endif
                                        </span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">Créer le rôle</button>
                        <a href="{{ route('admin.role.index') }}" class="btn btn-outline-secondary">Annuler</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

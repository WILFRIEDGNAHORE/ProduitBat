@extends('admin.layouts.layout')
@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col"><h2 class="page-title">Nouvel inventaire</h2></div>
            <div class="col-auto">
                <a href="{{ route('admin.stock-inventory.index') }}" class="btn btn-outline-secondary">← Retour</a>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <p class="text-muted small mb-4">
                            Un inventaire pré-remplit automatiquement toutes les quantités système de la boutique.
                            Vous n'aurez qu'à corriger les quantités réelles comptées.
                        </p>
                        <form action="{{ route('admin.stock-inventory.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label required">Boutique</label>
                                <select name="store_id" class="form-select @error('store_id') is-invalid @enderror">
                                    <option value="">— Choisir —</option>
                                    @foreach($stores as $s)
                                        <option value="{{ $s->id }}" {{ old('store_id') == $s->id ? 'selected' : '' }}>{{ $s->name }}</option>
                                    @endforeach
                                </select>
                                @error('store_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label required">Libellé</label>
                                <input type="text" name="label" value="{{ old('label', 'Inventaire ' . now()->format('d/m/Y')) }}"
                                    class="form-control @error('label') is-invalid @enderror">
                                @error('label')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Note</label>
                                <textarea name="note" rows="2" class="form-control">{{ old('note') }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Créer et saisir les quantités</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

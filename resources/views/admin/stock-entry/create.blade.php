@extends('admin.layouts.layout')
@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col"><h2 class="page-title">Nouvelle entrée de stock</h2></div>
            <div class="col-auto">
                <a href="{{ route('admin.stock-entry.index') }}" class="btn btn-outline-secondary">← Retour</a>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.stock-entry.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label required">Boutique destination</label>
                                <select name="store_id" class="form-select @error('store_id') is-invalid @enderror">
                                    <option value="">— Choisir —</option>
                                    @foreach($stores as $s)
                                        <option value="{{ $s->id }}" {{ old('store_id') == $s->id ? 'selected' : '' }}>
                                            {{ $s->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('store_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label required">Produit</label>
                                <select name="product_id" class="form-select @error('product_id') is-invalid @enderror">
                                    <option value="">— Choisir —</option>
                                    @foreach($products as $p)
                                        <option value="{{ $p->id }}" {{ old('product_id') == $p->id ? 'selected' : '' }}>
                                            {{ $p->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('product_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label required">Quantité reçue</label>
                                    <input type="number" name="qty" min="1" value="{{ old('qty', 1) }}"
                                        class="form-control @error('qty') is-invalid @enderror">
                                    @error('qty')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Coût unitaire (CFA)</label>
                                    <input type="number" name="unit_cost" min="0" step="1" value="{{ old('unit_cost') }}"
                                        class="form-control" placeholder="Optionnel">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Référence / N° BL</label>
                                <input type="text" name="reference" value="{{ old('reference') }}"
                                    class="form-control" placeholder="ex: BL-2026-001">
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Note</label>
                                <textarea name="note" rows="2" class="form-control"
                                    placeholder="Commentaire optionnel...">{{ old('note') }}</textarea>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">Enregistrer l'entrée</button>
                                <a href="{{ route('admin.stock-entry.index') }}" class="btn btn-outline-secondary">Annuler</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

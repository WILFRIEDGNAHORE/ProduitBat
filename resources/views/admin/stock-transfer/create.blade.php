@extends('admin.layouts.layout')
@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col"><h2 class="page-title">Nouveau transfert</h2></div>
            <div class="col-auto">
                <a href="{{ route('admin.stock-transfer.index') }}" class="btn btn-outline-secondary">← Retour</a>
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
                        <form action="{{ route('admin.stock-transfer.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label required">Boutique source</label>
                                <select name="from_store_id" class="form-select @error('from_store_id') is-invalid @enderror" id="from-store">
                                    <option value="">— Choisir —</option>
                                    @foreach($stores as $s)
                                        <option value="{{ $s->id }}" {{ old('from_store_id') == $s->id ? 'selected' : '' }}>{{ $s->name }}</option>
                                    @endforeach
                                </select>
                                @error('from_store_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label required">Boutique destination</label>
                                <select name="to_store_id" class="form-select @error('to_store_id') is-invalid @enderror">
                                    <option value="">— Choisir —</option>
                                    @foreach($stores as $s)
                                        <option value="{{ $s->id }}" {{ old('to_store_id') == $s->id ? 'selected' : '' }}>{{ $s->name }}</option>
                                    @endforeach
                                </select>
                                @error('to_store_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
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

                            <div class="mb-3">
                                <label class="form-label required">Quantité à transférer</label>
                                <input type="number" name="qty" min="1" value="{{ old('qty', 1) }}"
                                    class="form-control @error('qty') is-invalid @enderror">
                                @error('qty')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Note</label>
                                <textarea name="note" rows="2" class="form-control">{{ old('note') }}</textarea>
                            </div>

                            <div class="alert alert-info small">
                                <strong>Note :</strong> Le stock sera déduit de la boutique source uniquement à la réception (statut "Reçu").
                                Le transfert doit d'abord être approuvé, puis marqué reçu.
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">Créer le transfert</button>
                                <a href="{{ route('admin.stock-transfer.index') }}" class="btn btn-outline-secondary">Annuler</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

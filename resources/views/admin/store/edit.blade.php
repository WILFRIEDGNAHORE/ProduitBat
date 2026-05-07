@extends('admin.layouts.layout')
@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">Modifier : {{ $store->name }}</h2>
            </div>
            <div class="col-auto ms-auto">
                <a href="{{ route('admin.store.index') }}" class="btn btn-secondary">
                    ← Retour
                </a>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.store.update', $store->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row g-3">

                                <div class="col-md-8">
                                    <label class="form-label">Nom de la boutique <span class="text-danger">*</span></label>
                                    <input type="text" name="name" value="{{ old('name', $store->name) }}" class="form-control">
                                    <x-input-error :messages="$errors->get('name')" class="mt-1 text-danger" />
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Type <span class="text-danger">*</span></label>
                                    <select name="type" class="form-select">
                                        <option value="vente" {{ old('type', $store->type) === 'vente' ? 'selected' : '' }}>Boutique de vente</option>
                                        <option value="centrale" {{ old('type', $store->type) === 'centrale' ? 'selected' : '' }}>Entrepôt central</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Ville</label>
                                    <input type="text" name="city" value="{{ old('city', $store->city) }}" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Téléphone</label>
                                    <input type="text" name="phone" value="{{ old('phone', $store->phone) }}" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" value="{{ old('email', $store->email) }}" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Statut</label>
                                    <select name="status" class="form-select">
                                        <option value="1" {{ old('status', $store->status) ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ !old('status', $store->status) ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Adresse complète</label>
                                    <input type="text" name="address" value="{{ old('address', $store->address) }}" class="form-control">
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Note interne</label>
                                    <textarea name="note" class="form-control" rows="3">{{ old('note', $store->note) }}</textarea>
                                </div>

                                <div class="col-12 mt-2">
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    <a href="{{ route('admin.store.index') }}" class="btn btn-secondary ms-2">Annuler</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

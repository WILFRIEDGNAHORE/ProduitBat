@extends('admin.layouts.layout')

@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">Gestion du Stock</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">

        {{-- Sélecteur de boutique --}}
        <div class="card mb-3">
            <div class="card-body">
                <div class="row g-3 align-items-end">
                    <div class="col-md-5">
                        <label class="form-label fw-semibold">Boutique</label>
                        <div class="d-flex flex-wrap gap-2">
                            @foreach($stores as $s)
                                <a href="{{ route('admin.stock.index', ['store_id' => $s->id, 'search' => $search]) }}"
                                   class="btn {{ $s->id == $storeId ? 'btn-primary' : 'btn-outline-secondary' }} btn-sm">
                                    {{ $s->name }}
                                    @if($s->isCentrale())
                                        <span class="badge bg-purple ms-1">centrale</span>
                                    @endif
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-5">
                        <label class="form-label fw-semibold">Rechercher un produit</label>
                        <form method="GET" action="{{ route('admin.stock.index') }}" class="d-flex gap-2">
                            <input type="hidden" name="store_id" value="{{ $storeId }}">
                            <input type="text" name="search" value="{{ $search }}"
                                   class="form-control form-control-sm"
                                   placeholder="Nom du produit...">
                            <button type="submit" class="btn btn-sm btn-secondary">Filtrer</button>
                            @if($search)
                                <a href="{{ route('admin.stock.index', ['store_id' => $storeId]) }}"
                                   class="btn btn-sm btn-outline-secondary">✕</a>
                            @endif
                        </form>
                    </div>
                    <div class="col-md-2 text-end">
                        @if($store)
                            <span class="text-muted small">
                                {{ $products->total() }} produit(s)
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        @if($store)
        <form action="{{ route('admin.stock.update') }}" method="POST" id="stock-form">
            @csrf
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="fw-semibold">
                        Stock — <strong>{{ $store->name }}</strong>
                    </span>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"/>
                            <circle cx="12" cy="14" r="2"/><path d="M14 4l0 4l-6 0l0 -4"/>
                        </svg>
                        Enregistrer tout
                    </button>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>Produit</th>
                                    <th>Catégorie</th>
                                    <th style="width:130px">Qté en stock</th>
                                    <th style="width:130px">Seuil alerte</th>
                                    <th>Statut</th>
                                    <th class="text-end" style="width:80px">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($products as $product)
                                    @php
                                        $ss = $product->storeStocks->first();
                                        $qty = $ss?->qty ?? 0;
                                        $threshold = $ss?->low_stock_threshold ?? 5;
                                    @endphp
                                    <tr class="{{ $qty <= 0 ? 'table-danger' : ($ss?->isLow() ? 'table-warning' : '') }}">
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                @if($product->thumb_image)
                                                    <img src="{{ asset($product->thumb_image) }}"
                                                         style="width:36px;height:36px;object-fit:cover;border-radius:4px">
                                                @endif
                                                <span class="fw-semibold">{{ $product->name }}</span>
                                            </div>
                                            <input type="hidden" name="stocks[{{ $loop->index }}][product_id]" value="{{ $product->id }}">
                                            <input type="hidden" name="stocks[{{ $loop->index }}][store_id]" value="{{ $storeId }}">
                                        </td>
                                        <td class="text-muted small">{{ $product->category?->name ?? '—' }}</td>
                                        <td>
                                            <input type="number" min="0"
                                                   name="stocks[{{ $loop->index }}][qty]"
                                                   value="{{ $qty }}"
                                                   class="form-control form-control-sm qty-input"
                                                   data-product="{{ $product->id }}"
                                                   data-store="{{ $storeId }}">
                                        </td>
                                        <td>
                                            <input type="number" min="0"
                                                   name="stocks[{{ $loop->index }}][threshold]"
                                                   value="{{ $threshold }}"
                                                   class="form-control form-control-sm">
                                        </td>
                                        <td>
                                            @if($qty <= 0)
                                                <span class="badge bg-danger">Épuisé</span>
                                            @elseif($ss?->isLow())
                                                <span class="badge bg-warning text-dark">Stock faible</span>
                                            @else
                                                <span class="badge bg-success">OK</span>
                                            @endif
                                        </td>
                                        <td class="text-end text-muted small">
                                            {{ $product->qty }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center py-4 text-muted">
                                            Aucun produit trouvé.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                @if($products->hasPages())
                <div class="card-footer d-flex align-items-center">
                    {{ $products->links() }}
                </div>
                @endif
            </div>
        </form>
        @else
            <div class="alert alert-warning">Aucune boutique sélectionnée.</div>
        @endif

    </div>
</div>

@push('scripts')
<script>
// Sauvegarde rapide d'une ligne via AJAX (perte de focus sur le champ qty)
document.querySelectorAll('.qty-input').forEach(function(input) {
    input.addEventListener('change', function() {
        var productId = this.dataset.product;
        var storeId   = this.dataset.store;
        var qty       = this.value;
        var row       = this.closest('tr');
        var threshold = row.querySelector('input[name$="[threshold]"]').value;

        fetch('{{ route('admin.stock.adjust') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            body: JSON.stringify({
                product_id: productId,
                store_id:   storeId,
                qty:        qty,
                threshold:  threshold,
            }),
        })
        .then(r => r.json())
        .then(data => {
            if (data.status === 'success') {
                // Mettre à jour la colonne Total
                var totalCell = row.querySelector('td:last-child');
                if (totalCell) totalCell.textContent = data.total_qty;
            }
        });
    });
});
</script>
@endpush

@endsection

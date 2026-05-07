@extends('admin.layouts.layout')
@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">{{ $stockInventory->label }}</h2>
                <div class="text-muted">{{ $stockInventory->store->name }} — Saisie des quantités réelles</div>
            </div>
            <div class="col-auto d-flex gap-2">
                <a href="{{ route('admin.stock-inventory.index') }}" class="btn btn-outline-secondary">← Retour</a>
                <form action="{{ route('admin.stock-inventory.validate', $stockInventory->id) }}" method="POST"
                      onsubmit="return confirm('Valider cet inventaire ? Le stock sera ajusté et cette action est irréversible.')">
                    @csrf
                    <button type="submit" class="btn btn-success">Valider l\'inventaire</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">

        <div class="alert alert-info small mb-3">
            Modifiez la colonne <strong>Qté réelle</strong> avec les quantités comptées physiquement.
            L'écart est calculé automatiquement. Cliquez <strong>Sauvegarder</strong> avant de valider.
        </div>

        <form action="{{ route('admin.stock-inventory.update', $stockInventory->id) }}" method="POST" id="inventory-form">
            @csrf @method('PUT')
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>{{ $stockInventory->lines->count() }} produit(s)</span>
                    <button type="submit" class="btn btn-sm btn-primary">Sauvegarder</button>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>Produit</th>
                                    <th class="text-center">Qté système</th>
                                    <th class="text-center" style="width:160px">Qté réelle</th>
                                    <th class="text-center">Écart</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($stockInventory->lines as $i => $line)
                                    <input type="hidden" name="lines[{{ $i }}][id]" value="{{ $line->id }}">
                                    <tr>
                                        <td class="fw-semibold">{{ $line->product->name }}</td>
                                        <td class="text-center text-muted">{{ $line->qty_system }}</td>
                                        <td class="text-center">
                                            <input type="number" min="0"
                                                name="lines[{{ $i }}][qty_real]"
                                                value="{{ $line->qty_real }}"
                                                class="form-control form-control-sm text-center gap-input"
                                                data-system="{{ $line->qty_system }}"
                                                style="width:100px;margin:auto">
                                        </td>
                                        <td class="text-center">
                                            @php $gap = $line->qty_real - $line->qty_system; @endphp
                                            <span class="gap-display badge {{ $gap > 0 ? 'bg-success-lt' : ($gap < 0 ? 'bg-danger-lt' : 'bg-secondary-lt') }}">
                                                {{ $gap > 0 ? '+' : '' }}{{ $gap }}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Sauvegarder les quantités</button>
                </div>
            </div>
        </form>

    </div>
</div>

@push('scripts')
<script>
document.querySelectorAll('.gap-input').forEach(function(input) {
    input.addEventListener('input', function() {
        var system = parseInt(this.dataset.system, 10);
        var real   = parseInt(this.value, 10) || 0;
        var gap    = real - system;
        var badge  = this.closest('tr').querySelector('.gap-display');
        badge.textContent = (gap > 0 ? '+' : '') + gap;
        badge.className = 'gap-display badge ' + (gap > 0 ? 'bg-success-lt' : gap < 0 ? 'bg-danger-lt' : 'bg-secondary-lt');
    });
});
</script>
@endpush
@endsection

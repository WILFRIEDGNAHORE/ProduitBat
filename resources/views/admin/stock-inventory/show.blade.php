@extends('admin.layouts.layout')
@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">{{ $stockInventory->label }}</h2>
                <div class="text-muted">{{ $stockInventory->store->name }} — Validé le {{ $stockInventory->validated_at?->format('d/m/Y H:i') }}</div>
            </div>
            <div class="col-auto d-flex gap-2">
                <a href="{{ route('admin.stock-report.export.inventory', $stockInventory->id) }}"
                   class="btn btn-outline-secondary">
                    <iconify-icon icon="solar:download-minimalistic-bold"></iconify-icon> CSV
                </a>
                <a href="{{ route('admin.stock-inventory.index') }}" class="btn btn-outline-secondary">← Retour</a>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">

        @php
            $totalGap    = $stockInventory->lines->sum('gap');
            $linesWithGap = $stockInventory->lines->filter(fn($l) => $l->gap !== 0)->count();
        @endphp

        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="h1 mb-1">{{ $stockInventory->lines->count() }}</div>
                        <div class="text-muted">Produits inventoriés</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="h1 mb-1 {{ $linesWithGap > 0 ? 'text-danger' : 'text-success' }}">{{ $linesWithGap }}</div>
                        <div class="text-muted">Écarts détectés</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="h1 mb-1 {{ $totalGap < 0 ? 'text-danger' : ($totalGap > 0 ? 'text-success' : '') }}">
                            {{ $totalGap > 0 ? '+' : '' }}{{ $totalGap }}
                        </div>
                        <div class="text-muted">Écart total (unités)</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>Produit</th>
                                <th class="text-center">Qté système</th>
                                <th class="text-center">Qté réelle</th>
                                <th class="text-center">Écart</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($stockInventory->lines as $line)
                                <tr class="{{ $line->gap !== 0 ? ($line->gap < 0 ? 'table-danger' : 'table-success') : '' }}">
                                    <td class="fw-semibold">{{ $line->product->name }}</td>
                                    <td class="text-center">{{ $line->qty_system }}</td>
                                    <td class="text-center fw-semibold">{{ $line->qty_real }}</td>
                                    <td class="text-center">
                                        <span class="badge {{ $line->gap > 0 ? 'bg-success-lt' : ($line->gap < 0 ? 'bg-danger-lt' : 'bg-secondary-lt') }}">
                                            {{ $line->gap > 0 ? '+' : '' }}{{ $line->gap }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

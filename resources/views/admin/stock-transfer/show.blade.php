@extends('admin.layouts.layout')
@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col"><h2 class="page-title">Transfert #{{ $stockTransfer->id }}</h2></div>
            <div class="col-auto">
                <a href="{{ route('admin.stock-transfer.index') }}" class="btn btn-outline-secondary">← Retour</a>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        <div class="row g-3">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="fw-semibold">Détails du transfert</span>
                        <span class="badge {{ $stockTransfer->statusColor() }} fs-6">{{ $stockTransfer->statusLabel() }}</span>
                    </div>
                    <div class="card-body">
                        <dl class="row mb-0">
                            <dt class="col-sm-4">Produit</dt>
                            <dd class="col-sm-8 fw-semibold">{{ $stockTransfer->product->name }}</dd>

                            <dt class="col-sm-4">De</dt>
                            <dd class="col-sm-8">{{ $stockTransfer->fromStore->name }}</dd>

                            <dt class="col-sm-4">Vers</dt>
                            <dd class="col-sm-8">{{ $stockTransfer->toStore->name }}</dd>

                            <dt class="col-sm-4">Quantité</dt>
                            <dd class="col-sm-8"><strong>{{ $stockTransfer->qty }} unité(s)</strong></dd>

                            <dt class="col-sm-4">Créé le</dt>
                            <dd class="col-sm-8">{{ $stockTransfer->created_at->format('d/m/Y H:i') }}</dd>

                            <dt class="col-sm-4">Créé par</dt>
                            <dd class="col-sm-8">{{ $stockTransfer->creator?->name ?? '—' }}</dd>

                            @if($stockTransfer->approver)
                            <dt class="col-sm-4">Approuvé par</dt>
                            <dd class="col-sm-8">{{ $stockTransfer->approver->name }}</dd>
                            @endif

                            @if($stockTransfer->received_at)
                            <dt class="col-sm-4">Reçu le</dt>
                            <dd class="col-sm-8">{{ $stockTransfer->received_at->format('d/m/Y H:i') }}</dd>
                            @endif

                            @if($stockTransfer->note)
                            <dt class="col-sm-4">Note</dt>
                            <dd class="col-sm-8 text-muted">{{ $stockTransfer->note }}</dd>
                            @endif
                        </dl>
                    </div>
                    <div class="card-footer d-flex gap-2">
                        @if($stockTransfer->isPending())
                            <form action="{{ route('admin.stock-transfer.approve', $stockTransfer->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-azure">Approuver → En transit</button>
                            </form>
                            <form action="{{ route('admin.stock-transfer.cancel', $stockTransfer->id) }}" method="POST"
                                  onsubmit="return confirm('Annuler ce transfert ?')">
                                @csrf
                                <button type="submit" class="btn btn-danger">Annuler</button>
                            </form>
                        @elseif($stockTransfer->status === 'in_transit')
                            <form action="{{ route('admin.stock-transfer.receive', $stockTransfer->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success">Marquer comme reçu</button>
                            </form>
                            <form action="{{ route('admin.stock-transfer.cancel', $stockTransfer->id) }}" method="POST"
                                  onsubmit="return confirm('Annuler ce transfert ?')">
                                @csrf
                                <button type="submit" class="btn btn-danger">Annuler</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>

            {{-- Timeline statuts --}}
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header fw-semibold">Progression</div>
                    <div class="card-body">
                        @php
                            $steps = ['pending' => 'En attente', 'approved' => 'Approuvé', 'in_transit' => 'En transit', 'received' => 'Reçu'];
                            $order = array_keys($steps);
                            $currentIdx = array_search($stockTransfer->status, $order);
                        @endphp
                        @if($stockTransfer->isCancelled())
                            <div class="text-center text-danger py-3">
                                <i class="hgi hgi-stroke hgi-cancel-circle text-4xl"></i>
                                <p class="mt-2 fw-semibold">Transfert annulé</p>
                            </div>
                        @else
                            <div class="steps steps-vertical">
                                @foreach($steps as $key => $label)
                                    @php $idx = array_search($key, $order); @endphp
                                    <div class="step {{ $idx <= $currentIdx ? 'step-success' : '' }}">
                                        <div class="step-indicator">
                                            <div class="step-icon">{{ $idx + 1 }}</div>
                                        </div>
                                        <div class="step-body">
                                            <strong class="step-title">{{ $label }}</strong>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

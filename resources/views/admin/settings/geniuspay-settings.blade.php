@extends('admin.layouts.layout')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4>GeniusPay Settings</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.geniuspay-settings.update', 1) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Base URL</label>
                    <input type="url" name="genius_base_url" class="form-control"
                        value="{{ $geniusSettings['genius_base_url'] ?? 'https://pay.genius.ci/api/v1/merchant' }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">API Key (pk_sandbox_... ou pk_live_...)</label>
                    <input type="text" name="genius_api_key" class="form-control"
                        value="{{ $geniusSettings['genius_api_key'] ?? '' }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">API Secret (sk_sandbox_... ou sk_live_...)</label>
                    <input type="text" name="genius_api_secret" class="form-control"
                        value="{{ $geniusSettings['genius_api_secret'] ?? '' }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Webhook Secret (whsec_...)</label>
                    <input type="text" name="genius_webhook_secret" class="form-control"
                        value="{{ $geniusSettings['genius_webhook_secret'] ?? '' }}">
                    <small class="text-muted">Obtenu lors de la création du webhook sur le dashboard GeniusPay</small>
                </div>

                <button type="submit" class="btn btn-primary">Sauvegarder</button>
            </form>
        </div>
    </div>
</div>
@endsection
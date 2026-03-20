@extends('admin.layouts.layout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>MTN MoMo Settings</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.momo-settings.update', 1) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Base URL</label>
                            <input type="url" name="momo_base_url" class="form-control"
                                value="{{ $momoSettings['momo_base_url'] ?? 'https://sandbox.momodeveloper.mtn.com' }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Environnement</label>
                            <select name="momo_environment" class="form-control">
                                <option value="sandbox" {{ ($momoSettings['momo_environment'] ?? '') === 'sandbox' ? 'selected' : '' }}>Sandbox</option>
                                <option value="mtnivorycoast" {{ ($momoSettings['momo_environment'] ?? '') === 'mtnivorycoast' ? 'selected' : '' }}>Production (MTN Ivory Coast)</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Devise</label>
                            <select name="momo_currency" class="form-control">
                                <option value="EUR" {{ ($momoSettings['momo_currency'] ?? '') === 'EUR' ? 'selected' : '' }}>EUR (Sandbox)</option>
                                <option value="XOF" {{ ($momoSettings['momo_currency'] ?? '') === 'XOF' ? 'selected' : '' }}>XOF (Production CI)</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Primary Key (Ocp-Apim-Subscription-Key)</label>
                            <input type="text" name="momo_primary_key" class="form-control"
                                value="{{ $momoSettings['momo_primary_key'] ?? '' }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">User ID</label>
                            <input type="text" name="momo_user_id" class="form-control"
                                value="{{ $momoSettings['momo_user_id'] ?? '' }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">API Secret</label>
                            <input type="text" name="momo_api_secret" class="form-control"
                                value="{{ $momoSettings['momo_api_secret'] ?? '' }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Sauvegarder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
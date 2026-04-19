@extends('admin.layouts.layout')
@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">Top Category Section</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Select 4 Top Categories to display on homepage</h3>
            </div>
            <div class="card-body">

                @php
                    $saved = $topCat ? json_decode($topCat->value, true) : [];
                    $saved = array_pad($saved, 4, ['category' => '', 'sub_category' => '', 'child_category' => '']);
                @endphp

                <form action="{{ route('admin.top-category.update', 1) }}" method="POST">
                    @csrf
                    @method('PUT')

                    @foreach(range(1, 4) as $i)
                    @php
                        $idx    = $i - 1;
                        $suffix = ['one','two','three','four'][$idx];
                        $sv     = $saved[$idx] ?? ['category' => '', 'sub_category' => '', 'child_category' => ''];
                    @endphp

                    <div class="row mb-4 align-items-end border-bottom pb-4">
                        <div class="col-12 mb-2">
                            <h4 class="text-muted mb-0">Category Slot {{ $i }}</h4>
                        </div>

                        {{-- Category --}}
                        <div class="col-md-4">
                            <label class="form-label">Category <span class="text-danger">*</span></label>
                            <select name="cat_{{ $suffix }}" class="form-select js-category-select" data-slot="{{ $suffix }}">
                                <option value="">-- Select Category --</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->name }}" @selected($sv['category'] === $cat->name)>
                                        {{ $cat->name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('cat_'.$suffix)" class="mt-1 text-danger" />
                        </div>

                        {{-- Sub Category --}}
                        <div class="col-md-4">
                            <label class="form-label">Sub Category <span class="text-muted">(optional)</span></label>
                            <select name="sub_cat_{{ $suffix }}" class="form-select js-sub-select" data-slot="{{ $suffix }}">
                                <option value="">-- All Sub Categories --</option>
                                @php
                                    $parentCat = $categories->firstWhere('name', $sv['category']);
                                @endphp
                                @if($parentCat)
                                    @foreach($parentCat->subCategories as $sub)
                                        <option value="{{ $sub->name }}" @selected($sv['sub_category'] === $sub->name)>
                                            {{ $sub->name }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        {{-- Child Category --}}
                        <div class="col-md-4">
                            <label class="form-label">Child Category <span class="text-muted">(optional)</span></label>
                            <input type="text" name="child_cat_{{ $suffix }}" class="form-control"
                                value="{{ $sv['child_category'] }}" placeholder="Leave blank for all">
                        </div>
                    </div>
                    @endforeach

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M5 12l5 5l10 -10" />
                            </svg>
                            Save Top Categories
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>
document.querySelectorAll('.js-category-select').forEach(function(catSelect) {
    catSelect.addEventListener('change', function() {
        var slot = this.dataset.slot;
        var catName = this.value;
        var subSelect = document.querySelector('.js-sub-select[data-slot="' + slot + '"]');
        subSelect.innerHTML = '<option value="">-- All Sub Categories --</option>';

        if (!catName) return;

        fetch('{{ route('admin.product.get-sub-categories') }}?category_name=' + encodeURIComponent(catName))
            .then(function(r) { return r.json(); })
            .then(function(subs) {
                subs.forEach(function(sub) {
                    var opt = document.createElement('option');
                    opt.value = sub.name;
                    opt.textContent = sub.name;
                    subSelect.appendChild(opt);
                });
            })
            .catch(function() {});
    });
});
</script>
@endpush

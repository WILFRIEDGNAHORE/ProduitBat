@extends('admin.layouts.layout')
@section('content')
<div class="page-body">
    <div class="container-xl">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="mb-4">Edit Category</h2>

                    <form action="{{ route('admin.category.update', $cat->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row g-3 align-items-center">

                            <div class="col-md-7">
                                <div class="form-label">Category Image</div>
                                @if($cat->image)
                                    <img src="{{ asset($cat->image) }}" alt="{{ $cat->name }}"
                                         class="d-block mb-2 rounded" style="max-height:120px;">
                                @endif
                                <input type="file" name="image" class="form-control" accept="image/*"
                                       onchange="previewImg(event)">
                                <img id="img-preview" src="#" alt="preview"
                                     class="mt-2 rounded" style="max-height:120px; display:none;">
                                <small class="text-muted">Laisser vide pour conserver l'image actuelle.</small>
                                <x-input-error :messages="$errors->get('image')" class="mt-2 text-danger" />
                            </div>

                            <div class="col-md-7">
                                <div class="form-label">Name <span class="text-danger">*</span></div>
                                <input type="text" name="name" value="{{ old('name', $cat->name) }}" class="form-control">
                                <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
                            </div>

                            <div class="col-md-7">
                                <div class="form-label">Icon class <span class="text-danger">*</span></div>
                                <input type="text" name="icon" value="{{ old('icon', $cat->icon) }}" class="form-control">
                                <small class="text-muted">Utilisé comme fallback si pas d'image.</small>
                                <x-input-error :messages="$errors->get('icon')" class="mt-2 text-danger" />
                            </div>

                            <div class="col-md-7">
                                <div class="form-label">Status</div>
                                <select name="status" class="form-select">
                                    <option @selected($cat->status == 1) value="1">Active</option>
                                    <option @selected($cat->status == 0) value="0">Inactive</option>
                                </select>
                            </div>

                            <div class="mt-4">
                                <button class="btn btn-primary">Update Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
function previewImg(event) {
    var img = document.getElementById('img-preview');
    img.src = URL.createObjectURL(event.target.files[0]);
    img.style.display = 'block';
}
</script>
@endpush

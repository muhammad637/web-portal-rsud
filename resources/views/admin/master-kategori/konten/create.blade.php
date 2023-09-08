@extends('admin.pages.main')
@push('link-css-admin')
@endpush
@section('content-admin')
    <div class="card">
        <div class="card-body">
            <h1 class="text-center text-capitalize fw-bold">form tambah kategori Konten</h1>
            <form action="{{ route('kategori-konten.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Kategori Layanan</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama') }}">
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug') }}"
                        readonly>
                </div>

                <a href="{{ route('kategori-konten.index') }}" class="btn btn-secondary">Close</a>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
        </div>
    </div>

    <script></script>
@endsection
@push('link-script-admin')
    <script>
        $(document).ready(function() {
            const judul = document.querySelector('#nama')
            const slug = document.querySelector('#slug')

            judul.addEventListener('input', function() {
                fetch(`{{ route('admin.createSlug') }}?judul=` + judul.value)
                    .then(response => response.json())
                    .then(data => slug.value = data.slug)
            })
            $("#gambar").change(function() {
                $("#text-preview").removeClass('d-none');
                const selectedImage = $(this).prop("files")[0];
                if (selectedImage && selectedImage.type.includes("image")) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $("#displayedImage").attr("src", e.target.result);
                    };
                    reader.readAsDataURL(selectedImage);
                }
            });
        });
    </script>
@endpush
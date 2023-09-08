@extends('admin.pages.main')
@push('link-css-admin')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
@endpush


@section('content-admin')
    <div class="card">
        <div class="card-body">
            <h1 class="text-center text-capitalize fw-bold">form upload {{ $kategoriLayanan->nama }}</h1>
            <form action="{{ route('admin.layanan.store') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $kategoriLayanan->id }}" name="kategori_layanan_id">
                <div class="mb-3">
                    <label for="" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                        id="nama" value="{{ old('nama') }}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug"
                        id="slug" readonly value="{{ old('slug') }}">
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <p class="d-none" id="text-preview-icon">preview icon</p>
                    <img id="displayedIcon" class="img-fluid w-50" src="{{ old('icon') }}" alt="icon yang Dipilih">
                </div>
                <label for="" class="form-label">icon</label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control @error('icon') is-invalid @enderror" name="icon"
                        id="icon" value="{{ old('icon') }}">
                    <label for="" class="input-group-text"> <i class="ti ti-mood-happy fs-6"></i></label>
                    @error('icon')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <p class="d-none" id="text-preview">preview gambar</p>
                    <img id="displayedImage" class="img-fluid w-50" src="{{ old('gambar') }}" alt="Gambar yang Dipilih">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">gambar</label>
                    <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar"
                        id="gambar" value="{{ old('gambar') }}">
                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <input id="deskripsi" placeholder="masukkan deskripsi berita" type="hidden" name="deskripsi"
                        value="{{ old('deskripsi') }}">
                    <trix-editor input="deskripsi"></trix-editor>
                </div>

                <a class="btn btn-warning"
                    href="{{ route('admin.layanan', ['kategoriLayanan' => $kategoriLayanan->slug]) }}">Kembali</a>
                <button class="btn btn-primary " type="submit">Kirim</button>
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

            judul.addEventListener('change', function() {
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
            $("#icon").change(function() {
                $("#text-preview-icon").removeClass('d-none');
                const selectedIcon = $(this).prop("files")[0];
                console.log(selectedIcon)
                if (selectedIcon && selectedIcon.type.includes("image")) {
                    const reader2 = new FileReader();
                    reader2.onload = function(e) {
                        $("#displayedIcon").attr("src", e.target.result);
                    };
                    reader2.readAsDataURL(selectedIcon);
                }
            });
        });
    </script>
@endpush
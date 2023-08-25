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
            <h1 class="text-center text-capitalize fw-bold">form upload Pelayanan Rawat jalan</h1>
            <form action="{{ route('admin.mcu.update', ['mcu' => $mcu->slug]) }}" method="post"
                enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                        id="nama" value="{{ old('nama', $mcu->nama) }}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug"
                        id="slug" readonly value="{{ old('slug', $mcu->slug) }}">
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
              
                <div class="mb-3">
                    <p class="d-none" id="text-preview">preview gambar</p>
                    <img id="displayedImage" class="img-fluid w-50"
                        src="{{ old('gambar', asset('storage/' . $mcu->gambar)) }}" alt="Gambar yang Dipilih">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">gambar</label>
                    <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar"
                        id="gambar" id="gambar" accept="image/*" value="{{ old('gambar', $mcu->gambar) }}">
                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Isi Berita</label>
                    @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <input id="deskripsi" placeholder="masukkan deskripsi berita" type="hidden" name="deskripsi"
                        value="{{ old('deskripsi', $mcu->deskripsi) }}">
                    <trix-editor input="deskripsi"></trix-editor>
                </div>

                <a class="btn btn-warning" href="{{ route('admin.mcu') }}">Kembali</a>
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
            
        });
    </script>
@endpush

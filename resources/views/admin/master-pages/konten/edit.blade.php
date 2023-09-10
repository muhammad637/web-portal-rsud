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
            <h1 class="text-center text-capitalize fw-bold">form upload berita</h1>
            <form action="{{ route('admin.konten.update', ['konten' => $konten->slug]) }}" method="post"
                enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Title</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                        id="judul" value="{{ old('judul', $konten->judul) }}">
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug"
                        id="slug" readonly value="{{ old('slug', $konten->slug) }}">
                </div>
                <div class="mb-3">
                    <p class="d-none" id="text-preview">preview gambar</p>
                    <img id="displayedImage" class="img-fluid w-50"
                        src="{{ old('gambar', asset('storage/' . $konten->gambar)) }}" alt="Gambar yang Dipilih">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">gambar</label>
                    <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar"
                        id="gambar" id="gambar" accept="image/*" value="{{ old('gambar', $konten->gambar) }}">
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Berita</label>
                    <input id="deskripsi" placeholder="masukkan deskripsi berita" type="hidden" name="deskripsi"
                        value="{{ old('deskripsi', $konten->deskripsi) }}">
                    <trix-editor input="deskripsi"></trix-editor>
                </div>
                <div class="mb-3">
                    <label for="link_yt" class="form-label">link Embed Youtube</label>
                    <input type="text" class="form-control @error('link_yt') is-invalid @enderror" name="link_yt"
                        id="link_yt" value="{{ old('link_yt',$konten->link_yt) }}">
                </div>
                <div class="mb-3">
                    <label for="link_ig" class="form-label">link Embed Instagram</label>
                    <input type="text" class="form-control @error('link_ig') is-invalid @enderror" name="link_ig"
                        id="link_ig" value="{{ old('link_ig',$konten->link_ig) }}">
                </div>
                <p class="form-label">Kategori</p>
                <div class="row mb-3">
                    @foreach ($kategoriKonten as $item)
                        <div class="col-md-6">
                            <input type="checkbox" name="kategori[]" value="{{ $item->id }}" id="{{ $item->id }}"
                                @if (in_array($item->id, $konten->kategori_konten->pluck('id')->toArray())) checked @endif>
                            <label for="{{ $item->id }}"> {{ $item->nama }}</label>
                        </div>
                    @endforeach
                </div>
                <button class="btn btn-primary" type="submit">Kirim</button>
            </form>
            <a class="btn btn-warning" href="{{ route('admin.konten.index') }}">Kembali</a>
        </div>
    </div>

    <script></script>
@endsection
@push('link-script-admin')
    <script>
        $(document).ready(function() {
            const judul = document.querySelector('#judul')
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

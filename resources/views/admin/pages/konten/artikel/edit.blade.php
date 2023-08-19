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
            <h1 class="text-center text-capitalize fw-bold">form upload artikel</h1>
            <form action="{{ route('admin.artikel.update', ['beritaDanArtikel' => $artikel->slug]) }}" method="post"
                enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Title</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                        id="judul" value="{{ old('judul', $artikel->judul) }}">
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug"
                        id="slug" readonly value="{{ old('slug', $artikel->slug) }}">
                </div>
                <div class="mb-3">
                    <p class="d-none" id="text-preview">preview gambar</p>
                    <img id="displayedImage" class="img-fluid w-50"
                        src="{{ old('gambar', asset('storage/' . $artikel->gambar)) }}" alt="Gambar yang Dipilih">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">gambar</label>
                    <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar"
                        id="gambar" id="gambar" accept="image/*" value="{{ old('gambar', $artikel->gambar) }}">
                </div>

                <div class="mb-3">
                    <label for="isi" class="form-label">Isi Berita</label>
                    <input id="isi" placeholder="masukkan isi artikel" type="hidden" name="isi"
                        value="{{ old('isi', $artikel->isi) }}">
                    <trix-editor input="isi"></trix-editor>
                </div>

                <div class="mb-3">
                    <label for="link" class="form-label">link Embed</label>
                    <input type="text" class="form-control @error('link') is-invalid @enderror" name="link"
                        id="link" value="{{ old('link', $artikel->link) }}">
                </div>
                <p class="form-label">Kategori</p>
                <div class="row mb-3">

                    @foreach ($kategori as $item)
                        <div class="col-md-6">
                            <input type="checkbox" name="kategori[]" value="{{ $item->id }}" id="{{ $item->id }}"
                                @if (in_array($item->id, $artikel->kategori->pluck('id')->toArray())) checked @endif>
                            <label for="{{ $item->id }}"> {{ $item->nama_kategori }}</label>
                        </div>
                    @endforeach
                </div>
                <button class="btn btn-primary" type="submit">Kirim</button>
            </form>
            <a class="btn btn-warning" href="{{ route('admin.artikel') }}">Kembali</a>
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

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
@section('breadcrumb')
    <li class="breadcrumb-item">Informasi</li>
    <li class="breadcrumb-item">Persyaratan</li>
@endsection

@section('content-admin')
    <div class="card">
        <div class="card-body">
            <h1 class="text-center text-capitalize fw-bold">form upload Persyaratan</h1>
            <form action="{{ route('admin.persyaratan.update', ['persyaratan' => $persyaratan->id]) }}" method="post"
               >
               @method('put')
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Jenis Penjaminan</label>
                    <input type="text" class="form-control @error('jenis_penjaminan') is-invalid @enderror" name="jenis_penjaminan"
                        id="jenis_penjaminan" value="{{ old('jenis_penjaminan', $persyaratan->jenis_penjaminan) }}">
                    @error('jenis_penjaminan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="rawat_inap" class="form-label">Rawat Inap</label>
                    @error('rawat_inap')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <input id="rawat_inap" placeholder="masukkan deskripsi berita" type="hidden" name="rawat_inap"
                        value="{{ old('rawat_inap', $persyaratan->rawat_inap) }}">
                    <trix-editor input="rawat_inap"></trix-editor>
                </div>

                <a class="btn btn-warning"
                    href="{{ route('admin.persyaratan') }}">Kembali</a>
                <button class="btn btn-primary " type="submit">Kirim</button>
            </form>
        </div>
    </div>

    <script></script>
@endsection
@push('link-script-admin')
@endpush

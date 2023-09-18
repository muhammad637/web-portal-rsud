@extends('admin.pages.main', ['sloot' => 'Edit Daftar Dokter'])
@push('link-css-admin')
    @livewireStyles
@endpush
@section('content-admin')
@section('breadcrumb')
    <li class="breadcrumb-item">Master Dokter</li>
    <li class="breadcrumb-item">Daftar Dokter</li>
    <li class="breadcrumb-item">edit</li>
@endsection

<div class="card">
    <div class="card-body">
        <h1 class="text-center text-capitalize fw-bold">form Edit Dokter</h1>
        <form action="{{ route('admin.dokter.update',['dokter' => $dokter->id]) }}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="mb-3">
                <label for="NamaDokter" class="form-label">Nama Dokter</label>
                <input type="text" class="form-control" id="NamaDokter" aria-describedby="NamaDokter" required
                    name="nama" value="{{ old('nama', $dokter->nama) }}">
            </div>
            <div class="mb-3">
                @livewire('admin.dokter.preview-gambar', ['gambarFormEdit' => $dokter->gambar])
            </div>
            @livewire('admin.dokter.search-spesialis-dokter', ['tipeDokterFormEdit' => $dokter->tipe_dokter, 'spesialisFormEdit' => $dokter->spesialis->nama_spesialis ?? null])
            @livewire('admin.dokter.search-rawat-jalan', ['layanan' => $layanan, 'layanan_id' => $layanan_id])
            <a href="{{ route('admin.dokter') }}" class="btn btn-warning">Kembali</a>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
    </div>
</div>
</div>
@endsection

@push('link-script-admin')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@livewireScripts
@endpush

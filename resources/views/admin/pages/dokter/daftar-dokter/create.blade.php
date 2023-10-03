@extends('admin.pages.main', ['sloot' => 'Create Daftar Dokter'])
@push('link-css-admin')
    @livewireStyles
@endpush
@section('content-admin')
@section('breadcrumb')
    <li class="breadcrumb-item">Master Dokter</li>
    <li class="breadcrumb-item">Daftar Dokter</li>
    <li class="breadcrumb-item">Create</li>
@endsection

<div class="card">
    <div class="card-body">
        <h1 class="text-center text-capitalize fw-bold">form Tambah Dokter</h1>
        <form action="{{ route('admin.dokter.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="NamaDokter" class="form-label">Nama Dokter</label>
                <input type="text" class="form-control" id="NamaDokter" aria-describedby="NamaDokter" required
                    name="nama">
            </div>
            <div class="mb-3">
                @livewire('admin.dokter.preview-gambar')
            </div>
            @livewire('admin.dokter.search-spesialis-dokter')
            @livewire('admin.dokter.search-rawat-jalan', ['layanan' => $layanan, 'layanan_id' => []])
            <a href="{{route('admin.dokter')}}" class="btn btn-warning">Kembali</a>
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

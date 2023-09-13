@extends('admin.pages.main')
@push('link-css-admin')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @livewireStyles
@endpush
@section('content-admin')
    <div class="card">
        <div class="card-body">

            <h1 class="fw-bold">Daftar Dokter</h1>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#TambahDokter">
                Create <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                    <path
                        d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z" />
                    <path
                        d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                </svg>
            </button>



            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                    <span>{{ session()->get('success') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="table-responsive mt-5">
                <table id="example" class="table  table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>

                            <th>No</th>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Spesialis</th>
                            <th>Ruangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($dokter as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->nama }}</td>
                                <td><img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->gambar }}"
                                        width="200"> </td>
                                <td>{{ $item->spesialis->nama_spesialis }} </td>
                                <td>{{ $item->RawatJalan->nama }} </td>
                                <td>
                                    <a class="btn btn-warning py-1 px-2" data-bs-toggle="modal"
                                        href="#editDokter{{ $item->id }}"><i class="fas fa-pen"></i></a>
                                    <form action="{{ route('admin.dokter.delete', ['dokter' => $item->id]) }}"
                                        class="d-inline" method="post">
                                        <button type="submit" class="badge bg-danger border-0"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            @method('delete')
                                            @csrf
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>


                            <!-- Modal edit -->
                            <div class="modal fade " id="editDokter{{ $item->id }}" tabindex="-1"
                                aria-labelledby="EditDokterLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Form Edit kategori</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('admin.dokter.update', ['dokter' => $item->id]) }}"
                                            method="post" enctype="multipart/form-data">
                                            @method('patch')
                                            @csrf
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="NamaDokter" class="form-label">Nama Dokter</label>
                                                    <input type="text" class="form-control" id="NamaDokter"
                                                        aria-describedby="NamaDokter" required name="nama"
                                                        value="{{ old('nama', $item->nama) }}">
                                                </div>
                                                <div class="mb-3">
                                                    @livewire('admin.dokter.preview-gambar', ['gambarFormEdit' => $item->gambar])
                                                </div>
                                                @livewire('admin.dokter.search-spesialis-dokter', ['spesialisFormEdit' => $item->spesialis->nama_spesialis])
                                                @livewire('admin.dokter.search-rawat-jalan', ['rawatJalanFormEdit' => $item->Rawatjalan->nama])
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Spesialis</th>
                            <th>Ruangan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal create -->
    <div class="modal fade " id="TambahDokter" tabindex="-1" aria-labelledby="TambahKategoriLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                @if (count($layanan) > 0 && count($spesialis) > 0)
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Create Dokter</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('admin.dokter.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="NamaDokter" class="form-label">Nama Dokter</label>
                                <input type="text" class="form-control" id="NamaDokter" aria-describedby="NamaDokter"
                                    required name="nama">
                            </div>
                            <div class="mb-3">
                                @livewire('admin.dokter.preview-gambar')
                            </div>
                            @livewire('admin.dokter.search-spesialis-dokter')
                            @livewire('admin.dokter.search-rawat-jalan')
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                @else
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Create Dokter</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h1>Daftar Sepsialis atau Daftar Layanan Rawat Jalan Masih Kosong</h1>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@push('link-script-admin')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#example").DataTable();
            $('.select2').select2();
        });
    </script>
    @livewireScripts
@endpush

@extends('admin.pages.main', ['sloot' => 'Jumlah Ketersediaan Kamar'])
@push('link-css-admin')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
    <style>
        .bunder {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
    </style>
@endpush
@section('content-admin')
@section('breadcrumb')
    <li class="breadcrumb-item">Informasi</li>
    <li class="breadcrumb-item">Jumlah Ketersediaan Kamar</li>
@endsection
<div class="card">
    <div class="card-body">

        <h1 class="fw-bold">Informasi Jumlah Ketersediaan Kamar</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Tambahkamar">
            Create <i class="fas fa-plus-circle"></i>
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
            <table id="example" class="table  table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Ruangan</th>
                        <th>Kelas Ruangan</th>
                        <th>Jumlah Kamar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($jumlah_kamar as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                         
                            <td>
                                <label for="">{{ $item->nama_ruangan }}</label><br>

                            </td>
                            <td>
                                <label for=""> {{ $item->kelas }}</label>
                            </td>
                            <td>
                                <label for="">{{ $item->jumlah}}</label>
                            </td>
                            <td>

                                <a class="btn btn-warning py-1 px-2" data-bs-toggle="modal"
                                    href="#editjumlahkamar-{{ $item->id }}"><i class="fas fa-pen"></i>
                                </a>

                                <form action="{{ route('admin.jumlahkamar.delete', ['jumlah_kamar' => $item->id]) }}" class="d-inline"
                                    method="post">

                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger py-1 px-2 text-decoration-none"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">

                                        <i class="far fa-trash-alt"></i>

                                </button>
                                </form>
                            </td>
                        </tr>


                        <!-- Modal edit -->
                        <div class="modal fade " id="editjumlahkamar-{{ $item->id }}" tabindex="-1"
                            aria-labelledby="editjumlahkamarLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Edit
                                            Jumlah Kamar{{ $item->id }}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('admin.jumlahkamar.update', ['jumlah_kamar' => $item->id]) }}"
                                        method="post" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="nama_ruangan" class="form-label">Nama Ruangan</label>
                                                <input type="text" class="form-control" name="nama_ruangan" id="nama_ruangan"
                                                    value="{{ old('nama_ruangan', $item->nama_ruangan) }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="kelas" class="form-label">Kelas</label>
                                                <input type="text" class="form-control" name="kelas"
                                                    id="kelas" value="{{ old('kelas', $item->kelas) }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="jumlah" class="form-label">Jumlah</label>
                                                <input type="number" class="form-control" name="jumlah"
                                                    id="jumlah" value="{{ old('jumlah', $item->jumlah) }}">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal create -->
<div class="modal fade " id="Tambahkamar" tabindex="-1" aria-labelledby="TambahsakipLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Create Kamar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.jumlahkamar.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama_ruangan" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama_ruangan" id="nama_ruangan"
                            value="{{ old('nama_ruangan') }}">
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control" name="kelas" id="kelas"
                            value="{{ old('kelas') }}">
                    </div>
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="text" class="form-control" name="jumlah" id="jumlah"
                            value="{{ old('jumlah') }}">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('link-script-admin')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $("#example").DataTable();
    });
</script>
@endpush

@extends('admin.pages.main', ['sloot' => 'Daftar Spesialis'])
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
    <li class="breadcrumb-item">Master Dokter</li>
    <li class="breadcrumb-item">Spesialis</li>
@endsection
<div class="card">
    <div class="card-body">
        <h1 class="fw-bold">Daftar Spesialis</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#TambahSpesialis">
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
                        <th>Nama Spesialis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($spesialis as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->nama_spesialis }}</td>
                            <td>
                                <a class="btn btn-warning py-1 px-2" data-bs-toggle="modal"
                                    href="#editSpesialis{{ $item->id }}"><i class="fas fa-pen"></i></a>
                                <form action="{{ route('admin.spesialis.delete', ['spesialis' => $item->id]) }}"
                                    method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger py-1 px-2 text-decoration-none"><i
                                            class="far fa-trash-alt"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"></i></button>

                                </form>
                            </td>
                        </tr>




                        <!-- Modal edit -->
                        <div class="modal fade " id="editSpesialis{{ $item->id }}" tabindex="-1"
                            aria-labelledby="TambahKategoriLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Edit kategori</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('admin.spesialis.update', ['spesialis' => $item->id]) }}"
                                        method="post">
                                        @method('patch')
                                        @csrf
                                        <div class="modal-body ">
                                            <div class="mb-3">
                                                <label for="nama_spesialis" class="form-label">Nama Spesialis</label>
                                                <input type="text" class="form-control" name="nama_spesialis"
                                                    id="nama_spesialis"
                                                    value="{{ old('nama_spesialis', $item->nama_spesialis) }}">
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
<div class="modal fade " id="TambahSpesialis" tabindex="-1" aria-labelledby="TambahSpesialisLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Create kategori</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.spesialis.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama_spesialis" class="form-label">Nama Spesialis</label>
                        <input type="text" class="form-control" name="nama_spesialis" id="nama_spesialis"
                            value="{{ old('nama_spesialis') }}">
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

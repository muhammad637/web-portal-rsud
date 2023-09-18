@extends('admin.pages.main', ['sloot' => 'SAKIP'])
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
    <li class="breadcrumb-item">Sakip</li>
@endsection
<div class="card">
    <div class="card-body">

        <h1 class="fw-bold">Informasi SAKIP</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Tambahsakip">
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
            <table id="example" class="table  table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Dokumen</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($sakip as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <label for="">{{ $item->nama }}</label><br>
                               
                            </td>
                            <td>
                                <label for=""> {{ $item->link_file }}</label>
                            </td>
                            <td>
                                
                                <a class="btn btn-warning py-1 px-2" data-bs-toggle="modal"
                                    href="#editsakip-{{ $item->id }}"><i class="fas fa-pen"></i>
                                <form action="" class="d-inline" method="post">
                                        @method('delete')
                                        @csrf
                                <a type="submit" class="btn btn-danger py-1 px-2 text-decoration-none"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">

                                <i class="far fa-trash-alt"></i>

                                </a>
                                    </form>
                            </td>
                        </tr>


                        <!-- Modal edit -->
                        <div class="modal fade " id="editsakip-{{ $item->id }}" tabindex="-1"
                            aria-labelledby="editsakipLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Edit
                                            sakip{{ $item->id }}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('admin.sakip.update', ['sakip' => $item->id]) }}"
                                        method="post" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text" class="form-control" name="nama" id="nama"
                                                    value="{{ old('nama', $item->nama) }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="link_file" class="form-label">Link File</label>
                                                <input type="text" class="form-control" name="link_file"
                                                    id="link_file" value="{{ old('link_file') }}">
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
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Dokumen</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<!-- Modal create -->
<div class="modal fade " id="Tambahsakip" tabindex="-1" aria-labelledby="TambahsakipLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Create sakip</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.sakip.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama"
                            value="{{ old('nama') }}">
                    </div>
                    <div class="mb-3">
                        <label for="link_file" class="form-label">Link File</label>
                        <input type="text" class="form-control" name="link_file" id="link_file"
                            value="{{ old('link_file') }}">
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

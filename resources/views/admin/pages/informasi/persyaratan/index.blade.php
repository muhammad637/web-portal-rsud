@extends('admin.pages.main')
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
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Card persyaratan</h5>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Tambahpersyaratan">
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
                            <th>Jenis Penjamin</th>
                            <th>Rawat Inap</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($persyaratan as $index => $item)
                            <tr>
                                <td>{{ $item->jenis_penjaminan }}</td>
                                <td>{{ $item->rawat_inap}}</td>
                                <td>
                                    <a class="badge bg-warning border-0" data-bs-toggle="modal"
                                        href="#editpersyaratan{{ $item->id }}"><img src="{{ asset('images/icon/icon_pen.svg') }}"
                                            alt=""></a>
                                    <a href="#" class="badge bg-danger border-0"><img
                                            src="{{ asset('images/icon/icon_trash.svg') }}" alt=""></a>
                                </td>
                            </tr>




                            <!-- Modal edit -->
                            <div class="modal fade " id="editpersyaratan{{ $item->id }}" tabindex="-1"
                                aria-labelledby="TambahpersyaratanLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Form Edit persyaratan</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('admin.persyaratan.update', ['persyaratan' => $item->id]) }}" method="post" enctype="multipart/form-data">
                                            @method('put')
                                            @csrf
                                            <div class="modal-body ">
                                                <div class="mb-3">
                                                    <label for="jenis_penjaminan" class="form-label">Jenis Penjamin</label>
                                                    <input type="text" class="form-control" name="jenis_penjaminan"
                                                        id="jenis_penjaminan"
                                                        value="{{ old('jenis_penjaminan', $item->jenis_penjamin) }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="rawat_inap" class="form-label">Rawat Inap</label>
                                                    <input type="text" class="form-control" name="rawat_inap"
                                                        id="rawat_inap"
                                                        value="{{ old('rawatinap', $item->rawat_inap) }}">
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
                            <th>Jenis Penjamin</th>
                            <th>Rawat Inap</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal create -->
    <div class="modal fade " id="Tambahpersyaratan" tabindex="-1" aria-labelledby="TambahpersyaratanLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Create persyaratan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.persyaratan.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="jenis_penjamin" class="form-label">Jenis Penjamin</label>
                            <input type="text" class="form-control" name="jenis_penjaminan" id="jenis_penjamin"
                                value="{{ old('jenis_penjamin') }}">
                        </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Rawat Inap</label>
                                <input type="text" class="form-control" name="rawat_inap" id="rawat_inap"
                                    value="{{ old('rawat_inap') }}">
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

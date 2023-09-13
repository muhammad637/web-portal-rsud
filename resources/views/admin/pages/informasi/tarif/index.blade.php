@extends('admin.pages.main')
@push('link-css-admin')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
    @livewireStyles
@endpush
@section('content-admin')
    <div class="card">
        <div class="card-body">

            <h1 class="fw-bold">Informasi Tarif Kamar</h1>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tarifKamar">
                Create <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                    <path
                        d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z" />
                    <path
                        d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                </svg>
            </button>



            @if (session()->has('successKamar'))
                <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                    <span>{{ session()->get('successKamar') }}</span>
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
                            <th>Nama Kamar</th>
                            <th>Tarif</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($tarifKamar as $index => $item)
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>
                                    <a class="btn btn-success py-1 px-2 " data-bs-toggle="modal" href="#editDokter"><i class="fas fa-eye"></i></a>
                                    <a class="btn btn-warning py-1 px-2" data-bs-toggle="modal"
                                        href="#tarifKamar-{{ $item->id }}"><i class="fas fa-pen"></i></a>
                                    <form action="{{ route('admin.tarif.delete', ['tarif' => $item->id]) }}"
                                        class="d-inline" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger py-1 px-2 text-decoration-none">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <!-- Modal edit -->
                            <!-- Modal edit tarifKamar-->
                            <div class="modal fade " id="tarifTindakan-{{ $item->id }}" tabindex="-1"
                                aria-labelledby="TambahKategoriLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Form Update Tarif Kamar
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('admin.tarif.update', ['tarif' => $item->id]) }}"
                                            method="post">
                                            @method('put')
                                            @csrf
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Nama Kamar</label>
                                                    <input type="text" class="form-control" name="nama" id="nama"
                                                        value="{{ old('nama', $item->nama) }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tarif" class="form-label">Tarif Kamar</label>
                                                    <input type="text" class="form-control" name="tarif"
                                                        value="{{ old('tarif', $item->tarif) }}">
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
                            <th>Nama Kamar</th>
                            <th>Tarif</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    {{-- card tindakan --}}
    <div class="card">
        <div class="card-body">

            <h5 class="card-title">Card Informasi Tarif Tindakan</h5>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tarifTindakan">
                Create <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                    <path
                        d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z" />
                    <path
                        d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                </svg>
            </button>



            @if (session()->has('successTindakan'))
                <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                    <span>{{ session()->get('successTindakan') }}</span>
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
                <table id="tindakan" class="table  table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Jenis Tindakan</th>
                            <th>Tarif</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($tarifTindakan as $index => $item)
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>
                                    <a class="badge bg-success border-0" data-bs-toggle="modal" href="#editDokter"><img
                                            src="{{ asset('icon/icon_folder.png') }}" alt=""></a>
                                    <button class="badge bg-primary border-0" data-bs-toggle="modal"
                                        data-bs-target="#tarifTindakan-{{ $item->id }}"><img
                                            src="{{ asset('icon/icon_pen.png') }}" alt=""></button>

                                    <form action="{{route('admin.tarif.delete',['tarif' => $item->id])}}" class="d-inline" method="post">
                                        <button type="submit" class="badge bg-danger border-0">
                                            @method('delete')
                                            @csrf
                                            <img src="{{ asset('icon/icon_trash.png') }}" alt="">
                                        </button>
                                    </form>
                                </td>
                            </tr>





                            <!-- Modal edit tarifTindakan-->
                            <div class="modal fade " id="tarifTindakan-{{ $item->id }}" tabindex="-1"
                                aria-labelledby="TambahKategoriLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Form Update Tarif Tindakan
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('admin.tarif.update', ['tarif' => $item->id]) }}"
                                            method="post">
                                            @method('put')
                                            @csrf
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Nama Tindakan</label>
                                                    <input type="text" class="form-control" name="nama"
                                                        id="nama" value="{{ old('nama', $item->nama) }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tarif" class="form-label">Tarif Tindakan</label>
                                                    <input type="text" class="form-control" name="tarif"
                                                        value="{{ old('tarif', $item->tarif) }}">
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
                            <th>Jenis Tindakan</th>
                            <th>Tarif</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    {{-- end card tindakan --}}


    <!-- Modal create tarifKamar-->
    <div class="modal fade " id="tarifKamar" tabindex="-1" aria-labelledby="TambahKategoriLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Create Tarif Kamar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.tarifKamar.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Kamar</label>
                            <input type="text" class="form-control" name="nama" id="nama"
                                value="{{ old('nama') }}">
                        </div>
                        <div class="mb-3">
                            <label for="tarif" class="form-label">Tarif Kamar</label>
                            <input type="text" class="form-control" name="tarif" value="{{ old('tarif') }}">
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
    <!-- Modal create tarifTindakan-->
    <div class="modal fade " id="tarifTindakan" tabindex="-1" aria-labelledby="TambahKategoriLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Create Tarif Tindakan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.tarifTindakan.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama"
                                value="{{ old('nama') }}">
                        </div>
                        <div class="mb-3">
                            <label for="tarif" class="form-label">Tarif</label>
                            <input type="text" class="form-control" name="tarif" value="{{ old('tarif') }}">
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
        $(document).ready(function() {
            $("#tindakan").DataTable();
        });
    </script>
    @livewireScripts
@endpush

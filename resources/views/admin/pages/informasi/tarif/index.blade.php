@extends('admin.pages.main', ['sloot' => 'Tarif'])
@push('link-css-admin')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
    @livewireStyles
@endpush
@section('content-admin')
@section('breadcrumb')
    <li class="breadcrumb-item">Informasi</li>
    <li class="breadcrumb-item">Tarif</li>
@endsection
<div class="card">
    <div class="card-body">

        <h1 class="fw-bold">Informasi Tarif Kamar</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tarifKamar">
            Create <i class="fas fa-plus-circle"></i>
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
                            <td>{{$item->nama}}</td>
                            <td>{{$item->tarif}}</td>
                            <td>
                                
                                <a class="btn btn-warning py-1 px-2" data-bs-toggle="modal"
                                    href="#tarifKamar-{{ $item->id }}"><i class="fas fa-pen"></i></a>
                                <form action="{{ route('admin.tarif.delete', ['tarif' => $item->id]) }}"
                                    class="d-inline" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger py-1 px-2 text-decoration-none"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <i class="far fa-trash-alt"></i>

                                    </button>
                                </form>
                            </td>
                        </tr>
                        <!-- Modal edit -->
                        <!-- Modal edit tarifKamar-->
                        <div class="modal fade " id="tarifKamar-{{ $item->id }}" tabindex="-1"
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
            Create <i class="fas fa-plus-circle"></i>
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
                            <td>{{$item->nama}}</td>
                            <td>{{$item->tarif}}</td>
                            <td>
                                <button class="btn btn-warning py-1 px-2" data-bs-toggle="modal"
                                    data-bs-target="#tarifTindakan-{{ $item->id }}"><i class="fas fa-pen"></i></button>

                                <form action="{{ route('admin.tarif.delete', ['tarif' => $item->id]) }}"
                                    class="d-inline" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger py-1 px-2 text-decoration-none"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">

                                        <i class="far fa-trash-alt"></i>
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

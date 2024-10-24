@extends('admin.pages.main', ['sloot' => 'jam_operasional'])
@push('link-css-admin')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
    @livewireStyles
@endpush
@section('content-admin')
@section('breadcrumb')
    <li class="breadcrumb-item">Informasi</li>
    <li class="breadcrumb-item">jam operasional</li>
@endsection
<div class="card">
    <!-- Button trigger modal -->

    @if (session()->has('successKamar'))
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
    <div class="table-responsive">
        <form action="{{route('kontakDarurat.post')}}" method="post">
            @csrf
            <table class="table">
                <thead>
                    <tr>
                        <th>Kontak Darurat</th>
                        <th> <input type="text" class="form-control" name="kontak_darurat" id="nama"
                                value="{{$kontakDarurat->kontak_darurat}}"></th>
                        <th><button type="submit" class="btn btn-primary">Ubah</button></th>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h1 class="fw-bold">Informasi jam operasional RSUD Blambangan</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tarifKamar">
            Create <i class="fas fa-plus-circle"></i>
        </button>
        @if (session()->has('successKamar'))
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
            <table id="example" class="table   table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>jam operasional</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($jam_operasional as $index => $item)
                        <tr>
                            <td>@if ($item->sampai_hari != null)
                                <span>{{ $item->mulai_hari }} - {{ $item->sampai_hari }}</span>
                            @else
                                <span>{{ $item->mulai_hari }} </span>
                            @endif</td>
                            <td>{{ Carbon\Carbon::parse($item->mulai_jam)->format('H:i') }} - {{ Carbon\Carbon::parse($item->sampai_jam)->format('H:i') }}</td>
                            <td>

                                <a class="btn btn-warning py-1 px-2" data-bs-toggle="modal"
                                    href="#tarifKamar-{{ $item->id }}"><i class="fas fa-pen"></i></a>
                                <form
                                    action="{{ route('admin.jam-operasional.delete', ['jamOperasional' => $item->id]) }}"
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
                        <!-- Modal edit -->
                        <!-- Modal edit tarifKamar-->
                        <div class="modal fade " id="tarifKamar-{{ $item->id }}" tabindex="-1"
                            aria-labelledby="TambahKategoriLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Update jam_operasional
                                            Kamar
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form
                                        action="{{ route('admin.jam-operasional.update', ['jamOperasional' => $item->id]) }}"
                                        method="post">
                                        @method('put')
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Hari</label>
                                                <div class="row d-flex align-items-center">
                                                    <div class="col">
                                                        <label for="nama" class="form-label">Mulai</label>
                                                        <select class="form-control" name="mulai_hari" id="mulai_hari">
                                                            <option value="">Pilih Hari</option>
                                                            <option value="Senin"
                                                                {{ $item->mulai_hari == 'Senin' ? 'selected' : '' }}>
                                                                Senin
                                                            </option>
                                                            <option value="Selasa"
                                                                {{ $item->mulai_hari == 'Selasa' ? 'selected' : '' }}>
                                                                Selasa</option>
                                                            <option value="Rabu"
                                                                {{ $item->mulai_hari == 'Rabu' ? 'selected' : '' }}>
                                                                Rabu
                                                            </option>
                                                            <option value="Kamis"
                                                                {{ $item->mulai_hari == 'Kamis' ? 'selected' : '' }}>
                                                                Kamis
                                                            </option>
                                                            <option value="Jumat"
                                                                {{ $item->mulai_hari == 'Jumat' ? 'selected' : '' }}>
                                                                Jumat
                                                            </option>
                                                            <option value="Sabtu"
                                                                {{ $item->mulai_hari == 'Sabtu' ? 'selected' : '' }}>
                                                                Sabtu
                                                            </option>
                                                            <option value="Minggu"
                                                                {{ $item->mulai_hari == 'Minggu' ? 'selected' : '' }}>
                                                                Minggu</option>
                                                        </select>

                                                    </div>

                                                    <div class="col">
                                                        <label for="nama" class="form-label">Sampai (kosongkan jika
                                                            satu hari)</label>
                                                        <select class="form-control" name="sampai_hari"
                                                            id="sampai_hari">
                                                            <option value="">Pilih Hari</option>
                                                            <option value="Senin"
                                                                {{ $item->sampai_hari == 'Senin' ? 'selected' : '' }}>
                                                                Senin
                                                            </option>
                                                            <option value="Selasa"
                                                                {{ $item->sampai_hari == 'Selasa' ? 'selected' : '' }}>
                                                                Selasa</option>
                                                            <option value="Rabu"
                                                                {{ $item->sampai_hari == 'Rabu' ? 'selected' : '' }}>
                                                                Rabu
                                                            </option>
                                                            <option value="Kamis"
                                                                {{ $item->sampai_hari == 'Kamis' ? 'selected' : '' }}>
                                                                Kamis
                                                            </option>
                                                            <option value="Jumat"
                                                                {{ $item->sampai_hari == 'Jumat' ? 'selected' : '' }}>
                                                                Jumat
                                                            </option>
                                                            <option value="Sabtu"
                                                                {{ $item->sampai_hari == 'Sabtu' ? 'selected' : '' }}>
                                                                Sabtu
                                                            </option>
                                                            <option value="Minggu"
                                                                {{ $item->sampai_hari == 'Minggu' ? 'selected' : '' }}>
                                                                Minggu</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="jam_operasional" class="form-label">jam
                                                    operasional</label>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="nama" class="form-label">Mulai</label>

                                                        <input type="time" class="form-control" name="mulai_jam"
                                                            id="mulai_jam" value="{{ $item->mulai_jam }}">
                                                    </div>

                                                    <div class="col">
                                                        <label for="nama" class="form-label">Sampai</label>

                                                        <input type="time" class="form-control" name="sampai_jam"
                                                            id="sampai_jam" value="{{ $item->sampai_jam }}">
                                                    </div>
                                                </div>
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


<!-- Modal create tarifKamar-->
<div class="modal fade " id="tarifKamar" tabindex="-1" aria-labelledby="TambahKategoriLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah jam operasional </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.jam-operasional.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Hari</label>
                        <div class="row d-flex align-items-center">
                            <div class="col">
                                <label for="nama" class="form-label">Mulai</label>
                                <select class="form-control" name="mulai_hari" id="mulai_hari">
                                    <option value="">Pilih Hari</option>
                                    <option value="Senin" {{ old('mulai_hari') == 'Senin' ? 'selected' : '' }}>Senin
                                    </option>
                                    <option value="Selasa" {{ old('mulai_hari') == 'Selasa' ? 'selected' : '' }}>
                                        Selasa</option>
                                    <option value="Rabu" {{ old('mulai_hari') == 'Rabu' ? 'selected' : '' }}>Rabu
                                    </option>
                                    <option value="Kamis" {{ old('mulai_hari') == 'Kamis' ? 'selected' : '' }}>Kamis
                                    </option>
                                    <option value="Jumat" {{ old('mulai_hari') == 'Jumat' ? 'selected' : '' }}>Jumat
                                    </option>
                                    <option value="Sabtu" {{ old('mulai_hari') == 'Sabtu' ? 'selected' : '' }}>Sabtu
                                    </option>
                                    <option value="Minggu" {{ old('mulai_hari') == 'Minggu' ? 'selected' : '' }}>
                                        Minggu</option>
                                </select>

                            </div>

                            <div class="col">
                                <label for="nama" class="form-label">Sampai (kosongkan jika satu hari)</label>
                                <select class="form-control" name="sampai_hari" id="sampai_hari">
                                    <option value="">Pilih Hari</option>
                                    <option value="Senin" {{ old('sampai_hari') == 'Senin' ? 'selected' : '' }}>Senin
                                    </option>
                                    <option value="Selasa" {{ old('sampai_hari') == 'Selasa' ? 'selected' : '' }}>
                                        Selasa</option>
                                    <option value="Rabu" {{ old('sampai_hari') == 'Rabu' ? 'selected' : '' }}>Rabu
                                    </option>
                                    <option value="Kamis" {{ old('sampai_hari') == 'Kamis' ? 'selected' : '' }}>Kamis
                                    </option>
                                    <option value="Jumat" {{ old('sampai_hari') == 'Jumat' ? 'selected' : '' }}>Jumat
                                    </option>
                                    <option value="Sabtu" {{ old('sampai_hari') == 'Sabtu' ? 'selected' : '' }}>Sabtu
                                    </option>
                                    <option value="Minggu" {{ old('sampai_hari') == 'Minggu' ? 'selected' : '' }}>
                                        Minggu</option>
                                </select>

                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="jam_operasional" class="form-label">jam operasional</label>
                        <div class="row">
                            <div class="col">
                                <label for="nama" class="form-label">Mulai</label>

                                <input type="time" class="form-control" name="mulai_jam" id="mulai_jam"
                                    value="{{ old('mulai_jam') }}">
                            </div>

                            <div class="col">
                                <label for="nama" class="form-label">Sampai</label>

                                <input type="time" class="form-control" name="sampai_jam" id="sampai_jam"
                                    value="{{ old('sampai_jam') }}">
                            </div>
                        </div>
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

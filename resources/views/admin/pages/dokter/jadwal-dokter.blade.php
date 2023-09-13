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
    @livewireStyles
@endpush
@section('content-admin')
@section('breadcrumb')
    <li class="breadcrumb-item">Jadwal Dokter</li>
@endsection
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Card Jadwal</h5>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#TambahJadwal">
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
                <table id="example" class="table table-light table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Dokter </th>
                            <th>Jadwal Dokter</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($jadwalDokter) > 0)
                            @foreach ($dokter as $index => $item)
                                @if (count($item->jadwalDokter) > 0)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>
                                            @if (count($item->jadwalDokter) == 0)
                                                -
                                            @endif
                                            <ul class="">
                                                @foreach ($item->jadwalDokter as $value)
                                                    <li class="list-group-item ">
                                                        hari {{ $value->hari }} :
                                                        {{ Carbon\Carbon::parse($value->jam_mulai_praktik)->format('H:i') }}
                                                        -
                                                        {{ Carbon\Carbon::parse($value->jam_selesai_praktik)->format('H:i') }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            @if (count($item->jadwalDokter) > 0)
                                                <a class="badge bg-warning border-0" data-bs-toggle="modal"
                                                    href="#editJadwal-{{ $item->id }}"><img
                                                        src="{{ asset('images/icon/icon_pen.svg') }}" alt=""></a>
                                                <a class="badge bg-danger border-0" data-bs-toggle="modal"
                                                    href="#hapusJadwal-{{ $item->id }}" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><img
                                                        src="{{ asset('images/icon/icon_trash.svg') }}" alt=""></a>
                                            @else
                                                -
                                            @endif

                                        </td>
                                    </tr>
                                @endif




                                <!-- Modal edit -->
                                <div class="modal fade " id="editJadwal-{{ $item->id }}" tabindex="-1"
                                    aria-labelledby="TambahKategoriLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Salah Satu Jadwal
                                                    Dokter
                                                    {{ $item->nama }}</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('admin.jadwal.update', ['dokter' => $item->id]) }}"
                                                method="post">
                                                @method('patch')
                                                @csrf
                                                <div class="modal-body">
                                                    <input type="hidden" name="id_dokter" value="{{ $item->id }}">
                                                    @livewire('admin.jadwal.jadwal-dokter-update', ['dokter' => $item])

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

                                {{-- modal Delete --}}
                                <div class="modal fade " id="hapusJadwal-{{ $item->id }}" tabindex="-1"
                                    aria-labelledby="TambahKategoriLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Salah Satu Jadwal
                                                    Dokter
                                                    {{ $item->nama }}</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('admin.jadwal.delete', ['dokter' => $item->id]) }}"
                                                method="post">
                                                @method('delete')
                                                @csrf
                                                <div class="modal-body">
                                                    <input type="hidden" name="id_dokter" value="{{ $item->id }}">
                                                    <div class="mb-3">
                                                        <label for="hari" class="form-label">Hari</label>

                                                        <select name="hari" id="" class="form-control">
                                                            <option value="">Pilih</option>
                                                            @foreach ($item->jadwalDokter as $data)
                                                                <option value="{{ $data->hari }}">{{ $data->hari }}
                                                                </option>
                                                            @endforeach
                                                        </select>
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
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Dokter </th>
                            <th>Jadwal Dokter</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal create -->
    <div class="modal fade " id="TambahJadwal" tabindex="-1" aria-labelledby="TambahSpesialisLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Create Jadwal Dokter</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.jadwal.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            @livewire('admin.dokter.search-dokter')
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Hari </label>
                            <select name="hari" id="" class="form-select">
                                <option value="">Pilih hari</option>
                                <option value="senin">Senin</option>
                                <option value="selasa">Selasa</option>
                                <option value="rabu">Rabu</option>
                                <option value="kamis">Kamis</option>
                                <option value="jumat">Jumat</option>
                                <option value="sabtu">Sabtu</option>
                                <option value="minggu">Minggu</option>
                            </select>
                        </div>

                        <div class="mb-3 row gap-2 justify-content-between">
                            <div class="col-md-5">
                                <label for="" class="form-label">Jam Buka layanan</label>
                                <input type="time" class="form-control" name="jam_mulai_praktik">
                            </div>
                            <div class="col-md-5">
                                <label for="" class="form-label">Jam Tutup layanan</label>
                                <input type="time" class="form-control" name="jam_selesai_praktik">
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
    </script>
    @livewireScripts
@endpush

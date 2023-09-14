@extends('admin.pages.main')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
    <li class="breadcrumb-item">Dashboard</li>
@endsection
@push('link-css-admin')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
@endpush
@section('content-admin')
    <div class="row">
        <div class="col">
            <a href="{{ $kategoriLayanan ? route('admin.layanan', ['kategoriLayanan' => $rawatjalan]) : '#' }}">
                <div class="card">
                    <div class="card-body p-3">
                        <strong>
                            <p class="text-sm mb-0 text-uppercase font-weight-bold ms-2" style="color: #25C42B;">Jumlah
                                Poli / Klinik</p>
                        </strong>
                        <div class="row align-items-center mt-2">
                            <div class="col-8">
                                <div class="numbers">
                                    <img src="{{ asset('images/icon/icon_toa.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <h5 style="font-size: 30px; color:#25C42B"> {{ $jumlahLayanan }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="{{route('admin.konten.index')}}">
                <div class="card">
                    <div class="card-body p-3">
                        <strong>
                            <p class="text-sm mb-0 text-uppercase font-weight-bold ms-2" style="color: #4889FF;">Jumlah
                                Artikel</p>
                        </strong>
                        <div class="row align-items-center mt-2">
                            <div class="col-8">
                                <div class="numbers">
                                    <img src="{{ asset('images/icon/icon_kertas.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <h5 style="font-size: 30px; color: #4889FF;">{{ $jumlahArtikel }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="{{route('admin.dokter')}}">
                <div class="card">
                    <div class="card-body p-3">
                        <strong>
                            <p class="text-sm mb-0 text-uppercase font-weight-bold ms-2" style="color: #FB2626;">Jumlah
                                Dokter</p>
                        </strong>
                        <div class="row align-items-center mt-2">
                            <div class="col-8">
                                <div class="numbers">
                                    <img src="{{ asset('images/icon/icon_file.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <h5 style="font-size: 30px; color:#FB2626;">{{$jumlahDokter}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h1 class="fw-bold">History Update Data Layanan</h1>
            <div class="table-responsive mt-5">
                <table id="example" class="table  table-striped table-bordered   " style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Layanan</th>
                            <th>Jenis</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($layanan as $item)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td>{{ $item->nama }}
                                </td>
                                <td>
                                    {{ $item->kategoriLayanan->nama }}
                                </td>

                            </tr>
                        @endforeach
                        {{-- @endforeach --}}
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Layanan</th>
                            <th>Jenis</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h1 class="fw-bold">History Update data Dokter</h1>
            <div class="table-responsive mt-5">
                <table id="example-2" class="table  table-striped table-bordered   " style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Dokter</th>
                            <th>Poli</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dokter as $item)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td>{{ $item->nama }}
                                </td>
                                <td>{{ $item->rawatJalan->nama }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
            $("#example-2").DataTable();
        });
    </script>
@endpush

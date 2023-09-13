@extends('admin.pages.main')
@section('breadcrumb')
    <li class="breadcrumb-item">Dashboard</li>
@endsection
@push('link-css-admin')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
@endpush
@section('content-admin')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body p-3">
                    <strong>
                        <p class="text-sm mb-0 text-uppercase font-weight-bold ms-2" style="color: #25C42B;">Jumlah
                            Layanan</p>
                    </strong>
                    <div class="row align-items-center mt-2">
                        <div class="col-8">
                            <div class="numbers">
                                <img src="{{ asset('images/icon/icon_toa.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-4">
                            <h5 style="font-size: 30px; color:#25C42B">{{ $jumlahKategoriLayanan }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body p-3">
                    <strong>
                        <p class="text-sm mb-0 text-uppercase font-weight-bold ms-2" style="color: #4889FF;">Jumlah
                            Konten</p>
                    </strong>
                    <div class="row align-items-center mt-2">
                        <div class="col-8">
                            <div class="numbers">
                                <img src="{{ asset('images/icon/icon_kertas.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-4">
                            <h5 style="font-size: 30px; color: #4889FF;">{{ $jumlahKonten }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body p-3">
                    <strong>
                        <p class="text-sm mb-0 text-uppercase font-weight-bold ms-2" style="color: #FB2626;">Jumlah
                            Kategori Konten</p>
                    </strong>
                    <div class="row align-items-center mt-2">
                        <div class="col-8">
                            <div class="numbers">
                                <img src="{{ asset('images/icon/icon_file.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-4">
                            <h5 style="font-size: 30px; color:#FB2626;">{{ $jumlahKategoriKonten }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h1 class="fw-bold">History Update Layanan</h1>
            <div class="table-responsive mt-5">
                <table id="example" class="table  table-striped table-bordered   " style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelayanan</th>
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
                            <th>Nama Pelayanan</th>
                            <th>Jenis</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h1 class="fw-bold">History Update Konten</h1>
            <div class="table-responsive mt-5">
                <table id="example-2" class="table  table-striped table-bordered   " style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelayanan</th>
                            <th>Jenis</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($konten as $item)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td>{{ $item->slug }}
                                </td>
                                
                                <td>

                                    @foreach ($item->kategori_konten as $value)
                                    {{ $value->nama }}     
                                    @endforeach
                                   
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelayanan</th>
                            <th>Jenis</th>
                        </tr>
                    </tfoot>
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

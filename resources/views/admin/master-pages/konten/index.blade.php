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
            <h1 class="fw-bold">Artikel</h1>
            <a href="{{ route('konten.create') }}" class="btn btn-primary text-decoration-none"> Create  <i class="fa-solid fa-square-plus"></i>
            </a>
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                    <span>{{ session()->get('success') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="table-responsive mt-5">
                <table id="example" class="table  table-striped table-bordered   " style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama Artikel</th>
                            <th>excerpt</th>
                            <th>tanggal dibuat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($konten as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <div class="bunder"
                                        style=" background: url('{{ asset('storage/' . $item->gambar) }}') no-repeat center">
                                    </div>
                                </td>
                                <td>{{ $item->judul }}</td>
                                <td>{{ $item->slug }}</td>
                                <td>{{ Carbon\Carbon::parse($item->created_at)->format('d-M-Y') }}</td>
                                <td>
                                    <a href="#" class="badge bg-success"><img
                                            src="{{ asset('icon/icon_folder.png') }}" alt=""></a>
                                    <a href="{{ route('konten.edit', ['beritaDanArtikel' => $item->slug]) }}"
                                        class="badge bg-warning"><img src="{{ asset('images/icon/icon_pen.svg') }}"
                                            alt=""></a>
                                    <a href="#" class="badge bg-danger"><img src="{{ asset('images/icon/icon_trash.svg') }}"
                                            alt=""></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nama Berita</th>
                            <th>Gambar</th>
                            <th>excerpt</th>
                            <th>tanggal dibuat</th>
                            <th>tanggal dibuat</th>
                            <th>Aksi</th>
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
    </script>
@endpush

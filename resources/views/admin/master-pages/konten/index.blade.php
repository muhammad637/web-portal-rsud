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
            <h1 class="fw-bold">Berita</h1>
            <a href="{{ route('admin.konten.create') }}" class="btn btn-primary text-decoration-none"> Create <i
                    class="fa-solid fa-square-plus"></i>
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

                                    <a href="{{ route('berita.show', ['konten' => $item->slug]) }}" target="_blank"
                                        class="btn btn-success py-1 px-2 "><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('admin.konten.edit', ['konten' => $item->slug]) }}"
                                        class="btn btn-warning py-1 px-2 "><i class="fas fa-pen"></i></a>
                                    <form action="{{ route('admin.konten.delete', ['konten' => $item->slug]) }}"
                                        enctype="multipart/form-data" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger py-1 px-2 text-decoration-none"><i
                                                class="far fa-trash-alt"></i></button>
                                    </form>
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

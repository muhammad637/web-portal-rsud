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
@section('breadcrumb')
    <li class="breadcrumb-item">Master Pages</li>
    <li class="breadcrumb-item">{{$kategoriLayanan->nama}}</li>
@endsection
    <div class="card">
        <div class="card-body">
            <h1 class="fw-bold">{{ $kategoriLayanan->nama }}</h1>
            <a href="{{ route('admin.layanan.create', ['kategoriLayanan' => $kategoriLayanan->slug]) }}"
                class="btn btn-primary text-decoration-none"> Create <i class="fas fa-plus-circle"></i>
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
                            <th>Nama</th>
                            <th>deskripsi</th>
                            <th>tanggal dibuat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategoriLayanan->layanan as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="" width="200">
                                </td>
                                <td>{{ $item->nama }}</td>
                                <td>{!! $item->deskripsi !!}</td>
                                <td>{{ Carbon\Carbon::parse($item->created_at)->format('d-M-Y') }}</td>
                                <td>
                                    <a href="{{route('layanan.show',['layanan' => $item->slug])}}" 
                                        class="btn btn-success py-1 px-2 "><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('admin.layanan.edit', ['layanan' => $item->slug,]) }}"
                                        class="btn btn-warning py-1 px-2 "><i class="fas fa-pen"></i></a>
                                    <form action="{{ route('admin.layanan.delete', ['layanan' => $item->slug]) }}"
                                        method="post" class="d-inline">
                                        @method('delete')
                                        @csrf

                                        <button type="submit" class="btn btn-danger py-1 px-2" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></button>
                                        {{-- <button type="submit" class="badge bg-danger border-0"><img
                                                src="{{ asset('images/icon/icon_trash.svg') }}" alt=""></button> --}}
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>deskripsi</th>
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

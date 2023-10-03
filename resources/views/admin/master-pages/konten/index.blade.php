@extends('admin.pages.main', ['sloot' => 'Artikel'])
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
    <li class="breadcrumb-item">Artikel</li>
@endsection
    <div class="card">
        <div class="card-body">
            <h1 class="fw-bold">Artikel</h1>
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
                <table id="example" class="table  table-bordered   " style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($konten as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                   <img width="400" src="{{asset('storage/'.$item->gambar)}}" alt="{{$item->gambar}}" class="img-fluid ">
                                </td>
                                <td>{{ $item->judul }}</td>
                                <td>{{ Carbon\Carbon::parse($item->created_at)->format('d-M-Y') }}</td>
                                <td>
                                    <div class="d-flex gap-1">

                                        <a href="{{ route('berita.show', ['konten' => $item->slug]) }}" target="_blank"
                                            class="btn btn-success py-1 px-2 "><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('admin.konten.edit', ['konten' => $item->slug]) }}"
                                            class="btn btn-warning py-1 px-2 "><i class="fas fa-pen"></i></a>
                                        <form action="{{ route('admin.konten.delete', ['konten' => $item->slug]) }}"
                                            enctype="multipart/form-data" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
    
                                            <button type="submit" class="btn btn-danger py-1 px-2" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></button>
                                            {{-- <button class="btn btn-danger py-1 px-2 text-decoration-none"><i
                                                    class="far fa-trash-alt"></i></button> --}}
                                        </form>
                                    </div>
                                </td>
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
    </script>
@endpush

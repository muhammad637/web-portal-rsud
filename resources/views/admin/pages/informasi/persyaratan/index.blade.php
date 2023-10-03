@extends('admin.pages.main', ['sloot' => 'Persyaratan'])
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
    <li class="breadcrumb-item">Informasi</li>
    <li class="breadcrumb-item">Persyaratan</li>
@endsection
    <div class="card">
        <div class="card-body">
            <h1 class="fw-bold">Informasi Persyaratan</h1>
            <a href="{{ route('admin.persyaratan.create') }}" class="btn btn-primary">Create <i
                    class="fas fa-plus-circle"></i></a>



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
                <table id="example" class="table   table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Jenis Penjaminan</th>
                            <th>Rawat Inap</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($persyaratan as $index => $item)
                            <tr>
                                <td>{{ $item->jenis_penjaminan }}</td>
                                <td>{!! $item->rawat_inap !!}</td>
                                <td>

                                    <a class="btn btn-warning py-1 px-2" 
                                        href="{{route('admin.persyaratan.edit',['persyaratan' => $item->id])}}"><i class="fas fa-pen"></i></a>
                                    <a href="{{route('admin.persyaratan.destroy',['persyaratan' => $item->id])}}" class="btn btn-danger py-1 px-2 text-decoration-none" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="far fa-trash-alt"></i>

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

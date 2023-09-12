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
            <h5 class="card-title">Card persyaratan</h5>
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
                <table id="example" class="table  table-striped table-bordered" style="width:100%">
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
                                    <a class="badge bg-warning border-0" 
                                        href="{{route('admin.persyaratan.edit',['persyaratan' => $item->id])}}"><img
                                            src="{{ asset('images/icon/icon_pen.svg') }}" alt=""></a>
                                    <a href="{{route('admin.persyaratan.destroy',['persyaratan' => $item->id])}}" class="badge bg-danger border-0"><img
                                            src="{{ asset('images/icon/icon_trash.svg') }}" alt=""></a>
                                </td>
                            </tr>




                           
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Jenis Penjamin</th>
                            <th>Rawat Inap</th>
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

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
            <h1 class="fw-bold">Kategori Artikel</h1>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#TambahKategori">
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
                <table id="example" class="table  table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori Artikel</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategori as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>
                                    <a class="btn btn-warning py-1 px-2" data-bs-toggle="modal"
                                        href="#editKategori{{ $item->id }}"><i class="fas fa-pen"></a>
                                    <a href="#" class="badge bg-danger border-0"><img
                                            src="{{ asset('images/icon/icon_trash.svg') }}" alt=""></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori Artikel</th>
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
    <script></script>
    <script>
        $(document).ready(function() {

            $("#example").DataTable();

            $("#gambar").change(function() {
                $("#text-preview").removeClass('d-none');
                const selectedImage = $(this).prop("files")[0];
                if (selectedImage && selectedImage.type.includes("image")) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $("#displayedImage").attr("src", e.target.result);
                    };
                    reader.readAsDataURL(selectedImage);
                }
            });
        });
    </script>
@endpush

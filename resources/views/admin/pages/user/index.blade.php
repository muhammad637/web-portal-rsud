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
    <li class="breadcrumb-item"> Master User</li>
    <li class="breadcrumb-item"> User</li>
@endsection
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Card Master User</h5>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Tambahuser">
            Create Admin Disini <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
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
                        <th>Nama</th>
                        <th>User Name</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->status }}</td>
                            <td>
                                <a class="btn btn-warning py-1 px-2" data-bs-toggle="modal"
                                    href="#editUser-{{ $user->id }}"><i class="fas fa-pen"></i></a>
                                @if ($user->status == 'aktif')
                                    <form action="{{ route('admin.user.nonaktif', ['user' => $user->id]) }}"
                                        class="d-inline" method="post">
                                        <button type="submit" class="badge bg-danger border-0"
                                            onclick="return confirm('Apakah Anda yakin ingin mengupdate status user ini?')">
                                            @method('put')
                                            @csrf
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('admin.user.aktif', ['user' => $user->id]) }}"
                                        class="d-inline" method="post">
                                        <button type="submit" class="badge bg-danger border-0"
                                            onclick="return confirm('Apakah Anda yakin ingin mengupdate status user ini?')">
                                            @method('put')
                                            @csrf
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                @endif
                            </td>
                        </tr>



                        <div class="modal fade " id="editUser-{{ $user->id }}" tabindex="-1"
                            aria-labelledby="TambahuserLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Edit user</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('admin.user.update', ['user' => $user->id]) }}"
                                        method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Nama</label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    value="{{ $user->name }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="username" class="form-label">User Name</label>
                                                <input type="text" class="form-control" name="username"
                                                    id="username" value="{{ $user->username }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" name="password"
                                                    id="password">
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

                </tbody>

                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>User Name</th>
                    </tr>
                </tfoot>
            </table>
        </div>

    </div>
</div>

<!-- Modal create -->
<div class="modal fade " id="Tambahuser" tabindex="-1" aria-labelledby="TambahuserLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Create user</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.user.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">User Name</label>
                        <input type="text" class="form-control" name="username" id="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
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
@endpush

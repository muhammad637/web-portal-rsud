<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Web portal</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('./admin/assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('./admin/assets/css/styles.min.css') }}" />
</head>

<body style="background: url()">
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="{{ asset('./RSUD-logo1.png') }}" width="180" alt="">
                                </a>
                                <p class="text-center">Login ke Dashboard Portal</p>
                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text"
                                            class="form-control @error('username') is-invalid @enderror" id="username"
                                            aria-describedby="emailHelp" name="username">
                                        @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password"
                                            class="form-control @error('username') is-invalid @enderror" id="password"
                                            name="password">
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <button class="btn-primary btn w-100 py-8 fs-4 mb-4 rounded-2"
                                        type="submit">Login</button>
                                    {{-- <a href="./index.html" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</a> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('./admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('./admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
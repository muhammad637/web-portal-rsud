<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ isset($sloot) ? '' : 'Admin - WebPortal' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="{{ asset('./RSUD-logo.png') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,400;0,500;0,600;0,700;0,1000;1,200;1,700;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('./admin/assets/css/styles.min.css') }}" />
    <style>
        * {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @stack('link-css-admin')
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        @include('admin.layouts.sidebar')
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
          @include('admin.layouts.navbar')
            <!--  Header End -->
            <div class="container-fluid">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        @yield('breadcrumb')
                    </ol>
                </nav>
                <!--  Row 1 -->
                @yield('content-admin')
            </div>
        </div>
    </div>
    <script src="{{ asset('./admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('./admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('./admin/assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('./admin/assets/js/app.min.js') }}"></script>
    {{-- <script src="{{ asset('./admin/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('./admin/assets/libs/simplebar/dist/simplebar.js') }}"></script> --}}
    {{-- <script src="{{ asset('./admin/assets/js/dashboard.js') }}"></script> --}}
    @stack('link-script-admin')
</body>

</html>

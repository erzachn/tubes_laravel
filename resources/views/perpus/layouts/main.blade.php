<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Sistem Manajemen Perpustakaan')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png') }}" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" {{-- id="main-wrapper" --}} data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        {{-- @include('perpus.layouts.sidebar') --}}
        <!--  Main wrapper -->
        <div class="body-wrapper">
            {{-- header --}}
            @include('perpus.layouts.header')

            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.js') }}"></script>
</body>

</html>

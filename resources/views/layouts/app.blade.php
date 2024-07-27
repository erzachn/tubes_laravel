<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Manajemen Perpustakaan')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/" style='color: white'>Perpus</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style='color: white'>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('books.index') }}" style='color: white'>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('my-books') }}" style='color: white'>Borrowed Book</a>
                    </li>
                    @if(auth()->check() && auth()->user()->is_admin)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('films.create') }}" style='color: white'>Tambah Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.tickets') }}" style='color: white'>Buku</a>
                    </li>
                @endif
                </ul>

                @if(Auth::check())
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-flex">
                    @csrf
                    <button type="submit" class="btn btn-link nav-link">Logout</button>
                </form>
                @else
                <a href="/login" class="btn btn-link nav-link my-2 my-sm-0">Login</a>
                @endif
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>

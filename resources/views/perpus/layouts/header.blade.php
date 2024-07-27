<!--  Header Start -->
<nav class="navbar navbar-expand-lg navbar-light @yield('nav-color', '')">
    <div class="container">
        <a class="navbar-brand" href="/">Perpus</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/perpus/caribuku"><i class="ti ti-search"> Cari Buku</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/perpus/bukupengunjung"><i class="ti ti-book"> Buku Pengunjung</i></a>
                </li>
                @if(auth()->check() && auth()->user()->is_admin)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('films.create') }}">Tambah Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.tickets') }}">Tiket</a>
                </li>
            @endif
            </ul>

            <!-- User Login -->
            <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('assets/images/profile/user-1.jpg') }}" alt="Admin Icon" width="35"
                                height="35" class="rounded-circle">
                        </a>

                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                            <div class="message-body">
                            @if(Auth::check())
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-flex">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</button>
                                </form>
                                <a href="/perpus/admin" class="btn btn-outline-primary mx-3 mt-2 d-block">Admin</a>
                            @else
                                <a href="/login" class="btn btn-outline-primary mx-3 mt-2 d-block">Login</a>
                            @endif
                            </div>
                        </div>

                    </li>
                </ul>
            </div>
            <!-- End User Login -->

        </div>
    </div>
</nav>
<!--  Header End -->

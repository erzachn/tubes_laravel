@extends('perpus.layouts.main')
@section('nav-color', 'bg-light')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/perpus/caribuku.css') }}">

<div class="welcome-banner text-center">
    <h2>SELAMAT DATANG DI PERPUSTAKAAN</h2>
</div>

<main>
    <h3>CARI BUKU</h3>
    <div class="d-flex justify-content-between mb-3">
        <div>
            Show <select class="form-select form-select-sm d-inline-block w-auto">
                <option>10</option>
            </select> entries
        </div>
        <div>
            Search: <input type="search" class="form-control form-control-sm d-inline-block w-auto">
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Kategori</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Posisi Rak</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($films as $film)
                    <div class="col-md-3 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('storage/' . $film->image) }}" class="card-img-top" style="max-height: 200px; object-fit: cover;" alt="{{ $film->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $film->title }}</h5>
                                <p class="card-text text-truncate" style="max-height: 3.6em; overflow: hidden;" title="{{ $film->description }}">
                                    {{ $film->description }}
                                </p>
                                <a href="{{ route('films.show', $film->id) }}" class="btn btn-dark">Detail</a>

                                @if(auth()->user() && auth()->user()->is_admin) <!-- Cek apakah pengguna adalah admin -->
                                    <form action="{{ route('films.destroy', $film->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach

                
                <tr>
                    <td>1</td>
                    <td>Asal Grup Kubu Kubu</td>
                    <td>Cerita Anak-Anak</td>
                    <td>L.M.Andi Farhan</td>
                    <td>KubuKubu, Terbit 2024</td>
                    <td>D007</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Asal Grup Kubu Kubu</td>
                    <td>Cerita Anak-Anak</td>
                    <td>L.M.Andi Farhan</td>
                    <td>KubuKubu, Terbit 2024</td>
                    <td>D008</td>
                </tr>
            </tbody>
        </table>
    </div>
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
</main>
@endsection

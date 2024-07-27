@extends('perpus.layouts.main')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/perpus/index.css') }}">

        <div class="welcome-banner text-center">
            <h2>SELAMAT DATANG DI PERPUSTAKAAN</h2>
            <p>Universitas Negeri Baubau</p>
        </div>

        <main>
            <h3>KOLEKSI BUKU TAHUN TERBIT 2018</h3>
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
                        <tr>
                            <td>1</td>
                            <td>Asal Grup Kubu Kubu</td>
                            <td>Cerita Anak-Anak</td>
                            <td>L.M.Andi Farhan</td>
                            <td>KubuKubu, Terbit 2024</td>
                            <td>D007</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Asal Grup Kubu Kubu</td>
                            <td>Cerita Anak-Anak</td>
                            <td>L.M.Andi Farhan</td>
                            <td>KubuKubu, Terbit 2024</td>
                            <td>D007</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Asal Grup Kubu Kubu</td>
                            <td>Cerita Anak-Anak</td>
                            <td>L.M.Andi Farhan</td>
                            <td>KubuKubu, Terbit 2024</td>
                            <td>D007</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Asal Grup Kubu Kubu</td>
                            <td>Cerita Anak-Anak</td>
                            <td>L.M.Andi Farhan</td>
                            <td>KubuKubu, Terbit 2024</td>
                            <td>D007</td>
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

    </div>
@endsection

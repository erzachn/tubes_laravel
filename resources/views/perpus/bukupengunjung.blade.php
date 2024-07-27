@extends('perpus.layouts.main')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/perpus/index.css') }}">
    <style>
        .header {
            background-color: #f8f9fa;
            padding: 10px 0;
        }
        .welcome-banner {
            background-color: #00e676;
            color: white;
            padding: 15px 0;
            margin-bottom: 20px;
        }
    </style>

        <div class="welcome-banner text-center">
            <h2>SELAMAT DATANG DI PERPUSTAKAAN</h2>
            <p class="mb-0">Universitas Negeri Baubau</p>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Nomor Anggota</h5>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Masukan nomor anggota">
                    <button class="btn btn-danger" type="button">Simpan</button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">DAFTAR PENGUNJUNG PERPUSTAKAAN 19-08-2023</h5>
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
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Anggota</th>
                            <th>Nama Anggota</th>
                            <th>Waktu Kunjungan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2307201</td>
                            <td>Firdaus</td>
                            <td>19-08-2023 08:51:59</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2308166</td>
                            <td>Komar</td>
                            <td>19-08-2023 08:13:47</td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-between">
                    <div>Showing 1 to 2 of 2 entries</div>
                    <nav>
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>

@endsection

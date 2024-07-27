@extends('perpus.layouts.main')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/perpus/index.css') }}">
    <style>
        .sidebar { background-color: #28a745; color: white; height: 100vh; }
        .sidebar .nav-link { color: white; }
        .content { background-color: #f8f9fa; }
        .logo-preview { width: 150px; height: 150px; }
    </style>


<div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="position-sticky pt-3">
                    <div class="text-center mb-3">
                        <img src="admin-avatar.png" alt="Admin" class="rounded-circle" width="100">
                        <h5 class="mt-2">admin karyawan</h5>
                        <p>Status: Admin</p>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-book"></i> Peminjaman</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-book-open"></i> Pustaka</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-chart-bar"></i> Laporan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-users"></i> Anggota</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-user-tie"></i> Karyawan</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#"><i class="fas fa-cog"></i> Setting App</a></li>
                    </ul>
                </div>
                <div class="position-absolute bottom-0 start-0 p-3">
                    <img src="qr-code.png" alt="QR Code" width="100">
                </div>
            </nav>

            <!-- Main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 content">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Setting App</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <button type="button" class="btn btn-sm btn-outline-secondary">
                            <i class="fas fa-user"></i> Profile
                        </button>
                    </div>
                </div>

                <p>Menu Pengaturan Aplikasi memungkinkan Anda untuk mengubah nama aplikasi, latar belakang halaman utama aplikasi, icon, dan tampilan slide galeri foto sesuai dengan preferensi Anda.</p>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-success text-white">
                                Profile Aplikasi
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="appName" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="appName" value="Universitas Mandan Koding">
                                    </div>
                                    <div class="mb-3">
                                        <label for="appLogo" class="form-label">Logo</label>
                                        <input type="file" class="form-control" id="appLogo">
                                    </div>
                                    <img src="mandan-koding-logo.png" alt="Logo Preview" class="logo-preview mb-3">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-success text-white">
                                Image slider
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-3">
                                    <span>Slider halaman utama <a href="#">Lihat</a></span>
                                    <button class="btn btn-primary btn-sm">Tambah Gambar</button>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Nama Gambar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
@endsection

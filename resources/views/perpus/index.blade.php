@extends('perpus.layouts.main')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/perpus/index.css') }}">

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="image-container">
                <img src="{{ asset('assets/images/home.jpg') }}" alt="Library Bookshelves">
                <div class="overlay">Koleksi Buku</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="collections">
                <h4>Koleksi</h4>
                <p>Koleksi 5 Tahun terakhir:</p>
                <ul>
                    <li><a href="#">Tahun 2017</a></li>
                    <li><a href="#">Tahun 2013</a></li>
                    <li><a href="#">Tahun 2012</a></li>
                    <li><a href="#">Tahun 2009</a></li>
                    <li><a href="#">Tahun 2008</a></li>
                </ul>
                <button class="search-button">Cari Buku <i class="ti ti-search"></i></button>
            </div>
        </div>
    </div>
</div>

@endsection

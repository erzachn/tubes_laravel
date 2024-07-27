@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('storage/' . $film->image) }}" class="img-fluid" alt="{{ $film->title }}">
        </div>
        <div class="col-md-6">
            <h1>{{ $film->title }}</h1>
            <p><strong>Genre:</strong> {{ $film->genre }}</p>
            <p><strong>Deskripsi:</strong> {{ $film->description }}</p>
            <p><strong>Durasi:</strong> {{ $film->duration }} menit</p>
            <p><strong>Jadwal Tayang:</strong> {{ $film->schedule }}</p>
            <p><strong>Tanggal Tayang:</strong> {{ \Carbon\Carbon::parse($film->release_date)->format('d-m-Y') }}</p>
            <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3">Kembali ke Daftar Film</a>
            <a href="{{ route('tickets.create', $film->id) }}" class="btn btn-primary mt-3">Pesan Tiket</a>
        </div>
    </div>
</div>
@endsection

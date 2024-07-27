@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Sistem Manajemen Perpustakaan</h1>

    <div class="row">
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
    </div>
</div>
@endsection

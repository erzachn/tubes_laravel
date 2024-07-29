<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();
        return view('films.index', compact('films'));
    }

    public function create()
    {
        if (auth()->check() && auth()->user()->is_admin) {
            # code...
            return view('admin.films.create');
        }
        else {
            return redirect()->route('films.index');
        }
    }

    public function show($id)
    {
        $film = Film::findOrFail($id);
        return view('films.show', compact('film'));
    }

    public function destroy($id)
    {
        // Cari film berdasarkan ID
        $film = Film::findOrFail($id);

        // Hapus film
        $film->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('films.index')->with('success', 'Film berhasil dihapus.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'description' => 'required|string',
            'duration' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'schedule' => 'required|string'
        ]);

        // Menyimpan gambar
        $imagePath = $request->file('image')->store('images', 'public');

        // Membuat film baru
        Film::create([
            'title' => $request->title,
            'genre' => $request->genre,
            'description' => $request->description,
            'duration' => $request->duration,
            'release_date' => $request->release_date,
            'image' => $imagePath, // Simpan path gambar
            'schedule' => $request->schedule,
        ]);

        return redirect()->route('films.index')->with('success', 'Film berhasil ditambahkan!');
    }
}

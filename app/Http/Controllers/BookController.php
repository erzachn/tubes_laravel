<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index()
    {
        $films = Film::all();
        return view('books.index', compact('films'));
    }

    public function create()
    {
        return view('admin.books.create');
    }

    public function show($id)
    {
        $film = Film::findOrFail($id);
        return view('books.show', compact('film'));
    }

    public function destroy($id)
    {
        // Cari film berdasarkan ID
        $film = Film::findOrFail($id);

        // Hapus film
        $film->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('books.index')->with('success', 'Film berhasil dihapus.');
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

        return redirect()->route('books.index')->with('success', 'Film berhasil ditambahkan!');
    }
}

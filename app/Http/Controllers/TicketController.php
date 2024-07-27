<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function create(Film $film)
    {
        return view('tickets.create', compact('film'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'film_id' => 'required|exists:films,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Simpan tiket
        Ticket::create([
            'film_id' => $request->film_id,
            'quantity' => $request->quantity,
            'user_id' => auth()->id(),
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('my-tickets');
    }

    public function index()
    {
        // Ambil tiket yang dipesan oleh pengguna yang sedang login
        // $tickets = Ticket::where('user_id', Auth::id())->get();

        // return view('tickets.index', compact('tickets'));
        return view('perpus.buku');
    }

    public function destroy($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();

        return redirect()->route('my-tickets')->with('success', 'Tiket berhasil dihapus.');
    }
}

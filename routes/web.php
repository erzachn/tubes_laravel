<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\RegisterController;

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Route::get('/logout', function() {
//     Auth::logout();
//     return 'logout';
// })->name('logout');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', [BookController::class, 'index'])->name('books.index');
Route::get('/tickets/create/{film}', [TicketController::class, 'create'])->middleware('auth')->name('tickets.create');
Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');

Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');

Route::get('/my-books', [TicketController::class, 'index'])->middleware('auth')->name('my-books');

Route::delete('/tickets/{id}', [TicketController::class, 'destroy'])->name('tickets.destroy');

Route::get('/admin/films/create', [BookController::class, 'create'])->middleware('auth')->name('films.create');
Route::post('/admin/films', [BookController::class, 'store'])->name('books.store');


Route::get('/admin/tickets', [AdminController::class, 'index'])->name('admin.tickets');

Route::delete('/films/{id}', [BookController::class, 'destroy'])->name('books.destroy');


// Perpus
Route::get('/perpus', function() {return view('perpus.index');})->name('perpus');

// Login
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// END Login

Route::get('/perpus/buku', function() {return view('perpus.buku');});
Route::get('/perpus/caribuku', function() {return view('perpus.caribuku', ['films' => []]);});
Route::get('/perpus/bukupengunjung', function() {return view('perpus.bukupengunjung');});
Route::get('/perpus/admin', function() {return view('perpus.admin');});
Route::get('/perpus/setadmin', function() {return view('perpus.setadmin');});
Route::get('/perpus/crewadmin', function() {return view('perpus.crewadmin');});
Route::get('/perpus/lapinjamadmin', function() {return view('perpus.lapinjamadmin');});
Route::get('/perpus/databukuadmin', function() {return view('perpus.databukuadmin');});
Route::get('/perpus/peminjamanadmin', function() {return view('perpus.peminjamanadmin');});

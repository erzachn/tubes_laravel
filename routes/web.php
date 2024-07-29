<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
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

Route::get('/', [FilmController::class, 'index'])->name('films.index');
Route::get('/tickets/create/{film}', [TicketController::class, 'create'])->middleware('auth')->name('tickets.create');
Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');

Route::get('/films/{id}', [FilmController::class, 'show'])->name('films.show');

Route::get('/my-tickets', [TicketController::class, 'index'])->middleware('auth')->name('my-tickets');

Route::delete('/tickets/{id}', [TicketController::class, 'destroy'])->name('tickets.destroy');

Route::get('/admin/films/create', [FilmController::class, 'create'])
    ->middleware('auth')
    ->name('films.create');
Route::post('/admin/films', [FilmController::class, 'store'])->name('films.store');


Route::get('/admin/tickets', [AdminController::class, 'index'])->name('admin.tickets');

Route::delete('/films/{id}', [FilmController::class, 'destroy'])->name('films.destroy');
<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\rsanggotaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('web.home');
// })->name('home');

// Route::prefix('rs-anggota')->name('rs-anggota.')->group(function () {
//     Route::get('/', [RSAnggotaController::class, 'index'])->name('index');
//     Route::get('/{id}', [RSAnggotaController::class, 'show'])->name('show');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sambutan/{jenis}', [HomeController::class, 'sambutanDetail'])->name('sambutan.detail');
// Agenda routes
Route::prefix('agenda')->name('agenda.')->group(function () {
    Route::get('/', [AgendaController::class, 'index'])->name('index');
    Route::get('/undangan', [AgendaController::class, 'undangan'])->name('undangan');
    Route::get('/stream-pdf', [AgendaController::class, 'streamPdf'])->name('stream-pdf');
});
// RS Anggota routes
Route::prefix('rs-anggota')->name('rs-anggota.')->group(function () {
    Route::get('/', [rsanggotaController::class, 'index'])->name('index');
    Route::get('/{id}', [rsanggotaController::class, 'show'])->name('show');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

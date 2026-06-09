<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini Anda dapat mendaftarkan web routes untuk aplikasi Anda.
|
*/

// Rute Frontend
Route::get('/', function () {
    $produks = \App\Models\Produk::where('status', 'aktif')->take(6)->get();
    return view('frontend.index', compact('produks'));
})->name('home');

Route::get('/tentang', function () {
    return view('frontend.tentang');
})->name('tentang');

Route::get('/produk', [ProdukController::class, 'index'])->name('frontend.produk');
Route::get('/galeri', [GaleriController::class, 'index'])->name('frontend.galeri');
Route::get('/kontak', [KontakController::class, 'create'])->name('kontak.create');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');

// Rute Admin (Middleware Auth)
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Produk Resource Routes
    Route::resource('produk', ProdukController::class);
    
    // Galeri Resource Routes
    Route::resource('galeri', GaleriController::class);
    
    // Kontak Routes
    Route::get('/kontak-admin', [KontakController::class, 'index'])->name('kontak.index');
    Route::get('/kontak-admin/{kontak}', [KontakController::class, 'show'])->name('kontak.show');
    Route::delete('/kontak-admin/{kontak}', [KontakController::class, 'destroy'])->name('kontak.destroy');
});

// Auth Routes (Jika menggunakan Laravel Breeze atau built-in auth)
require __DIR__ . '/auth.php';

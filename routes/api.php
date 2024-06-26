<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\BarangController;
use App\Http\Controllers\Api\TransaksiController;

// register
Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');
// login
Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');
// logout
Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// CRUD LEVEL
Route::get('levels', [LevelController::class, 'index']);
Route::post('levels', [LevelController::class, 'store']);
Route::get('levels/{level}', [LevelController::class, 'show']);
Route::put('levels/{level}', [LevelController::class, 'update']);
Route::delete('levels/{level}', [LevelController::class, 'destroy']);
// CRUD USER
Route::get('users', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::get('users/{user}', [UserController::class, 'show']);
Route::put('users/{user}', [UserController::class, 'update']);
Route::delete('users/{user}', [UserController::class, 'destroy']);
// CRUD KATEGORI
Route::get('kategori', [KategoriController::class, 'index']);
Route::post('kategori', [KategoriController::class, 'store']);
Route::get('kategori/{kategori}', [KategoriController::class, 'show']);
Route::put('kategori/{kategori}', [KategoriController::class, 'update']);
Route::delete('kategori/{kategori}', [KategoriController::class, 'destroy']);
// CRUD BARANG
Route::get('barang', [BarangController::class, 'index']);
Route::post('barang', [BarangController::class, 'store']);
Route::get('barang/{barang}', [BarangController::class, 'show']);
Route::put('barang/{barang}', [BarangController::class, 'update']);
Route::delete('barang/{barang}', [BarangController::class, 'destroy']);

// REGISTER 1 JOBSHEET 11
Route::post('/register1', App\Http\Controllers\Api\RegisterController::class)->name('register1');

// CRUD TRANSAKSI
Route::get('transaksi', [TransaksiController::class, 'index']);
Route::post('transaksi', [TransaksiController::class, 'store']);
Route::get('transaksi/{transaksi}', [TransaksiController::class, 'show']);
Route::put('transaksi/{transaksi}', [TransaksiController::class, 'update']);
Route::delete('transaksi/{transaksi}', [TransaksiController::class, 'destroy']);
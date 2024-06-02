<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// User Routes
Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/', [UserController::class, 'store']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::post('/list', [UserController::class, 'list']);
});

// Level Routes
Route::prefix('level')->group(function () {
    Route::get('/', [LevelController::class, 'index'])->name('level.index');
    Route::get('/create', [LevelController::class, 'create'])->name('level.create');
    Route::post('/', [LevelController::class, 'store']);
    Route::get('/{id}/edit', [LevelController::class, 'edit'])->name('level.edit');
    Route::put('/{id}', [LevelController::class, 'update'])->name('level.update');
    Route::delete('/{id}', [LevelController::class, 'destroy'])->name('level.destroy');
});

// Kategori Routes
Route::prefix('kategori')->group(function () {
    Route::get('/', [KategoriController::class, 'index']);
    Route::get('/create', [KategoriController::class, 'create'])->name('kategori.create');
    Route::post('/', [KategoriController::class, 'store']);
});

// POS Routes
Route::resource('m_user', POSController::class);

// Welcome Routes
Route::get('/', [WelcomeController::class, 'index']);

// Authentication Routes
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');

// Middleware Groups
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:1']], function () {
        Route::resource('admin', AdminController::class);
    });

    Route::group(['middleware' => ['cek_login:2']], function () {
        Route::resource('manager', ManagerController::class);
    });
});

// API Routes
Route::post('/register', [App\Http\Controllers\Api\RegisterController::class, 'register'])->name('api.register');
Route::post('/login', [App\Http\Controllers\Api\LoginController::class, 'login'])->name('api.login');
Route::post('/logout', [App\Http\Controllers\Api\LogoutController::class, 'logout'])->name('api.logout');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

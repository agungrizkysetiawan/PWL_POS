<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;

//registrasi
Route :: post('/register', App\Http\Controllers\Api\RegisterController :: class)->name('register');

//login
Route :: post('/login', App\Http\Controllers\Api\LoginController :: class)->name('login');
Route::middleware('auth:api')->get('/user', function (Request $request) {
return $request->user();
});

//logout
Route :: post('/logout', App\Http\Controllers\Api\LogoutController :: class)->name('logout');
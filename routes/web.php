<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('exp', [
        "title" => "Home"
    ]);
});

Route::get('/admin', function () {
    return view('admin', [
        "title" => "Admin"
    ]);
});

Route::get('/editgame', function () {
    return view('editgame', [
        "title" => "Mobile Legends",
        "game" => "ML"
    ]);
});

Route::get('/daftaruser', function () {
    return view('daftaruser', [
        "title" => "Daftar Users"
    ]);
});

Route::get('/coba', function () {
    return view('coba', [
        "title" => "Mobile Legends",
        "game" => "ML"
    ]);
});

Route::get('/coba', function () {
    return view('transaksi', [
        "title" => "Alstore"
    ]);
});


Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
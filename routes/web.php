<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
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

Route::get('/ml', function () {
    return view('ml', [
        "title" => "Mobile Legends"
    ]);
});



Route::get('/ff', function () {
    return view('ff', [
        "title" => "Free Fire"
    ]);
});

Route::get('/cod', function () {
    return view('cod', [
        "title" => "Call Of Duty Mobile"
    ]);
});

Route::get('/pubg', function () {
    return view('pubg', [
        "title" => "PUBG Mobile"
    ]);
});

Route::get('/valo', function () {
    return view('valo', [
        "title" => "Valorant"
    ]);
});

Route::get('/genshin', function () {
    return view('genshin', [
        "title" => "Genshin Impact"
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
        "title" => "Daftar Users",
        'list' => User::all()
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
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

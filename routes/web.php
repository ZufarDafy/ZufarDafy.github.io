<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TopUpController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Produk;
use App\Models\Game;
use App\Http\Controllers\PaymentController;


Route::get('/about', function () {
    return view('about', [
        "name" => "Muhammad Zufar Dafy",
        "email" => "dafyluck@gmail.com",
        "image" => "ML.png",
        'title' => 'About'
    ]);
});

Route::get('/produks', [ProdukController::class,'index']);
Route::get('produks/{produk}',  [ProdukController::class,'show']);

Route::get('/games', function(){
    return view('games', [
        'title' => 'Daftar Game',
        'active' => 'games',
        'games' => Game::all()
    ]);
});

Route::get('/games/{game:slug}', function(Game $game){
    return view('produks', [
        'title' => "Produk Game : $game->nama",
        'active' => 'games',
        'produks' => $game->produks->load(['game', 'user']),
    ]);
});

Route::get('/users/{user:username}', function(User $user){
    return view('game', [
        'title' => "User : $user->name",
        'produks' => $user->produk->load('game', 'user'),
    ]);
});

Route::get('/dashboard', function(){
    return view('dashboard.index');
});


Route::resource('/dashboard/produks', DashboardPostController::class);


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

Route::get('/editgame/Admin', function () {
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

Route::get('/transaksi', function () {
    return view('transaksi', [
        "title" => "Transaksi"
    ]);
});

Route::get('/cobaedit', function () {
    return view('cobaedit', [
        "title" => "Mobile Legends",
        "game" => "ML"
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/ml', [ProdukController::class, 'index']);
Route::get('/ff', [ProdukController::class, 'indexFF']);
Route::get('/valo', [ProdukController::class, 'indexValorant']);
Route::get('/genshin', [ProdukController::class, 'indexGenshin']);
Route::get('/pubg', [ProdukController::class, 'indexPUBGMobile']);
Route::get('/cod', [ProdukController::class, 'indexCODMobile']);
Route::post('/top-up', [TopUpController::class, 'updateSaldo'])->name('topup.saldo');

Route::post('/', [PaymentController::class, 'store'])->name('payment.test');

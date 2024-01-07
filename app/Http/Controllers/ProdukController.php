<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        return view('produks', [
            'title' => 'Semua Produk',
            'active' => 'produks',
            // 'posts' => Produk::all()
            'produks' => Produk::latest()->get()
        ]);
    }

    public function show(Produk $produk)
    {
        return view('produk',[
            'title' => "Single Produk",
            'active' => 'produks',
            'produks' => $produk
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil data produk dari tabel 'produks' dengan kondisi nama_game adalah 'Mobile Legends' dan kategori adalah 'Item'
        $produks_item = DB::table('produks')
            ->where('nama_game', 'Mobile Legends')
            ->where('kategori', 'Item')
            ->get();
    
        // Ambil data produk dari tabel 'produks' dengan kondisi nama_game adalah 'Mobile Legends' dan kategori adalah 'Bundle'
        $produks_bundle = DB::table('produks')
            ->where('nama_game', 'Mobile Legends')
            ->where('kategori', 'Bundle')
            ->get();
    
        // Kembalikan view 'ml' dengan data produks_item, produks_bundle, title, dan activate
        return view('ml', [
            'produks_item' => $produks_item,
            'produks_bundle' => $produks_bundle,
            'title' => 'Mobile Legends',
            'activate' => 'mobile Legends',
        ]);
    }


    public function indexFF()
    {
        // Ambil data produk dari tabel 'produks' dengan kondisi nama_game adalah 'Free Fire'
        $produksFF = DB::table('produks')
            ->where('nama_game', 'Free Fire')
            ->get();

        // Kembalikan view 'ff' dengan data produks, title, dan activate
        return view('ff', [
            'produks' => $produksFF,
            'title' => 'Free Fire',
            'activate' => 'free Fire',
        ]);
    }

    public function indexValorant()
    {
        $produksValorant = DB::table('produks')
            ->where('nama_game', 'Valorant')
            ->get();

        return view('valo', [
            'produks' => $produksValorant,
            'title' => 'Valorant',
            'activate' => 'valorant',
        ]);
    }

    // Contoh untuk Genshin Impact
    public function indexGenshin()
    {
        // Ambil data produk dengan kategori 'Item' dari tabel 'produks' dengan kondisi nama_game adalah 'Genshin Impact'
        $produksItem = DB::table('produks')
            ->where('nama_game', 'Genshin Impact')
            ->where('kategori', 'Item')
            ->get();
    
        // Ambil data produk dengan kategori 'Bundle' dari tabel 'produks' dengan kondisi nama_game adalah 'Genshin Impact'
        $produksBundle = DB::table('produks')
            ->where('nama_game', 'Genshin Impact')
            ->where('kategori', 'Bundle')
            ->get();
    
        // Kembalikan view 'genshin' dengan data produksItem, produksBundle, title, dan activate
        return view('genshin', [
            'produksItem' => $produksItem,
            'produksBundle' => $produksBundle,
            'title' => 'Genshin Impact',
            'activate' => 'genshin-impact',
        ]);
    }

    // Contoh untuk PUBG Mobile
    public function indexPUBGMobile()
    {
        $produksPUBGMobile = DB::table('produks')
            ->where('nama_game', 'PUBG Mobile')
            ->get();

        return view('pubg', [
            'produks' => $produksPUBGMobile,
            'title' => 'PUBG Mobile',
            'activate' => 'pubg-mobile',
        ]);
    }

    // Contoh untuk Call of Duty Mobile
    public function indexCODMobile()
    {
        $produksCODMobile = DB::table('produks')
            ->where('nama_game', 'Call of Duty M')
            ->get();

        return view('cod', [
            'produks' => $produksCODMobile,
            'title' => 'Call of Duty Mobile',
            'activate' => 'cod-mobile',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        //
    }
}

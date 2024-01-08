<?php

namespace App\Http\Controllers;

use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil data produk dari tabel 'produks' dengan kondisi nama_game adalah 'Free Fire'
        $transaksis = DB::table('transaksis')->get();

        // Kembalikan view 'ff' dengan data produks, title, dan activate
        return view('ml', [
            'transaksis' => $transaksis,
            'title' => 'Mobile Legends',
            'activate' => 'Mobile Legends',
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
        DB::table('transaksis')->insert([
            'TglTrans' => Carbon::now(),
            'uname' => auth()->user()->username,
            'nama_game' => $request->input('namaGame'), // Ganti dengan nama game yang sesuai
            'nama_produk' => $request->input('namaProduk'), // Mengambil nilai dari form
            'harga' => $request->input('harga'), // Mengambil nilai dari form
            'uid' => $request->input('uid'),
            'proses' => 1,
        ]);

        $user = Auth::user();
        $newSaldo = $request->input('harga');


        $user->acoin -= $newSaldo;
        $user->save();

        return redirect()->back()->with('success', 'Transaksi berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(payment $payment)
    {
        //
    }
}

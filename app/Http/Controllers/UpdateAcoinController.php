<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateAcoinController extends Controller
{
    public function updateAcoin(Request $request)
    {
        // Validasi request jika diperlukan
        $request->validate([
            'jumlah-saldo' => 'required|numeric', // sesuaikan dengan kebutuhan
        ]);

        // Ambil jumlah saldo dari request
        $jumlahSaldo = $request->input('jumlah-saldo');

        // Lakukan pembaruan saldo untuk pengguna yang sedang terautentikasi
        auth()->user()->increment('acoin', $jumlahSaldo);

        // Kirim respons berhasil ke client (Anda dapat menyesuaikan respons sesuai kebutuhan)
        return response()->json(['message' => 'Saldo berhasil diperbarui']);
    }
}

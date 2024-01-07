<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopUpController extends Controller
{
    public function updateSaldo(Request $request)
    {
        $user = Auth::user();
        $newSaldo = $request->input('jumlah-saldo');


        $user->acoin += $newSaldo;
        $user->save();

        return redirect()->back()->with('success', 'Saldo berhasil diperbarui!');
    }
}

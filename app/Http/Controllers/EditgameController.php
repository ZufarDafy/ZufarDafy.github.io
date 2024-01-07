<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Produk;
use Illuminate\Http\Request;

class EditgameController extends Controller
{
    public function show($game_id){
        // dd(Produk::Firstwhere('game_id', $game_id)->Game->name);
        // dd(Produk::find($game_id)->Game->name);
        return view('editgame',[
            // 'title' => Produk::find($game_id)->Game->name,
            'title' => Produk::Firstwhere('game_id', $game_id)->Game->name,
            'produk'=> Produk::all(),
            'game_id'=>$game_id
        ]);

    }

    public function index()
    {        
    return view('admin', [
        "title" => "Admin"
    ]);
    }
}

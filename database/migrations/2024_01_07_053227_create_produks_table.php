<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id('IdProduk');
            $table->string('nama_game', 50);
            $table->foreignId('game_id')->constrained('games', 'IdGame');
            $table->string('nama_produk', 50);
            $table->integer('harga');
            $table->timestamps();
        });

        // Data Migrasi
        DB::table('produks')->insert([
            'nama_game' => 'Nama Game 1',
            'game_id' => 1, // Sesuaikan dengan ID game yang sudah ada
            'nama_produk' => 'Produk 1',
            'harga' => 50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('produks');
    }
};

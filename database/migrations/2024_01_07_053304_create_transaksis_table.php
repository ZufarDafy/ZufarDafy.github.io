<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id('IdTrans');
            $table->timestamp('TglTrans');
            $table->foreignId('user_id')->constrained('users', 'IdUser');
            $table->string('UID', 50);
            $table->foreignId('game_id')->constrained('games', 'IdGame');
            $table->foreignId('produk_id')->constrained('produks', 'IdProduk');
            $table->integer('harga');
            $table->enum('proses', ['berhasil', 'gagal']);
            $table->timestamps();
        });

        // Data Migrasi
        DB::table('transaksis')->insert([
            'TglTrans' => now(),
            'user_id' => 1, // Sesuaikan dengan ID user yang sudah ada
            'UID' => 'UID1',
            'game_id' => 1, // Sesuaikan dengan ID game yang sudah ada
            'produk_id' => 1, // Sesuaikan dengan ID produk yang sudah ada
            'harga' => 50,
            'proses' => 'berhasil',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
};

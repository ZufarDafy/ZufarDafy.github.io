<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id('IdGame');
            $table->string('nama_game', 50);
            $table->timestamps();
        });

        // Data Migrasi
        DB::table('games')->insert([
            'nama_game' => 'Nama Game 1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('games');
    }
};

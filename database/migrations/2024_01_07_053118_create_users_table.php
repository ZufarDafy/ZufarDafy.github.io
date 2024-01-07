<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('IdUser');
            $table->string('uname', 50);
            $table->string('pass', 50);
            $table->enum('status', ['admin', 'user']);
            $table->integer('cash');
            $table->timestamps();
        });

        // Data Migrasi
        DB::table('users')->insert([
            'uname' => 'admin',
            'pass' => 'admin123',
            'status' => 'admin',
            'cash' => 1000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};

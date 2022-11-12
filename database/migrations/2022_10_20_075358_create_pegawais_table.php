<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nik');
            $table->string('name');
            $table->string('agama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('foto');
            $table->string('pendidikan_terakhir');
            $table->string('alamat');
            $table->string('telp');
            $table->string('email');
            $table->string('status_pernikahan');
            $table->boolean('status_akun');
            $table->date('tanggal_gabung');
            $table->date('tanggal_keluar');
            $table->bigInteger('atasan_id')->nullable();
            $table->bigInteger('jabatan_id')->nullable();
            $table->bigInteger('departmen_id')->nullable();
            $table->bigInteger('cabang_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawais');
    }
}

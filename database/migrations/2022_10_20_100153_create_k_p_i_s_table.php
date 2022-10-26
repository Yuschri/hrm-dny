<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKPISTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('k_p_i_s', function (Blueprint $table) {
            $table->id();
            $table->string('target');
            $table->string('deskripsi_nilai');
            $table->bigInteger('bobot');
            $table->bigInteger('nilai');
            $table->bigInteger('kpi_master_id');
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
        Schema::dropIfExists('k_p_i_s');
    }
}

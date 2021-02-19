<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWilayahKabupatenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wilayah_kabupaten', function (Blueprint $table) {
            $table->char('id', 4)->primary();
            $table->char('provinsi_id', 2);
            $table->string('nama', 30);

            $table->foreign('provinsi_id')->references('id')->on('wilayah_provinsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wilayah_kabupaten');
    }
}

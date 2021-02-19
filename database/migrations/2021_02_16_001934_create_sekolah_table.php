<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSekolahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekolah', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->char('npsn', 8)->unique();
            $table->string('nama_sekolah', 60);
            $table->enum('status_sekolah', ['Negeri', 'Swasta']);
            $table->unsignedTinyInteger('jenjang_id');
            $table->string('notelp', 15)->unique();
            $table->string('alamat', 100);
            $table->char('kecamatan_id', 7);
            $table->char('kabupaten_id', 4);
            $table->char('provinsi_id', 2);
            $table->timestamps();

            $table->foreign('jenjang_id')->references('id')->on('jenjang_pendidikan');
            $table->foreign('kecamatan_id')->references('id')->on('wilayah_kecamatan');
            $table->foreign('kabupaten_id')->references('id')->on('wilayah_kabupaten');
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
        Schema::dropIfExists('sekolah');
    }
}

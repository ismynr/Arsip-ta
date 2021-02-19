<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKirimanSuratAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // surat admin yang ditujuan kepada operator W/D
        Schema::create('kiriman_surat_admin', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->text('keterangan');
            $table->enum('tujuan_opw', [1, 0])->nullable();
            $table->enum('tujuan_opd', [1, 0])->nullable();
            $table->enum('tujuan_anggota', [1, 0])->nullable();
            $table->unsignedInteger('surat_keluar_id');
            $table->timestamps();

            $table->foreign('surat_keluar_id')->references('id')->on('surat_keluar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kiriman_surat_admin');
    }
}

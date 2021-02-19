<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKirimanSuratOperatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // surat operator W/D yang ditujuan untuk admin
        Schema::create('kiriman_surat_operator', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->unsignedSmallInteger('operator_id');
            $table->text('keterangan');

            // include data surat yang nantinya jika dibaca 
            // akan masuk ke surat masuknya Admin
            $table->string('no_surat', 30);
            $table->date('tgl_surat');
            $table->string('perihal', 130);
            $table->text('lampiran');
            $table->timestamps();

            $table->foreign('operator_id')->references('id')->on('operator');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kiriman_surat_operator');
    }
}

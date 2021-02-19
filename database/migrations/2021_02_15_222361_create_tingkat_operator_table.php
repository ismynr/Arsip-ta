<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTingkatOperatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tingkat_operator', function (Blueprint $table) {
            $table->char('provinsi_id', 2);
            $table->char('kabupaten_id', 4)->nullable();
            $table->unsignedSmallInteger('operator_id')->nullable();

            $table->foreign('provinsi_id')->references('id')->on('wilayah_provinsi');
            $table->foreign('kabupaten_id')->references('id')->on('wilayah_kabupaten');
            $table->foreign('operator_id')->references('id')->on('operator')
                            ->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tingkat_operator');
    }
}

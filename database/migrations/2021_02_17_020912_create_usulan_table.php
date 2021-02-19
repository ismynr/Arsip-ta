<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsulanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usulan', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->foreignId('anggota_id')->constrained('anggota');
            $table->string('judul', 150);
            $table->text('isi');
            $table->enum('confirm_opw', [1, 0])->nullable();
            $table->enum('confirm_opd', [1, 0])->nullable();
            $table->enum('confirm_admin', [1, 0])->nullable();
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
        Schema::dropIfExists('usulan');
    }
}

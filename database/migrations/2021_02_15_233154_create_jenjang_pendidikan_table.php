<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenjangPendidikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenjang_pendidikan', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('jenjang', 5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenjang_pendidikan');
    }
}

/*
paud (TK, Kelompok Bermain, Taman Penitipan Anak)
sd
slta (SMA)
sltp (SMP)


paud (RA)
mi
mts
ma
 */
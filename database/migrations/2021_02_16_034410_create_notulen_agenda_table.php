<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotulenAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notulen_agenda', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->unsignedInteger('agenda_id');
            $table->text('pembahasan');
            $table->string('notulis', 30);
            $table->text('kehadiran_path'); //more
            $table->text('dokumentasi_path'); //more
            $table->timestamps();

            $table->foreign('agenda_id')->references('id')->on('agenda_kegiatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notulen_agenda');
    }
}

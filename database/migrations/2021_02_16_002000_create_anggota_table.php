<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->char('no_anggota', 19)->unique();
            $table->char('nik', 16)->unique();
            $table->char('nuptk', 16)->unique();
            $table->string('nama', 40);
            $table->string('gelar', 20);
            $table->enum('jk', ['L', 'P']);
            $table->string('agama', 20);
            $table->string('tempat_lahir', 35);
            $table->date('tgl_lahir');
            $table->string('nohp', 15)->unique();
            $table->string('rt_rw', 7);
            $table->string('desa', 30);
            $table->char('kecamatan_id', 7);
            $table->char('kabupaten_id', 4);
            $table->char('provinsi_id', 2);
            $table->unsignedTinyInteger('status_id');
            $table->string('penghasilan_bln', 9);
            $table->string('jabatan', 30);
            $table->unsignedTinyInteger('bank_id');
            $table->string('cabang_bank', 40);
            $table->string('nama_rekening', 40);
            $table->string('norek', 20);
            $table->string('ktp_path', 100);
            $table->string('ijasah_path', 100);
            $table->string('photo_path', 100);
            $table->unsignedInteger('sekolah_id');
            $table->enum('operator_sekolah', [1, 0]);
            $table->timestamps();

            $table->foreign('kecamatan_id')->references('id')->on('wilayah_kecamatan');
            $table->foreign('kabupaten_id')->references('id')->on('wilayah_kabupaten');
            $table->foreign('provinsi_id')->references('id')->on('wilayah_provinsi');
            $table->foreign('status_id')->references('id')->on('status_guru');
            $table->foreign('bank_id')->references('id')->on('bank');
            $table->foreign('sekolah_id')->references('id')->on('sekolah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggota');
    }
}

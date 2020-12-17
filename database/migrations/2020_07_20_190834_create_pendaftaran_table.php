<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('email');
            $table->string('sekolah');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('warganegara');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('alamat');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('no_hp');
            $table->string('alamat_ortu');
            $table->string('kip');
            $table->string('pkh');
            $table->text('foto');
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
        Schema::dropIfExists('pendaftaran');
    }
}

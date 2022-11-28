<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftars', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->integer('no_hp');
            $table->date('tgl_lahir');
            $table->string('kampus');
            $table->string('prodi');
            $table->string('kelas');
            $table->string('status');
            $table->string('rekomendasi');
            $table-> foreign('id_prodi')->references('id')->on('prodis');
            $table->bigInteger('id_prodi')->unsigned();
            $table-> foreign('no_pendaftar')->references('id')->on('login_mhs_adms');
            $table->bigInteger('no_pendaftar')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftars');
    }
};

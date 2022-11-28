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
        Schema::create('login_mhs_adms', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password_adm');
            $table->integer('no_pendaftar');
            $table->string('password_mhs');
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
        Schema::dropIfExists('login_mhs_adms');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Transaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->string('nama_team');
            $table->string('logo_team');
            $table->string('bukti_tf')->nullable();
            $table->enum('status', ['pending', 'waiting', 'valid'])->default('pending');
            $table->unsignedBigInteger('id_tournament');
            $table->unsignedBigInteger('id_penyelenggara');
            $table->unsignedBigInteger('id_peserta');
            $table->timestamps();

            $table->foreign('id_tournament')->references('id_tournament')->on('tournament')->nullOnDelete()->onUpdate('cascade');
            $table->foreign('id_penyelenggara')->references('id_user')->on('user')->nullOnDelete()->onUpdate('cascade');
            $table->foreign('id_peserta')->references('id_user')->on('user')->nullOnDelete()->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('transaksi');
    }
}

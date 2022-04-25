<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pemenang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemenang', function (Blueprint $table) {
            $table->id('id_pemenang');
            $table->string('judul')->unique();
            $table->string('slug')->unique();
            $table->longText('isi');
            $table->string('thumbnail');
            $table->foreignId('id_admin')->references('id_user')->on('user');
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
        //
        Schema::dropIfExists('pemenang');
    }
}

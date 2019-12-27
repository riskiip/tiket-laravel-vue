<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name_tiket');
            $table->string('harga_tiket');
            $table->string('jenis_tiket');
            $table->string('jumlah_tiket');
            $table->unsignedInteger('id_kategori');
            $table->foreign('id_kategori')->references('id')->on('categoris')->onDelete('cascade');
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
        Schema::dropIfExists('tikets');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemout', function (Blueprint $table) {
            $table->id();
            $table->string('nama_User');
            $table->integer('id_barang');
            $table->string('nama_barang');
            $table->integer('barang_keluar');
            $table->string('barang_tujuan');
            $table->string('status');
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
        Schema::dropIfExists('itemout');
    }
}

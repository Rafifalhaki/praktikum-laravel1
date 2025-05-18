<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParamediksTable extends Migration
{
    public function up()
    {
        Schema::create('paramediks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('gender', ['L', 'P']);
            $table->string('tmp_lahir');
            $table->string('kategori');
            $table->string('alamat');
            $table->unsignedBigInteger('unit_kerja_id');
            $table->timestamps();

            $table->foreign('unit_kerja_id')->references('id')->on('unit_kerjas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('paramediks');
    }
}
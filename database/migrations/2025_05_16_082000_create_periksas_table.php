<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriksasTable extends Migration
{
    public function up()
{
    Schema::create('periksas', function (Blueprint $table) {
        $table->engine = 'InnoDB';

        $table->id();
        $table->date('tanggal');
        $table->integer('berat');
        $table->integer('tinggi');
        $table->date('tgl_lahir');
        $table->string('keterangan');

        // foreignId() otomatis membuat unsignedBigInteger dan constraint
        $table->foreignId('pasien_id')
              ->constrained('pasiens')
              ->cascadeOnDelete();

        $table->foreignId('dokter_id')
              ->constrained('paramediks')
              ->cascadeOnDelete();

        $table->timestamps();
    });
}

}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    use HasFactory;

    protected $table = 'periksas';
    protected $fillable = ['tanggal', 'berat', 'tinggi', 'tgl_lahir', 'keterangan', 'pasien_id', 'dokter_id'];
}
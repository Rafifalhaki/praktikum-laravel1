<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriksaSeeder extends Seeder
{
    public function run()
    {
        DB::table('periksas')->insert([
            [
                'tanggal' => '2025-05-16',
                'berat' => 60,
                'tinggi' => 165,
                'tgl_lahir' => '2000-01-01',
                'keterangan' => 'Sehat',
                'pasien_id' => 1,
                'dokter_id' => 1
            ],
        ]);
    }
}

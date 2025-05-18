<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParamedikSeeder extends Seeder
{
    public function run()
    {
        DB::table('paramediks')->insert([
            [
                'nama' => 'dr. Andi',
                'gender' => 'L',
                'tmp_lahir' => 'Makassar',
                'kategori' => 'Dokter',
                'alamat' => 'Jl. Sudirman',
                'unit_kerja_id' => 1
            ],
            // kamu bisa tambahkan data lain di sini
        ]);
    }
}

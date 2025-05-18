<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

DB::table('pasiens')->insert([
    [
        'nama' => 'Budi Santoso',
        'gender' => 'L',
        'tgl_lahir' => '1995-08-12',
        'alamat' => 'Jl. Kenanga No. 1',
    ],
    [
        'nama' => 'Siti Aminah',
        'gender' => 'P',
        'tgl_lahir' => '1990-03-24',
        'alamat' => 'Jl. Melati No. 10',
    ]
]);

    }
}

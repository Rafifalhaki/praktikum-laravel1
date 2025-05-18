<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitKerjaSeeder extends Seeder
{
    public function run()
    {
        DB::table('unit_kerjas')->insert([
            ['nama' => 'Puskesmas Induk'],
            ['nama' => 'Pustu'],
            ['nama' => 'Polindes'],
        ]);
    }
}

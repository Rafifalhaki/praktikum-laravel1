<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelurahanSeeder extends Seeder
{
    public function run()
    {
        DB::table('kelurahans')->insert([
            ['nama' => 'Kelurahan A', 'kec_id' => 1],
            ['nama' => 'Kelurahan B', 'kec_id' => 1],
            ['nama' => 'Kelurahan C', 'kec_id' => 2],
        ]);
    }
}

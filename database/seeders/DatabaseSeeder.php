<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seeder untuk User
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Panggil Seeder lainnya
        $this->call([
            KelurahanSeeder::class,
            UnitKerjaSeeder::class,
            ParamedikSeeder::class,
            PasienSeeder::class,
            PeriksaSeeder::class,
        ]);
    }
}

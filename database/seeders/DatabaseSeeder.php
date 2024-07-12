<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'nik' => '12345678',
            'name' => 'Danu Dwiki Laksana',
            'role' => 'pemeliharaan'
        ]);

        User::factory()->create([
            'nik' => '87654321',
            'name' => 'aqsha',
            'role' => 'karyawan'
        ]);
    }
}

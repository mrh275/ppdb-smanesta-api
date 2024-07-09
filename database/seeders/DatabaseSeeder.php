<?php

namespace Database\Seeders;

use App\Models\Biodata;
use App\Models\User;
use App\Models\Kelas;
use App\Models\ListSekolahAsal;
use App\Models\TahunLulus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory()->create([
            'name' => 'Administrator',
            'username' => 'administrator',
            'password' => Hash::make('dnezast'),
            'role' => 'admin',
            'created_at' => now(),
        ]);
        User::factory()->create([
            'name' => 'Verifikator',
            'username' => 'advisor',
            'password' => Hash::make('smanesta'),
            'role' => 'advisor',
            'created_at' => now(),
        ]);
        User::factory()->create([
            'name' => 'Operator',
            'username' => 'operator',
            'password' => Hash::make('operator'),
            'role' => 'operator',
            'created_at' => now(),
        ]);

        // Kelas::factory(10)->create();
        // TahunLulus::factory(4)->create();
        // ListSekolahAsal::factory(12)->create();
        // Biodata::factory(100)->create();
    }
}

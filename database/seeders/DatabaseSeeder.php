<?php

namespace Database\Seeders;

use App\Models\General;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
        ]);

        // General
        General::factory()->createMany([
            [
                'dni' => '87654321',
                'nombres' => 'Juan Pérez',
            ],
            [
                'dni' => '12345678',
                'nombres' => 'María López',
            ],
            [
                'dni' => '11223344',
                'nombres' => 'Carlos Ruiz',
            ],
        ]);
    }
}

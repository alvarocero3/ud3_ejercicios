<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alumnos')->insert([
            ['nombre' => 'Juan Perez', 'email' => 'juan@example.com'],
            ['nombre' => 'Ana Gomez', 'email' => 'ana@example.com'],
        ]);
    }
}

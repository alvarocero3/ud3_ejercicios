<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('asignaturas')->insert([
            ['nombre' => 'Matemáticas', 'descripcion' => 'Curso de matemáticas básicas'],
            ['nombre' => 'Historia', 'descripcion' => 'Curso de historia mundial'],
        ]);
    }
}

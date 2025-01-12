<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notas')->insert([
            ['alumno_id' => 1, 'asignatura_id' => 1, 'nota' => 85],
            ['alumno_id' => 2, 'asignatura_id' => 2, 'nota' => 90],
        ]);
    }
}

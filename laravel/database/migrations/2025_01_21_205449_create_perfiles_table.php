<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilesTable extends Migration
{
    public function up()
    {
        Schema::create('perfiles', function (Blueprint $table) {
            $table->id(); // Clave primaria (PK)
            $table->foreignId('usuario_id')->constrained('alumnos')->onDelete('cascade'); // Clave foránea (FK)
            $table->text('biografia');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('perfiles');
    }
}

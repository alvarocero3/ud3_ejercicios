<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // Clave primaria (PK)
            $table->foreignId('usuario_id')->constrained('alumnos')->onDelete('cascade'); // Clave foránea (FK)
            $table->string('titulo');
            $table->text('contenido');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}


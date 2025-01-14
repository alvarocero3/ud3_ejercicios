<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $fillable = ['nombre', 'descripcion'];

    public function notas()
    {
        return $this->hasMany(Nota::class);
    }
}

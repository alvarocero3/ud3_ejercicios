<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = ['nombre', 'email'];

    public function notas()
    {
        return $this->hasMany(Nota::class);
    }

    public function perfil()
    {
        return $this->hasOne(Perfil::class, 'usuario_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'usuario_id');
    }

}

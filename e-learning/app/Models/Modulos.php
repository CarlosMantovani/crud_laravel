<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulos extends Model
{
    use HasFactory;

    public function relCursos(){
        return $this->hasOne('App\Models\Curso', 'curso_id', 'id');
    }
}

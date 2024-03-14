<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $fillable=[
        'nome_curso',
        'quantidade_modulos',
        'quantidade_aulas',
        'titulo',
        'descricao',
    ];
    protected $casts = [
        'quantidade_modulos' => 'integer',
        'quantidade_aulas' => 'integer',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $fillable=[
        'nome_curso',
        'titulo',
        'descricao',
    ];
   /* protected $casts = [
        'quantidade_modulos' => 'integer',
        'quantidade_aulas' => 'integer',
    ];*/
    public function relModulos(){
        return $this->hasMany('App\Models\Modulos', 'id_modulo');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Modulo;

class Curso extends Model
{
    use HasFactory;
    protected $fillable=[
        'nome_curso',
        'titulo',
        'descricao',
        'imagem'
    ];
   
   
    public function relModulo(): HasMany{
    
        return $this->hasMany(Modulo::class);
    }
}

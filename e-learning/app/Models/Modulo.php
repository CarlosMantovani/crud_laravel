<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\Curso;
class Modulo extends Model
{
    use HasFactory;
    protected $fillable=[
        'curso_id',
        'titulo',

    ];

    public function relCurso(): BelongsTo
    {
        return $this->belongsTo(Curso::class,'curso_id', 'id');
    }


    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Modulo;
class Aula extends Model
{
    use HasFactory;
    protected $fillable=[
        'modulos_id',
        'descricao',
        'link',

    ];
    public function relModuloAula(): BelongsTo
    {
        return $this->belongsTo(Modulo::class,'modulos_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class perfil extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'email',
        'telefone',
        'endereco',
        'valorHora',
    ];
}

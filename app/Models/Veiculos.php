<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veiculos extends Model
{
    protected $fillable = [
        'id',
        'marca',
        'modelo',
        'placa',
        'renavam',
        'chassi',
        'kmAtual',
    ];
}

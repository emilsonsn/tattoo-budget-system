<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $table = 'orcamento';

    public $fillable = [
        'nome',
        'email',
        'celular',
        'instagram',
        'estado',
        'cidade',
        'tipo_desenho',
        'local',
        'largura',
        'altura',
        'cicatriz',
        'remocao',
        'cores',
        'valor'
    ];
}

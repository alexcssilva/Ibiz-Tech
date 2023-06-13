<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lic extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_lic',
        'nu_fase',
        'nu_edital',
        'modalidade',
        'data_abertura',
        'nome_licitador',
        'cnpj_licitador',
        'prioridade',
        'objeto',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}

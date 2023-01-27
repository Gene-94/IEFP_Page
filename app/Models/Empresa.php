<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresa extends Model
{
    use HasFactory;

    use SoftDeletes;
    
    protected $fillable = [
        'nome',
        'nif',
        'morada',
        'cod_postal',
        //'nr_trabalhadores_id'
    ];






    protected $table = 'empresas';

    public function nrTrabalhadores(){
        return $this->belongsTo(NrTrabalhadores_Opcao::class, 'nr_trabalhadores_id')->value('nome_opcao');
    }

    public function formandos(){
        return $this->hasMany(Formando::class, 'empresa_id');
    }
}

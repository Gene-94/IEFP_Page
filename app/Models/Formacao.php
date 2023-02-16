<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Formacao extends Model
{
    use HasFactory;

    //use SoftDeletes;
    
    protected $fillable = [
        'nome',
        'descricao',
        'regime_presenca_id',
        'regime_horario_id',
        'duracao_horas',
        'data_inicio_prevista'
    ];






    protected $table = 'formacoes';

    public function inscricoes(){
        return $this->hasMany(Inscricao::class, 'formacao_id');
    }

    public function regimePresenca(){
        return $this->belongsTo(RegimePresenca::class, 'regime_presenca_id');
    }

    public function regimeHorario(){
        return $this->belongsTo(RegimeHorario::class, 'regime_horario_id');
    }

    public function coordenador(){
        return $this->belongsTo(Coordenador::class, 'coordenador_id');
    }

    public function requisitos(){
        return $this->belongsToMany(Requisito::class);
    }

    
}

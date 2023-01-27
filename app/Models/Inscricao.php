<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inscricao extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        //'formando_id',
        //'formando_id',
        'data_inscricao',
        'preferencia'
    ];



    protected $table = 'inscricoes';

    public function formando(){
        return $this->belongsTo(Formando::class, 'formando_id');
    }

    public function formacao(){
        return $this->belongsTo(Formacao::class, 'formacao_id');
    }

    public function requisitos(){
        return $this->belongsToMany(Formacao::class);
    }

    public function estado(){
        return $this->belongsTo(EstadosInscricao::class, 'id_estado');
    }
}

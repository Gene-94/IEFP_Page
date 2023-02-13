<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'nome'
    ];


    


    protected $table = 'requisitos';

    public function formacoes(){
        return $this->belongsToMany(Formacao::class);
    }

    public function inscricoes(){
        return $this->belongsToMany(Inscicao::class);
    }
}

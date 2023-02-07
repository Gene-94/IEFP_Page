<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NrTrabalhadores_Opcao extends Model
{
    use HasFactory;
    



    protected $fillable = [
        'nome_opcao'
    ];



    protected $table = 'nr_trabalhadores__opcoes';

    public function empresa(){
        return $this->hasMany(Empresa::class);
    }
}

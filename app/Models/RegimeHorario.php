<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegimeHorario extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'nome_regime'
    ];





    protected $table = 'regimes_horario';

    public function formacao(){
        return $this->hasMany(Formacao::class);
    }
}

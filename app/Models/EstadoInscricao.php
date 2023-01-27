<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoInscricao extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_estado'
    ];

    protected $table = 'estados_inscricao';

    public function inscricoes(){
        return $this->hasMany(Inscricao::class, 'id_estado');
    }
}

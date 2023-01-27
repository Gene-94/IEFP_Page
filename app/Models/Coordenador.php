<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coordenador extends Model
{
    use HasFactory;

    use SoftDeletes;
    
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'avatar_path'
    ];






    protected $table = 'coordenadores';

    public function formacoes(){
        return $this->hasMany(Formacao::class, 'coordenador_id');
    }

    public function inscricoes(){
        return $this->hasManyThrough(Inscricao::class, Formacao::class, 'coordenador_id', 'formacao_id');
    }

    public function formandos(){
        $formandos = collect();

        foreach ($this->inscricoes->get() as $inscricao) {
            $formandos = $formandos->merge($inscricao->formando);
        }
        return $formandos;
        // como filtrar os formandos por formação e estado da sua inscrição ???
    }

    public function utilizador(){
        return $this->belongsTo(User::class);
    }

    public function user() 
    { 
      return $this->morphOne(User::class, 'profile');
    }
}

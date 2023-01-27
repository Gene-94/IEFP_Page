<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilitacoes extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'nome_descritivo'
    ];





    protected $table = 'habilitacoes';

    public function user(){
        return $this->hasMany(Formando::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegimePresenca extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nome_regime'
    ];






    protected $table = 'regimes_presenca';

    public function formacao(){
        return $this->hasMany(Formacao::class);
    }
}

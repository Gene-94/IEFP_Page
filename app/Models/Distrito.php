<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nome'
    ];






    protected $table = 'distritos';

    public function concelhos(){
        return $this->hasMany(Concelho::class);
    }

    public function formandos(){
        return $this->hasManyThrough(Formandos::class, Concelhos::class, 'distrito_id', 'concelho_id');
    }
}

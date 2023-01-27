<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'nome'
    ];





    protected $table = 'paises';

    public function formando(){
        return $this->hasMany(Formando::class);
    }
}

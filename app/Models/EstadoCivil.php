<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
    ];


    protected $table = 'estados_civis';

    public function formando(){
        return $this->hasMany(Formando::class);
    }
}

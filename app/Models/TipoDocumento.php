<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    use HasFactory;
    


    protected $fillable = [
        'tipo',
    ];




    protected $table = 'tipos_documento';

    public function formando(){
        return $this->hasMany(Formando::class);
    }

}

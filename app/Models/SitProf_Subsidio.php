<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SitProf_Subsidio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'detalhes'
    ];

    protected $table = 'sit_prof_subsidios';

    public function formando(){
        return $this->hasMany(Formando::class);
    }
}

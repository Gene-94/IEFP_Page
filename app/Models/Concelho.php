<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concelho extends Model
{
    use HasFactory;


    protected $fillable = [
        'nome',
        'distrito_id'
    ];





    protected $table = 'concelhos';

    public function formando(){
        return $this->hasMany(Formando::class);
    }

    public function distrito(){
        return $this->belongsTo(Distrito::class, 'distrito_id');
    }
}

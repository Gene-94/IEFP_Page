<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsidio extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
    ];

    protected $table = 'subsidios';

    public function formando(){
        return $this->hasMany(Formando::class);
    }
}

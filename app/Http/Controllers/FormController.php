<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoDocumento;
use App\Models\Pais;

class FormController extends Controller
{
    function load_form(){

        return view('form.form', ['tiposDoc' => TipoDocumento::all(), 'paises' => Pais::all()]);
    }
}

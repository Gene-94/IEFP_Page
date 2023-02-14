<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoDocumento;
use App\Models\Pais;
use App\Models\EstadoCivil;
use App\Models\Distrito;
use App\Models\Concelho;

class FormController extends Controller
{
    function load_form(){

        return view('form.form', ['tiposDoc' => TipoDocumento::all(), 'paises' => Pais::all(), 'estadosCivis' => EstadoCivil::all(), "distritos" => Distrito::all(), "concelhos" => Concelho::all()]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoDocumento;
use App\Models\Pais;
use App\Models\EstadoCivil;
use App\Models\Distrito;
use App\Models\Concelho;
use App\Models\Habilitacoes;
use App\Models\NrTrabalhadores_Opcao;
use App\Models\Formacao;

class FormController extends Controller
{
    function load_form(){

        return view('form.form', 
        ['tiposDoc' => TipoDocumento::all(), 
        'paises' => Pais::all(), 
        'estadosCivis' => EstadoCivil::all(), 
        "distritos" => Distrito::all(), 
        "concelhos" => Concelho::all(),
        "habilitacoes" => Habilitacoes::all(),
        "nrTrabalhadores" => NrTrabalhadores_Opcao::all(),
        "formacoes" => Formacao::all(),
        ]);
    }

    function store_form(Request $request){

        $formando = $request->validate([
            "nome" => "",
            "email" => "",
            "tlm" => "",
            "nome" => "",
            "nome" => "",
            "nome" => "",
            "nome" => "",
            "nome" => "",
            "nome" => "",
            "nome" => "",
            "nome" => "",
            "nome" => "",
            "nome" => "",

        ]);
    }
}

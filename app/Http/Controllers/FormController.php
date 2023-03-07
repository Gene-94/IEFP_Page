<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\TipoDocumento;
use App\Models\Pais;
use App\Models\EstadoCivil;
use App\Models\Distrito;
use App\Models\Concelho;
use App\Models\Habilitacoes;
use App\Models\NrTrabalhadores_Opcao;
use App\Models\Formacao;
use App\Models\Formando;
use App\Models\Subsidio;

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
        "subsidios" => Subsidio::all(),
        ]);
    }

    function getFormacao($formacao_id){
        $formacao = Formacao::find($formacao_id);
        return response()->json([
        "regime_horario" => $formacao->regimeHorario->nome_regime,
        "regime_presenca" => $formacao->regimePresenca->nome_regime,
        "data_inicio" => $formacao->data_inicio_prevista,
        "duracao" => $formacao->duracao_horas,
        "descricao" => $formacao->descricao,
        "requisitos" => $formacao->requisitos->map(function($requisito){return $requisito->nome;}),
        ]);
    }

    function store_form(Request $request){

        $validateFormando = $request->validate([
            "nome" => "required|string|max:255",
            "email" => "required|email|unique:formandos,email|max:255",
            "telemovel" => "required|string|max:20",
            'data_nascimento' => 'required|date|before:today',
            'tipo_documento_id' => 'required|integer|exists:tipos_documento,id',
            'nr_documento' => 'required|string|max:50',
            'validade_documento' => 'required|date|after:today',
            'niss' => 'required|digits:11',
            'nif' => 'required|digits:9',
            'nacionalidade_id' => 'integer|exists:paises,id',
            'naturalidade_id' => 'integer|exists:paises,id',
            'morada' => 'required|string|max:255',
            'concelho_id' => 'required|integer|exists:concelhos,id',
            'habilitacoes_id' => 'required|integer|exists:habilitacoes,id',
            'estado_civil_id' => 'integer|exists:estados_civis,id',
            'area_curso' => 'nullable|string|max:255',
            'ano_conclusao' => 'nullable|integer|min:1950|max:2050', 
            'estabelecimento_enino' => 'nullable|string|max:255',
            'certificado' => 'file|mimes:pdf,jpg,jpeg,png',
            'emprego' => 'required|string|max:255',
            'subsidio_id' => 'integer|exists:subsidios,id',
            'ultima_proff' => 'nullable|string|max:255',
            'inicio_proff' => 'nullable|date|before:today',
            'fim_proff' => 'nullable|date|after:inicio_proff',
        ]);

        $empresa = $request->validate([
            'nome' => 'sometimes|required_with:nif,morada,cod_postal,nr_trabalhadores_id|string|max:255',
            'nif' => 'sometimes|required_with:nome,morada,cod_postal,nr_trabalhadores_id|digits:9',
            'morada' => 'nullable|string|max:255',
            'cod_postal' => 'nullable|string|max:10',
            'nr_trabalhadores_id' => 'sometimes|required_with:nome,nif,morada,cod_postal|integer|exists:nr_trabalhadores__opcoes,id',
        ]);

        $codPostal = $request->validate([
            'postal1' => 'required|digits:4',
            'postal2' => 'required|digits:3',
        ]);

        $validateUser = $request->validate([
            'email' => "nullable|required_with:password|email|unique:users,email|max:255",
            'password' => 'nullable|string|min:6',
            'password_confirmation' => 'nullable|string|min:6|same:password',
            //name = nome 
        ]);



        $codPostal = $codPostal['postal1']."-".$codPostal['postal2'];

        $path = $request->file('certificado')->store('certificados');

        $validateFormando['certificado'] = $path;
        $validateFormando['cod_postal'] = $codPostal;

        $formando = new Formando($validateFormando);
        $formando->save();

        if($validateUser['password']){
            $user = User::create([
                'name' => $formando->nome,
                'email' => $validateUser->email,
                'password' => Hash::make($validateUser['password']),
                'profile_type' => 'Formando',
                'profile_id' => $formando->id, 
            ]);
            $user->save();
            $user->sendEmailVerificationNotification();
        }

        return dd($formando);
    }
}

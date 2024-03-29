<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use App\Models\User;

use App\Models\Empresa;
use App\Models\Concelho;
use App\Models\Distrito;
use App\Models\Formacao;
use App\Models\Formando;
use App\Models\Subsidio;
use App\Models\EstadoCivil;
use App\Models\Habilitacoes;
use Illuminate\Http\Request;
use App\Models\TipoDocumento;
use Illuminate\Support\Facades\Hash;
use App\Models\NrTrabalhadores_Opcao;
use Illuminate\Support\Facades\Storage;

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

        $formando_validation = $request->validate([
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
            'emprego' => 'required|string|max:255',
            'subsidio_id' => 'integer|exists:subsidios,id',
            'ultima_proff' => 'nullable|string|max:255',
            'inicio_proff' => 'nullable|date|before:today',
            'fim_proff' => 'nullable|date|after:inicio_proff|before:today',
        ]);
        
        $certificado = $request->validate([
            'certificado' => 'file|mimes:pdf,jpg,jpeg,png',
        ]);
        
        $codPostal = $request->validate([
            'postal1' => 'required|digits:4',
            'postal2' => 'required|digits:3',
        ]);

        $formando_validation += ["cod_postal" => ($codPostal['postal1']."-".$codPostal['postal2'])];

        $empresa = $request->validate([
            'nomeEmpresa' => 'sometimes|required_with:nif,morada,cod_postal,nr_trabalhadores_id|string|max:255',
            'nifEmpresa' => 'sometimes|required_with:nome,morada,cod_postal,nr_trabalhadores_id|digits:9',
            'moradaEmpresa' => 'nullable|string|max:255',
            'nrTrabalhadores' => 'sometimes|required_with:nome,nif,morada,cod_postal|integer|exists:nr_trabalhadores__opcoes,id',
        ]);
        
        $codPostal_empresa = $request->validate([
            'postal1_Empresa' => 'nullable|string|max:10',
            'postal2_Empresa' => 'nullable|string|max:10',
        ]);

        if($codPostal_empresa && $empresa && $empresa['nifEmpresa'] ){
            $empresa += ["postalEmpresa" => ($codPostal_empresa['postal1_Empresa']."-".$codPostal_empresa['postal2_Empresa'])];
        }

        $validateUser = $request->validate([
            'email' => "nullable|required_with:password|email|unique:users,email|max:255",
            'password' => 'nullable|string|min:6',
            'password_confirmation' => 'nullable|string|min:6|same:password',
            //name = nome 
        ]);

        $path = $request->file('certificado')->store('certificados');
        $formando_validation += ["certificado" => $path];
        $formando = new Formando($formando_validation);
        $formando->save();
        if($empresa['nifEmpresa']){
            $empresaExistente = Empresa::where('nifEmpresa',$empresa['nifEmpresa'])->firstOr(function($formando,$empresa){
                $formando->empresa()->save(new Empresa($empresa));
                return null;
            });
            if($empresaExistente){
                $formando->empresa()->save($empresaExistente);
            }
        }

        if($validateUser['password']){
            $user = User::create([
                'name' => $formando->nome,
                'email' => $formando->email,
                'password' => Hash::make($validateUser['password']),
                'profile_type' => 'Formando',
                'profile_id' => $formando->id, 
            ]);
            $user->save();
            $user->sendEmailVerificationNotification();
        }

        

        return view('form.sucesso', ['nomeFromacao'=> $idFormacao]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Request;
use App\Models\TipoDocumento;
use App\Models\SitProf_Subsidio;
use App\Models\Requisito;
use App\Models\RegimeHorario;
use App\Models\RegimePresenca;
use App\Models\NrTrabalhadores_Opcao;
use App\Models\Habilitacoes;

class AdminController extends Controller
{
    public function edit_options(){
        $tiposDocumento = TipoDocumento::all();
        $situacoesProf = SitProf_Subsidio::all();
        $requisitos = Requisito::all();
        $regimesHorario = RegimeHorario::all();
        $regimesPresenca = RegimePresenca::all();
        $trabalhadores = NrTrabalhadores_Opcao::all();
        $habilitacoes = Habilitacoes::all();

        

        //return view('dashboard.add_options', ['tiposDocumento' => $tiposDocumento, 'situacoesProf' => $situacoesProf, 'requisitos' => $requisitos, 'regimesHorario' => $regimesHorario, 'regimesPresenca' => $regimesPresenca, 'trabalhadores' => $trabalhadores, 'habilitacoes' => $habilitacoes ]);
        return view('dashboard.add_options', ['tabelas' => [$tiposDocumento, $situacoesProf, $requisitos, $regimesHorario, $regimesPresenca,$trabalhadores,$habilitacoes] ]);

    }

    public function delete_option($id, $optiontable){
        
    }
}

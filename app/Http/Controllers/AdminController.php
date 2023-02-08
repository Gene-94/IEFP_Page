<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoDocumento;
use App\Models\SitProf_Subsidio;
use App\Models\Requisito;
use App\Models\RegimeHorario;
use App\Models\RegimePresenca;
use App\Models\NrTrabalhadores_Opcao;
use App\Models\Habilitacoes;


class AdminController extends Controller
{
    public $nome_tabelas = array(
        'TIpos de documentos',
        'Situaçoes Profissionais', 
        'Requisitos de formaçoes',
        'Regimes de horario',
        'Regimes de presença',
        'Numero de trabalhadores de empresa',
        'Hanilitaçoes academicas');

    public $opcoes = array(
        TipoDocumento::class,
        SitProf_Subsidio::class,
        Requisito::class,
        RegimeHorario::class,
        RegimePresenca::class,
        NrTrabalhadores_Opcao::class,
        Habilitacoes::class,
        );

    public function show_options(){
        /*
        $opcoes_all = array(
        $tiposDocumento = TipoDocumento::all(),
        $situacoesProf = SitProf_Subsidio::all(),
        $requisitos = Requisito::all(),
        $regimesHorario = RegimeHorario::all(),
        $regimesPresenca = RegimePresenca::all(),
        $trabalhadores = NrTrabalhadores_Opcao::all(),
        $habilitacoes = Habilitacoes::all(),
        );
        */
        $opcoes_all = array();
        foreach($this->opcoes as $opcao){
            array_push($opcoes_all, $opcao::all());
        }

        

        //return view('dashboard.add_options', ['tiposDocumento' => $tiposDocumento, 'situacoesProf' => $situacoesProf, 'requisitos' => $requisitos, 'regimesHorario' => $regimesHorario, 'regimesPresenca' => $regimesPresenca, 'trabalhadores' => $trabalhadores, 'habilitacoes' => $habilitacoes ]);
        return view('dashboard.allOptions', ['tabelas' => $opcoes_all, 'nome_tabelas' => $this->nome_tabelas ]);

    }

    public function edit_option() {
        return redirect();
    }

    public function delete_option(Request $request){
        
        
        //dd($request->post());

        //echo($request->post()['table_array_pos']);

        
        $option = $this->opcoes[$request->post()['table_array_pos']]::find($request->post()['option_id']);


        $option->delete();

        return redirect('/admin/opcoes/');
    }

    public function showDashboard(){

        return view('dashboard.admin');
    }
}

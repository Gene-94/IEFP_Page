<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Formacao;


class FormacoesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $formacoes = [
            [
                "nome" => "Formação de teste 1",
                "descricao" => "Esta é uma formação apenas para efeitos de teste da plataforma, Regime de Peesença: Remoto; Regime de Horario: Laboral",
                "regime_presenca_id" => 2,
                "regime_horario_id" => 3,
                "duracao_horas" => 350,
                "data_inicio_prevista" => date("Y-m-d"),
                "coordenador_id" => null,
            ],
            [
                "nome" => "Formação de teste 2 !",
                "descricao" => "Esta é uma formação apenas para efeitos de teste da plataforma, Regime de Peesença: Presencial; Regime de Horario: Pós-Laboral (noturno)",
                "regime_presenca_id" => 1,
                "regime_horario_id" => 4,
                "duracao_horas" => 75,
                "data_inicio_prevista" => date("Y-m-d"),
                "coordenador_id" => null,
            ],
        ];

        foreach($formacoes as $formacao){
            Formacao::create($formacao);
        }
        

        
    }
}
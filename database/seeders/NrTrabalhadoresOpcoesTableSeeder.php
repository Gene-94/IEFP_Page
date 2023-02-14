<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NrTrabalhadores_Opcao;

class NrTrabalhadoresOpcoesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $opcoes = [
            ["nome_opcao" => "1 a 9"],
            ["nome_opcao" => "10 a 49"],
            ["nome_opcao" => "50 a 250"],
            ["nome_opcao" => "+ de 250"],
        ];
        
        foreach($opcoes as $opcao){
            NrTrabalhadores_Opcao::create($opcao);
        }
    }
}
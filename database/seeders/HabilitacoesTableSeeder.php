<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Habilitacoes;

class HabilitacoesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        $habilitacoes = [
            ["nome_descritivo" => "Inferior a 4 ano"],
            ["nome_descritivo" => "1º ciclo (4º ano)"],
            ["nome_descritivo" => "2º ciclo (6º ano)"],
            ["nome_descritivo" => "3º ciclo (9º ano)"],
            ["nome_descritivo" => "Ensino Secundario (12º ano ou equivalente)"],
            ["nome_descritivo" => "CET"],
            ["nome_descritivo" => "Licenciatura"],
            ["nome_descritivo" => "Barcharelato"],
            ["nome_descritivo" => "Mestrado"],
            ["nome_descritivo" => "Doutoramento"],  
        ];

        foreach($habilitacoes as $habilitacao){
            Habilitacoes::create($habilitacao);
        }
        
        
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Requisito;

class RequisitosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $requisitos = [
            ["nome" => "Nenhum"],
            ["nome" => "Computador"],
            ["nome" => "Ligação a internet"],
            ["nome" => "Camera Web"],
            ["nome" => "Microfone"],
            ["nome" => "Saida audio"],
        ];

        foreach($requisitos as $requisito){
            Requisito::create($requisito);
        }


        
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empresa;

class EmpresasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        $empresas = [
            [
                "nomeEmpresa" => "Produção Multipessoal Unipessoal LDA.",
                "nifEmpresa" => "123456789",
                "moradaEmpresa" => "Zona Industrial do alto da Ribeira lote 3",
                "postalEmpresa" => "5500-321",
                "nr_trabalhadores_id" => 3,
            ],
        ];

        foreach($empresas as $empresa){
            Empresa::create($empresa);
        }
  
        
        
    }
}
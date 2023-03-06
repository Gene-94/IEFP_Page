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
                "nome" => "Produção Multipessoal Unipessoal LDA.",
                "nif" => "123456789",
                "morada" => "Zona Industrial do alto da Ribeira lote 3",
                "cod_postal" => "5500-321",
                "nr_trabalhadores_id" => 3,
            ],
        ];

        foreach($empresas as $empresa){
            Empresa::create($empresa);
        }
  
        
        
    }
}
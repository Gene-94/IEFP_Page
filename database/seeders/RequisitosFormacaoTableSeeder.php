<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Formacao;

class RequisitosFormacaoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        $requisitos = [
            ["formacao_id" => 1, "requisito_id" => 2],
            ["formacao_id" => 1, "requisito_id" => 3],
            ["formacao_id" => 1, "requisito_id" => 4],
            ["formacao_id" => 1, "requisito_id" => 5],
            ["formacao_id" => 1, "requisito_id" => 6],
            ["formacao_id" => 2, "requisito_id" => 1],
        ];
        
        Formacao::find(1)->requisitos()->attach([2,3,4,5,6]);

        Formacao::find(2)->requisitos()->attach([1]);
        
    }
}
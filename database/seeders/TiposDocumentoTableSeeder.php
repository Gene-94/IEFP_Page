<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoDocumento;

class TiposDocumentoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        $tiposDoc = [
            ["tipo" => "Cartão de Cidadão"],
            ["tipo" => "Bilhete de Identificação"],
            ["tipo" => "Titulo de Residencia"],
            ["tipo" => "Passaporte"],
            ["tipo" => "Outro"],
        ];
        
        foreach($tiposDoc as $tipo){
            TipoDocumento::create($tipo);
        }
        
    }
}
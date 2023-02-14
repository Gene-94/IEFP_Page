<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Distrito;

class DistritosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        $distritos = [
            ["nome" => "Aveiro"],
            ["nome" => "Beja"],
            ["nome" => "Braga"],
            ["nome" => "Bragança"],
            ["nome" => "Castelo Branco"],
            ["nome" => "Coimbra"],
            ["nome" => "Évora"],
            ["nome" => "Faro"],
            ["nome" => "Guarda"],
            ["nome" => "Leiria"],
            ["nome" => "Lisboa"],
            ["nome" => "Portalegre"],
            ["nome" => "Porto"],
            ["nome" => "Santarém"],
            ["nome" => "Setúbal"],
            ["nome" => "Viana do Castelo"],
            ["nome" => "Vila Real"],
            ["nome" => "Viseu"],
            ["nome" => "Região Autónoma da Madeira"],
            ["nome" => "Região Autónoma dos Açores"],
        ];
        
        foreach($distritos as $distrito){
            Distrito::create($distrito);
        }
        
    }
}
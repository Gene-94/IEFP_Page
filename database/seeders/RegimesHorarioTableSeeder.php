<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RegimeHorario;

class RegimesHorarioTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        $regimes = [
            ["nome_regime" => "Manhã"],
            ["nome_regime" => "Tarde"],
            ["nome_regime" => "Laboral"],
            ["nome_regime" => "Pós-laboral"],
        ];

        foreach($regimes as $regime){
            RegimeHorario::create($regime);
        }
        
        
    }
}
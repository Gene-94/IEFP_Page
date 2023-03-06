<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RegimePresenca;

class RegimesPresencaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        $regimes = [
            ["nome_regime" => "Presencial"],
            ["nome_regime" => "Remoto"],
            ["nome_regime" => "Hibrido"],
        ];

        foreach($regimes as $regime){
            RegimePresenca::create($regime);
        }
        
        
    }
}
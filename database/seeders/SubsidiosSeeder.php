<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subsidio;

class SubsidiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subsidios = [
            "tipo" => "Nenhum",
            "tipo" => "Subsídio de desemprego",
            "tipo" => "Subsídio de desemprego parcial",
            "tipo" => "Subsídio social de desemprego",
            "tipo" => "Outro",
        ];

        foreach($subsidios as $subsidio){
            Subsidio::create($subsidio);
        }
    }
}

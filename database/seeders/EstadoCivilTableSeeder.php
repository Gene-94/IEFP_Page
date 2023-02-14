<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EstadoCivil;

class EstadoCivilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estados = [
            ["tipo" => "Solteiro"],
            ["tipo" => "Casado"],
            ["tipo" => "Em união de facto"],
            ["tipo" => "Divorciado"],
            ["tipo" => "Viúvo"],
            ["tipo" => "Outro"],
        ];

        foreach($estados as $estado){
            EstadoCivil::create($estado);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Formando;

class FormandosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        $formandos = [
            [
                "nome" => "Formaando Teste",
                "email" => "mailteste@teste.com",
                "telemovel" => "+351 926 555 431",
                "data_nascimento" => "1994-10-12",
                "tipo_documento_id" => 1,
                "estado_civil_id" => 2,
                "nr_documento" => "AA778412572 zz",
                "validade_documento" => "2028-05-18",
                "niss" => "12345678923",
                "nif" => "247914557",
                "nacionalidade_id" => 1,
                "naturalidade_id" => 1,
                "habilitacoes_id" => 5,
                "area_curso" => "Gestão",
                "estabelecimento_enino" => "Instituro Superior B",
                "ano_conclusao" => "2020-09-01",
                "certificado" => "temp/path/to/certificate",
                "emprego" => "Empregado por conta propria",
                "subsidio_id" => 1,
                "ultima_proff" => null,
                "inicio_proff" => "2021-05-05",
                "fim_proff" => null,
                "empresa_id" => 1,
                "morada" => "Avenida Inacio Martins Almeida, Rua da Jaquina, lote 3, porta A.",
                "concelho_id" => 4,
                "cod_postal" => "8745-887",
            ],
            [
                "nome" => "Formaando Teste-2",
                "email" => "mailteste22222@teste.com",
                "telemovel" => "00351926555432",
                "data_nascimento" => "2001-11-12",
                "tipo_documento_id" => 1,
                "estado_civil_id" => 1,
                "nr_documento" => "123548652",
                "validade_documento" => "2023-05-18",
                "niss" => "12345678900",
                "nif" => "247914337",
                "nacionalidade_id" => 33,
                "naturalidade_id" => 33,
                "habilitacoes_id" => 3,
                "area_curso" => null,
                "estabelecimento_enino" => null,
                "ano_conclusao" => null,
                "certificado" => "temp/path/to/certificate2",
                "emprego" => "Desepregado, há mais de um ano",
                "subsidio_id" => 2,
                "ultima_proff" => null,
                "inicio_proff" => null,
                "fim_proff" => null,
                "empresa_id" => null,
                "morada" => "Avenida Inacio Martins Almeida, Rua da Jaquina, lote 3A, porta A.",
                "concelho_id" => 4,
                "cod_postal" => "8745-886",
            ],
        ];

        foreach($formandos as $formando){
            Formando::create($formando);
        }
        
    }
}
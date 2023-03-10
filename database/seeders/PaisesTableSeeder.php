<?php

namespace Database\Seeders;
use App\Models\Pais;

use Illuminate\Database\Seeder;

class PaisesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

    
        $paises = [
            ["nome" => "Afeganistão"],
            ["nome" => "África do Sul"],
            ["nome" => "Albânia"],
            ["nome" => "Alemanha"],
            ["nome" => "Andorra"],
            ["nome" => "Angola"],
            ["nome" => "Anguilla"],
            ["nome" => "Antártida"],
            ["nome" => "Antígua e Barbuda"],
            ["nome" => "Antilhas Holandesas"],
            ["nome" => "Arábia Saudita"],
            ["nome" => "Argélia"],
            ["nome" => "Argentina"],
            ["nome" => "Armênia"],
            ["nome" => "Aruba"],
            ["nome" => "Austrália"],
            ["nome" => "Áustria"],
            ["nome" => "Azerbaijão"],
            ["nome" => "Bahamas"],
            ["nome" => "Bahrein"],
            ["nome" => "Bangladesh"],
            ["nome" => "Barbados"],
            ["nome" => "Belarus"],
            ["nome" => "Bélgica"],
            ["nome" => "Belize"],
            ["nome" => "Benin"],
            ["nome" => "Bermudas"],
            ["nome" => "Bolívia"],
            ["nome" => "Bósnia-Herzegóvina"],
            ["nome" => "Botsuana"],
            ["nome" => "Brasil"],
            ["nome" => "Brunei"],
            ["nome" => "Bulgária"],
            ["nome" => "Burkina Fasso"],
            ["nome" => "Burundi"],
            ["nome" => "Butão"],
            ["nome" => "Cabo Verde"],
            ["nome" => "Camarões"],
            ["nome" => "Camboja"],
            ["nome" => "Canadá"],
            ["nome" => "Cazaquistão"],
            ["nome" => "Chade"],
            ["nome" => "Chile"],
            ["nome" => "China"],
            ["nome" => "Chipre"],
            ["nome" => "Singapura"],
            ["nome" => "Colômbia"],
            ["nome" => "Congo"],
            ["nome" => "Coréia do Norte"],
            ["nome" => "Coréia do Sul"],
            ["nome" => "Costa do Marfim"],
            ["nome" => "Costa Rica"],
            ["nome" => "Croácia (Hrvatska)"],
            ["nome" => "Cuba"],
            ["nome" => "Dinamarca"],
            ["nome" => "Djibuti"],
            ["nome" => "Dominica"],
            ["nome" => "Egito"],
            ["nome" => "El Salvador"],
            ["nome" => "Emirados Árabes Unidos"],
            ["nome" => "Equador"],
            ["nome" => "Eritréia"],
            ["nome" => "Eslováquia"],
            ["nome" => "Eslovênia"],
            ["nome" => "Espanha"],
            ["nome" => "Estados Unidos"],
            ["nome" => "Estônia"],
            ["nome" => "Etiópia"],
            ["nome" => "Federação Russa"],
            ["nome" => "Fiji"],
            ["nome" => "Filipinas"],
            ["nome" => "Finlândia"],
            ["nome" => "França"],
            ["nome" => "Gabão"],
            ["nome" => "Gâmbia"],
            ["nome" => "Gana"],
            ["nome" => "Geórgia"],
            ["nome" => "Gibraltar"],
            ["nome" => "Grã-Bretanha (Reino Unido, UK)"],
            ["nome" => "Granada"],
            ["nome" => "Grécia"],
            ["nome" => "Groelândia"],
            ["nome" => "Guadalupe"],
            ["nome" => "Guam (Território dos Estados Unidos)"],
            ["nome" => "Guatemala"],
            ["nome" => "Guernsey"],
            ["nome" => "Guiana"],
            ["nome" => "Guiana Francesa"],
            ["nome" => "Guiné"],
            ["nome" => "Guiné Equatorial"],
            ["nome" => "Guiné-Bissau"],
            ["nome" => "Haiti"],
            ["nome" => "Holanda"],
            ["nome" => "Honduras"],
            ["nome" => "Hong Kong"],
            ["nome" => "Hungria"],
            ["nome" => "Iêmen"],
            ["nome" => "Ilha Bouvet (Território da Noruega)"],
            ["nome" => "Ilha do Homem"],
            ["nome" => "Ilha Natal"],
            ["nome" => "Ilha Pitcairn"],
            ["nome" => "Ilha Reunião"],
            ["nome" => "Ilhas Aland"],
            ["nome" => "Ilhas Cayman"],
            ["nome" => "Ilhas Cocos"],
            ["nome" => "Ilhas Comores"],
            ["nome" => "Ilhas Cook"],
            ["nome" => "Ilhas Faroes"],
            ["nome" => "Ilhas Falkland (Malvinas)"],
            ["nome" => "Ilhas Geórgia do Sul e Sandwich do Sul"],
            ["nome" => "Ilhas Heard e McDonald (Território da Austrália)"],
            ["nome" => "Ilhas Marianas do Norte"],
            ["nome" => "Ilhas Marshall"],
            ["nome" => "Ilhas Menores dos Estados Unidos"],
            ["nome" => "Ilhas Norfolk"],
            ["nome" => "Ilhas Seychelles"],
            ["nome" => "Ilhas Solomão"],
            ["nome" => "Ilhas Svalbard e Jan Mayen"],
            ["nome" => "Ilhas Tokelau"],
            ["nome" => "Ilhas Turks e Caicos"],
            ["nome" => "Ilhas Virgens (Estados Unidos)"],
            ["nome" => "Ilhas Virgens (Inglaterra)"],
            ["nome" => "Ilhas Wallis e Futuna"],
            ["nome" => "índia"],
            ["nome" => "Indonésia"],
            ["nome" => "Irã"],
            ["nome" => "Iraque"],
            ["nome" => "Irlanda"],
            ["nome" => "Islândia"],
            ["nome" => "Israel"],
            ["nome" => "Itália"],
            ["nome" => "Jamaica"],
            ["nome" => "Japão"],
            ["nome" => "Jersey"],
            ["nome" => "Jordânia"],
            ["nome" => "Kênia"],
            ["nome" => "Kiribati"],
            ["nome" => "Kuait"],
            ["nome" => "Laos"],
            ["nome" => "Látvia"],
            ["nome" => "Lesoto"],
            ["nome" => "Líbano"],
            ["nome" => "Libéria"],
            ["nome" => "Líbia"],
            ["nome" => "Liechtenstein"],
            ["nome" => "Lituânia"],
            ["nome" => "Luxemburgo"],
            ["nome" => "Macau"],
            ["nome" => "Macedônia (República Yugoslava)"],
            ["nome" => "Madagascar"],
            ["nome" => "Malásia"],
            ["nome" => "Malaui"],
            ["nome" => "Maldivas"],
            ["nome" => "Mali"],
            ["nome" => "Malta"],
            ["nome" => "Marrocos"],
            ["nome" => "Martinica"],
            ["nome" => "Maurício"],
            ["nome" => "Mauritânia"],
            ["nome" => "Mayotte"],
            ["nome" => "México"],
            ["nome" => "Micronésia"],
            ["nome" => "Moçambique"],
            ["nome" => "Moldova"],
            ["nome" => "Mônaco"],
            ["nome" => "Mongólia"],
            ["nome" => "Montenegro"],
            ["nome" => "Montserrat"],
            ["nome" => "Myanma"],
            ["nome" => "Namíbia"],
            ["nome" => "Nauru"],
            ["nome" => "Nepal"],
            ["nome" => "Nicarágua"],
            ["nome" => "Níger"],
            ["nome" => "Nigéria"],
            ["nome" => "Niue"],
            ["nome" => "Noruega"],
            ["nome" => "Nova Caledônia"],
            ["nome" => "Nova Zelândia"],
            ["nome" => "Omã"],
            ["nome" => "Palau"],
            ["nome" => "Panamá"],
            ["nome" => "Papua-Nova Guiné"],
            ["nome" => "Paquistão"],
            ["nome" => "Paraguai"],
            ["nome" => "Peru"],
            ["nome" => "Polinésia Francesa"],
            ["nome" => "Polônia"],
            ["nome" => "Porto Rico"],
            ["nome" => "Portugal"],
            ["nome" => "Qatar"],
            ["nome" => "Quirguistão"],
            ["nome" => "República Centro-Africana"],
            ["nome" => "República Democrática do Congo"],
            ["nome" => "República Dominicana"],
            ["nome" => "República Tcheca"],
            ["nome" => "Romênia"],
            ["nome" => "Ruanda"],
            ["nome" => "Saara Ocidental"],
            ["nome" => "Saint Vincente e Granadinas"],
            ["nome" => "Samoa Ocidental"],
            ["nome" => "Samoa Ocidental"],
            ["nome" => "San Marino"],
            ["nome" => "Santa Helena"],
            ["nome" => "Santa Lúcia"],
            ["nome" => "São Bartolomeu"],
            ["nome" => "São Cristóvão e Névis"],
            ["nome" => "São Martim"],
            ["nome" => "São Tomé e Príncipe"],
            ["nome" => "Senegal"],
            ["nome" => "Serra Leoa"],
            ["nome" => "Sérvia"],
            ["nome" => "Síria"],
            ["nome" => "Somália"],
            ["nome" => "Sri Lanka"],
            ["nome" => "St. Pierre and Miquelon"],
            ["nome" => "Suazilândia"],
            ["nome" => "Sudão"],
            ["nome" => "Suécia"],
            ["nome" => "Suíça"],
            ["nome" => "Suriname"],
            ["nome" => "Tadjiquistão"],
            ["nome" => "Tailândia"],
            ["nome" => "Taiwan"],
            ["nome" => "Tanzânia"],
            ["nome" => "Território Britânico do Oceano índico"],
            ["nome" => "Territórios do Sul da França"],
            ["nome" => "Territórios Palestinos Ocupados"],
            ["nome" => "Timor Leste"],
            ["nome" => "Togo"],
            ["nome" => "Tonga"],
            ["nome" => "Trinidad and Tobago"],
            ["nome" => "Tunísia"],
            ["nome" => "Turcomenistão"],
            ["nome" => "Turquia"],
            ["nome" => "Tuvalu"],
            ["nome" => "Ucrânia"],
            ["nome" => "Uganda"],
            ["nome" => "Uruguai"],
            ["nome" => "Uzbequistão"],
            ["nome" => "Vanuatu"],
            ["nome" => "Vaticano"],
            ["nome" => "Venezuela"],
            ["nome" => "Vietnã"],
            ["nome" => "Zâmbia"],
            ["nome" => "Zimbábue"],
        ];
        
        foreach($paises as $pais){
            Pais::create($pais);
        }
        
        
    }
}
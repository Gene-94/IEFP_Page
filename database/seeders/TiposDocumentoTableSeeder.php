<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TiposDocumentoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tipos_documento')->delete();
        
        
        
    }
}
<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        $this->call(RequisitosTableSeeder::class);
        $this->call(SubsidiosSeeder::class);
        $this->call(TiposDocumentoTableSeeder::class);
        $this->call(EstadoCivilTableSeeder::class);
        $this->call(PaisesTableSeeder::class);
        $this->call(HabilitacoesTableSeeder::class);
        $this->call(SitProfSubsidiosTableSeeder::class);
        $this->call(DistritosTableSeeder::class);
        $this->call(ConcelhosTableSeeder::class);
        $this->call(RegimesPresencaTableSeeder::class);
        $this->call(RegimesHorarioTableSeeder::class);
        $this->call(CoordenadoresTableSeeder::class);
        $this->call(NrTrabalhadoresOpcoesTableSeeder::class);
        $this->call(EmpresasTableSeeder::class);
        $this->call(EstadosInscricaoTableSeeder::class);
        $this->call(FormandosTableSeeder::class);
        $this->call(FormacoesTableSeeder::class);
        $this->call(InscricoesTableSeeder::class);
        $this->call(RequisitosInscricaoTableSeeder::class);
        $this->call(RequisitosFormacaoTableSeeder::class);
    }
}

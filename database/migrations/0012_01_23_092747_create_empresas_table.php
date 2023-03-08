<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nomeEmpresa', 255);
            $table->string('nifEmpresa', 15);
            $table->string('moradaEmpresa', 255)->nullable();
            $table->string('postalEmpresa', 10)->nullable();
            $table->unsignedTinyInteger('nr_trabalhadores_id'); // foreign key para tabela com opções customisadas pre-inseridas para campo -> (dropdown)
            $table->timestamps();

            $table->foreign('nr_trabalhadores_id')->references('id')->on('nr_trabalhadores__opcoes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
};

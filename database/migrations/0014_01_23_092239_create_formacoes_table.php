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
        Schema::create('formacoes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('descricao', 255)->nullable();
            $table->unsignedTinyInteger('regime_presenca_id')->nullable();
            $table->unsignedTinyInteger('regime_horario_id')->nullable();
            $table->unsignedSmallInteger('duracao_horas')->nullable();
            $table->date('data_inicio_prevista')->nullable();
            $table->unsignedBigInteger('coordenador_id')->nullable();
            $table->timestamps();

            $table->foreign('regime_presenca_id')->references('id')->on('regimes_presenca');
            $table->foreign('regime_horario_id')->references('id')->on('regimes_horario');
            $table->foreign('coordenador_id')->references('id')->on('coordenadores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formacoes');
    }
};

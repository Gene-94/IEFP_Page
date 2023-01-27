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
        Schema::create('inscricoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('formando_id'); // foreign key de Formando
            $table->unsignedBigInteger('formacao_id'); // foreign key de Formacao
            $table->date('data_inscricao');
            $table->unsignedTinyInteger('preferencia');
            $table->unsignedTinyInteger('id_estado');
            $table->timestamps();

            $table->foreign('formando_id')->references('id')->on('formandos');
            $table->foreign('formacao_id')->references('id')->on('formacoes');
            $table->foreign('id_estado')->references('id')->on('estados_inscricao');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscricoes');
    }
};

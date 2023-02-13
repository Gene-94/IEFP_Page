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
        Schema::create('requisitos_inscricao', function (Blueprint $table) {
            $table->unsignedTinyInteger('requisito_id');
            $table->unsignedBigInteger('inscricao_id');
            $table->timestamps();

            $table->foreign('requisito_id')->references('id')->on('requisitos');
            $table->foreign('inscricao_id')->references('id')->on('inscricoes');
            $table->primary(array('requisito_id', 'inscricao_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requisitos_inscricao');
    }
};

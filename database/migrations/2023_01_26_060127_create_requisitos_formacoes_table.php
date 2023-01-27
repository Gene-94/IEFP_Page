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
        Schema::create('requisitos_formacao', function (Blueprint $table) {
            $table->unsignedTinyInteger('requisito_id');
            $table->unsignedBigInteger('formacao_id');

            $table->foreign('requisito_id')->references('id')->on('requisitos');
            $table->foreign('formacao_id')->references('id')->on('formacoes');
            $table->primary(array('requisito_id', 'formacao_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requisitos_formacao');
    }
};

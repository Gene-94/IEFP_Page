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
        Schema::create('formandos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('email', 255);
            $table->string('telemovel', 20);
            $table->date('data_nascimento');
            $table->unsignedTinyInteger('tipo_documento_id');
            $table->unsignedTinyInteger('estado_civil_id'); // foreign key de TiposDocumento, modelo deve devolver logo o nome
            $table->string('nr_documento', 50);
            $table->date('validade_documento');
            $table->string('niss', 15);
            $table->string('nif', 15);
            $table->unsignedTinyInteger('nacionalidade_id')->nullable(); // foreign key de paises, modelo deve devolver logo o nome
            $table->unsignedTinyInteger('naturalidade_id')->nullable(); // foreign key de paises, modelo deve devolver logo o nome
            $table->unsignedTinyInteger('habilitacoes_id'); // foreign key para tabela com diferentes escalões
            $table->string('area_curso', 255)->nullable();
            $table->unsignedSmallInteger('ano_conclusao')->nullable();
            $table->string('estabelecimento_enino', 255)->nullable();
            $table->string('certificado', 255); // path to file
            //$table->unsignedTinyInteger('sit_prof_subsidio_id'); // also foreigh key, this is to allow to add optiom from admin dashboard
            $table->string('emprego',255);
            $table->unsignedTinyInteger('subsidio_id');
            $table->smallInteger('tempo_em_meses_empregado')->nullable();
            $table->string('ultima_proff', 255)->nullable();
            $table->date('inicio_proff')->nullable();
            $table->date('fim_proff')->nullable();
            $table->unsignedBigInteger('empresa_id')->nullable();  // foreign key
            $table->string('morada', 255);
            $table->unsignedSmallInteger('concelho_id');  // foreign key
            $table->string('cod_postal', 10);
            $table->timestamps();

            $table->foreign('estado_civil_id')->references('id')->on('estados_civis');
            $table->foreign('tipo_documento_id')->references('id')->on('tipos_documento');
            $table->foreign('nacionalidade_id')->references('id')->on('paises');
            $table->foreign('naturalidade_id')->references('id')->on('paises');
            $table->foreign('habilitacoes_id')->references('id')->on('habilitacoes');
            //$table->foreign('sit_prof_subsidio_id')->references('id')->on('sit_prof_subsidios');
            $table->foreign('subsidio_id')->references('id')->on('subsidios');
            $table->foreign('empresa_id')->references('id')->on('empresas');
            $table->foreign('concelho_id')->references('id')->on('concelhos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formandos');
    }
};

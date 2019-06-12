<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaFuncionarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function(Blueprint $table){
            $table->increments('id');
            $table->string('nome', 45);
            $table->string('sobrenome', 45);
            $table->date('dataNascimento');
            $table->string('email', 100);
            $table->string('telefone', 20);
            $table->string('rua', 45);
            $table->string('bairro', 45);
            $table->string('cidade', 45);
            $table->string('estado', 2);
            $table->string('cep', 10);

            $table->unsignedBigInteger('cargo_id_fk');
            $table->foreign('cargo_id_fk')->references('id')->on('cargos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('funcionarios');
    }
}

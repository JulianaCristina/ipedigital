<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',100);
            $table->string('cpfcnpj',100);
            $table->string('cep',9);
            $table->string('uf',2);
            $table->string('cidade',100);
            $table->string('bairro',100);
            $table->string('endereco',100);
            $table->string('numero',10);
            $table->string('telefones',20);
            $table->string('celular',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}

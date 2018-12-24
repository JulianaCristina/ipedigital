<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('referencia')->unique();
            $table->string('descricao',100);
            $table->string('marca',100);
            $table->float('precoVenda',8,2);
            $table->boolean('estoque');
            $table->integer('unidade_vendas')->unsigned();
            $table->foreign('unidade_vendas')->references('id')->on('unidade_vendas');
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
        Schema::dropIfExists('produtos');
    }
}

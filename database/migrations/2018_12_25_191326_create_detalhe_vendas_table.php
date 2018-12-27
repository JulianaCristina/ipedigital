<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalheVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalhe_vendas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_venda')->unsigned();
            $table->foreign('id_venda')->references('id')->on('vendas');
            $table->integer('id_produto')->unsigned();
            $table->foreign('id_produto')->references('id')->on('produtos');
            $table->integer('quantidade');
            $table->float('preco');
            $table->float('desconto');
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
        Schema::dropIfExists('detalhe_vendas');
    }
}

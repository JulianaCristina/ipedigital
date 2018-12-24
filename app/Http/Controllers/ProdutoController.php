<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Produto;
use App\Http\Requests\Produto\ProdutoFormRequest;
use App\UnidadeVenda;


class ProdutoController extends Controller
{
    function index(Request $request){
    	if ($request->get("id") == null) {
    		$produto = new Produto();
    	}else{
    		$produto = Produto::Where('id', $request->get('id'))->first();
    	}
    	return view('produto.cadastroProduto', array(
    		'produto'=>$produto,
            'unidade_vendas' => UnidadeVenda::All())
    	);
    }

    function listarProduto(){

        $produto = DB::table("produtos")
                    ->join("unidade_vendas","produtos.unidade_vendas", "=", "unidade_vendas.id")
                    ->select("produtos.*","unidade_vendas.unidade as unidade_vendas")
                    ->get();

    	return view('produto.listaProduto',
				array('produto'=> $produto));
    }

    function salvar(ProdutoFormRequest $request){


    	if ($request->get('id') == null) {
    		$produto = new Produto();
    	}else{
    		$produto = Produto::Where("id", $request->get('id'))->first();
    	}

    	$produto->referencia = $request->get('referencia');
    	$produto->descricao = $request->get('descricao');
    	$produto->marca = $request->get('marca');
    	$produto->precoVenda = $request->get('precoVenda');
    	$produto->estoque = $request->get('estoque');
    	$produto->unidade_vendas = $request->get('unidade_vendas');

    	$produto->save();

    	return redirect("produto/listaProduto");

    }

    function excluir(Request $request){
    	if ($request->get('id') != null) {
    		$produto = Produto::Where('id', $request->get('id'))->first();
    		$produto->delete();

    		return redirect("produto/listaProduto");
    	}
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Http\Requests\Produto\ProdutoFormRequest;


class ProdutoController extends Controller
{
    function index(Request $request){
    	if ($request->get("id") == null) {
    		$produto = new Produto();
    	}else{
    		$produto = Produto::Where('id', $request->get('id'))->first();
    	}
    	return view('produto.cadastroProduto', array(
    		'produto'=>$produto
    		)
    	);
    }

    function listarProduto(){
    	return view('produto.listaProduto',
				array('produto'=> Produto::All()));
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
    	$produto->unidadeVenda = $request->get('unidadeVenda');

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

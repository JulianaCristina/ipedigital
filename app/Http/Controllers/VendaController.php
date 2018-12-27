<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Venda\VendaFormRequest;
use App\Venda;
use App\Cliente;
use App\Produto;

class VendaController extends Controller
{
	
	function index(Request $request){
		if ($request->get("id") == null) {
			$venda = new Venda();
		}else{
			$venda =Venda::Where('id', $request->get('id'))->first();
		}
		return view('venda.cadastroVenda', array(
			'venda'=>$venda,
			'cliente' => Cliente::All(),
			'produto' => Produto::All()
		));
	}

	function listarVenda(){
		return view('venda.listaVenda',
			array('venda'=> Venda::All()));
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

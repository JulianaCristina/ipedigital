<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    function index(Request $request){
    	if ($request->get("id") == null) {
    		$cliente = new Cliente();
    	}else{
    		$cliente = Cliente::Where('id', $request->get('id'))->first();
    	}
    	return view('cliente.cadastroCliente', array(
    		'cliente'=>$cliente
    		)
    	);
    }

    function listarCliente(){
    	return view('cliente.listaCliente',
				array('cliente'=> Cliente::All()));
    }

    function salvar(Request $request){
    	if ($request->get('id') == null) {
    		$cliente = new Cliente();
    	}else{
    		$cliente = Cliente::Where("id", $request->get('id'))->first();
    	}

    	$cliente->nome = $request->get('nome');
    	$cliente->endereco = $request->get('endereco');
    	$cliente->cpfcnpj = $request->get('cpfcnpj');
    	$cliente->telefones = $request->get('telefones');

    	$cliente->save();

    	return redirect("cliente/listaCliente");

    }

    function excluir(Request $request){
    	if ($request->get('id') != null) {
    		$cliente = Cliente::Where('id', $request->get('id'))->first();
    		$cliente->delete();

    		return redirect("cliente/listaCliente");
    	}
    }


}

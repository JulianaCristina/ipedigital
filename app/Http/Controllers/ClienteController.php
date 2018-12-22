<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Http\Requests\Cliente\ClienteFormRequest;

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

    function salvar(ClienteFormRequest $request){

    	if ($request->get('id') == null) {
    		$cliente = new Cliente();
    	}else{
    		$cliente = Cliente::Where("id", $request->get('id'))->first();
    	}

    	$cliente->nome = $request->get('nome');
    	$cliente->cpfcnpj = $request->get('cpfcnpj');
        $cliente->cep = $request->get('cep');
        $cliente->uf = $request->get('uf');
        $cliente->cidade = $request->get('cidade');
        $cliente->bairro = $request->get('bairro');
        $cliente->endereco = $request->get('endereco');
        $cliente->numero = $request->get('numero');
    	$cliente->telefones = $request->get('telefones');
        $cliente->celular = $request->get('celular');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    function index(){
    	return view('produto.cadastroProduto');
    }
}

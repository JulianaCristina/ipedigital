@extends('admin.layout')

@section('content')
<br>
<div class="card">
<div class="container">
	<br>
	  <h2>Cadastro Produto</h2>
	  	<form id="form" action="/produto/salvar" method="POST">

	  	<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="form-group">
		      <label for="referencia">Referência:</label>
		      <input type="text" class="form-control" id="referencia" value="{{$produto->referencia}}" placeholder="Digite a Referencia" name="referencia">
		    </div>
		    <div class="form-group">
		      <label for="descricao">Descrição:</label>
		      <input type="text" class="form-control" id="descricao"  value="{{$produto->descricao}}"  placeholder="Digite a descrição" name="descricao">
		    </div>
		    <div class="form-group">
		      <label for="marca">Marca:</label>
		      <input type="text" class="form-control" id="marca"  value="{{$produto->marca}}" placeholder="Digite a marca" name="marca">
		    </div>
		    <div class="form-group">
		      <label for="precoVenda">Preço de Venda:</label>
		      <input type="text" class="form-control" id="precoVenda"  value="{{$produto->precoVenda}}" placeholder="Digite o preço de venda" name="precoVenda">
		    </div>
		    <div class="form-group">
		      <label for="estoque">Estoque:</label>
		      <input type="text" class="form-control" id="estoque"  value="{{$produto->estoque}}" placeholder="Está em estoque?" name="estoque">
		    </div>
		    <div class="form-group">
		      <label for="unidadeVenda">Unidades de Venda:</label>
		      <input type="text" class="form-control" id="unidadeVenda"  value="{{$produto->unidadeVenda}}" placeholder="Digite as unidades de venda" name="unidadeVenda">
		    </div>
		    
		    <input type="hidden" name="id" value="{{ $produto->id}}"/>
		    
		    <button type="submit" class="btn btn-primary">Salvar</button>
	  </form>
	</div>
	<br>
</div>

@endsection
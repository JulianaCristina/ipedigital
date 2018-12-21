@extends('admin.layout')

@section('content')
<br>
<div class="card">
<div class="container">
	<br>
	  <h2>Cadastro Cliente</h2>
	  	<form id="form" action="/cliente/salvar" method="POST">

	  	<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="form-group">
		      <label for="nome">Nome:</label>
		      <input type="text" class="form-control" id="nome" value="{{$cliente->nome}}" placeholder="Digite o nome" name="nome">
		    </div>
		    <div class="form-group">
		      <label for="endereco">Endereço:</label>
		      <input type="text" class="form-control" id="endereco"  value="{{$cliente->endereco}}"  placeholder="Digite o endereço" name="endereco">
		    </div>
		    <div class="form-group">
		      <label for="cpfcnpj">CPF/CNPJ:</label>
		      <input type="text" class="form-control" id="cpfcnpj"  value="{{$cliente->cpfcnpj}}" placeholder="Digite CPF/CNPJ" name="cpfcnpj">
		    </div>
		    <div class="form-group">
		      <label for="telefone">Telefone:</label>
		      <input type="text" class="form-control" id="telefones"  value="{{$cliente->telefones}}" placeholder="Digite o telefone" name="telefones">
		    </div>
		    
		    <input type="hidden" name="id" value="{{ $cliente->id}}"/>
		    
		    <button type="submit" class="btn btn-primary">Salvar</button>
	  </form>
	</div>
	<br>
</div>

@endsection
@extends('admin.layout')

@section('content')
<br>
<div class="card" id="app">
	<div class="container">
		<br>
		<h2>Cadastro Cliente</h2>

		@if (isset($errors) & count($errors)>0)
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
			<p>{{$error}}</p>
			@endforeach
		</div>
		@endif

		<form id="form" action="/cliente/salvar" method="POST">
			<div class="row">

				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group col-sm-12 col-lg-12">
					<label for="nome">Nome:</label>
					<input type="text" class="form-control" id="nome" value="{{$cliente->nome}}" placeholder="Digite o nome" name="nome">
				</div>
				<div class="form-group col-sm-12 col-lg-12">
					<label for="cpfcnpj">CPF/CNPJ:</label>
					<input type="text" class="form-control" id="cpfcnpj"  value="{{$cliente->cpfcnpj}}" placeholder="Digite CPF/CNPJ" name="cpfcnpj" maxlength="14" minlength="11">
				</div>
				<div class="form-group col-sm-12 col-lg-6">
					<label for="cep">CEP: </label>
					<input type="text" id="cep" name="cep" value="{{$cliente->cep}}" class="form-control"  maxlength="9" v-model="cep" v-on:keyup="buscar" />
					<p id="pcep"></p>
				</div>

				<div class="form-group col-sm-12 col-lg-6">
					<label for="uf">UF: </label>
					<input type="text" id="uf" name="uf" value="{{$cliente->uf}}"  class="form-control" readonly v-model="endereco.uf" />
				</div>

				{{-- <div class="col-md-3"><span class="text-danger" v-show="naoLocalizado">
					<strong>* CEP não encontrado</strong></span>
				</div> --}}
				<div class="form-group col-sm-12 col-lg-12">
					<label for="cidade">Cidade: </label>
					<input type="text" id="cidade" name="cidade" value="{{$cliente->cidade}}"  class="form-control" readonly v-model="endereco.localidade" />
				</div>
				<div class="form-group col-sm-12 col-lg-12">
					<label for="bairro">Bairro: </label>
					<input type="text" id="bairro" name="bairro" value="{{$cliente->bairro}}"  class="form-control"  v-model="endereco.bairro" />
				</div>
				<div class="form-group  col-sm-12 col-lg-6">
					<label for="endereco">Endereço:</label>
					<input type="text" class="form-control" id="endereco"  value="{{$cliente->endereco}}"  placeholder="Digite o endereço" name="endereco" v-model="endereco.logradouro">
				</div>
				<div class="form-group  col-sm-12 col-lg-6">
					<label for="numero">Número: </label>
					<input type="text" id="numero" name="numero" value="{{$cliente->numero}}"  class="form-control"  />
				</div>  
				<div class="form-group col-sm-12 col-lg-6">
					<label for="telefones">Telefone:</label>
					<input type="text" class="form-control" id="telefones"  value="{{$cliente->telefones}}" placeholder="Digite o telefone" name="telefones">
				</div>
				<div class="form-group col-sm-12 col-lg-6">
					<label for="celular">Celular:</label>
					<input type="text" class="form-control" id="celular"  value="{{$cliente->celular}}" placeholder="Digite o celular" name="celular">
				</div>

				<input type="hidden" name="id" value="{{ $cliente->id}}"/>
				<div class="col-sm-12 col-md-4 col-lg-4">
					<button type="submit" class="btn btn-primary">Salvar</button>					
				</div>  
			</div>
		</form>
	</div>
	<br>
</div>

@endsection
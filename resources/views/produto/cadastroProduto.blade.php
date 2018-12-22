@extends('admin.layout')

@section('content')
<br>
<div class="card">
	<div class="container" id="app">
		<br>
		<h2>Cadastro Produto</h2>

		@if (isset($errors) & count($errors)>0)
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
			<p>{{$error}}</p>
			@endforeach
		</div>
		@endif


		<form id="form" action="/produto/salvar" method="POST">

			<div class="row">				
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group col-sm-12 col-lg-12">
					<label for="referencia">Referência:</label>
					<input type="text" class="form-control" id="referencia" value="{{$produto->referencia}}" placeholder="Digite a Referencia" name="referencia">
				</div>
				<div class="form-group col-sm-12 col-lg-12">
					<label for="descricao">Descrição:</label>
					<input type="text" class="form-control" id="descricao"  value="{{$produto->descricao}}"  placeholder="Digite a descrição" name="descricao">
				</div>
				<div class="form-group col-sm-12 col-lg-6 ">
					<label for="marca">Marca:</label>
					<input type="text" class="form-control" id="marca"  value="{{$produto->marca}}" placeholder="Digite a marca" name="marca">
				</div>
				<div class="form-group col-sm-12 col-lg-6">
					<label for="precoVenda">Preço de Venda:</label>
					<input type="text" v-model="precoVenda" class="form-control" id="precoVenda"  value="{{$produto->precoVenda}}" placeholder="Digite o preço de venda" name="precoVenda" @keypress.prevent="maskCurrency('precoVenda',$event)" @keyup.delete="maskCurrency('precoVenda',$event)">
				</div>

				<div class="form-group col-sm-12 col-lg-6">
					<label for="estoque">Estoque</label>
					<select class="form-control" id="estoque" name="estoque" value="{{$produto->estoque}}">
						<option value="0">Selecione um estado</option>
						<option >Em estoque</option>
						<option >Fora de estoque</option>					
					</select>
				</div>

				<div class="form-group col-sm-12 col-lg-6">
					<label for="unidadeVenda">Unidades de Venda:</label>
					<input type="text" class="form-control" id="unidadeVenda"  value="{{$produto->unidadeVenda}}" placeholder="Digite as unidades de venda" name="unidadeVenda">
				</div>

				<input type="hidden" name="id" value="{{ $produto->id}}"/>

				<div class="col-sm-12 col-lg-12">					
					<button type="submit" class="btn btn-primary">Salvar</button>
				</div>
			</div>
		</form>
	</div>
	<br>
</div>

@endsection
@extends('admin.layout')

@section('content')
<br>
<div class="card">
	<div class="container" id="app">
		<br>
		<h2>Nova Venda</h2>

		@if (isset($errors) & count($errors)>0)
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
			<p>{{$error}}</p>
			@endforeach
		</div>
		@endif


		<form id="form" action="/venda/salvar" method="POST">
			<br>
			<div class="row">				
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				{{-- <div class="form-group col-sm-12 col-lg-12">
					<label for="id">ID da Venda:</label>
					<input type="text" class="form-control" id="id" value="{{$venda->id}}"  name="id" readonly>
				</div> --}}

				<div class="form-group col-sm-12 col-lg-6">
					<label for="cliente">Cliente</label>
					<select class="form-control" id="cliente" name="cliente">
						<option value="0">Selecione um cliente</option>
						@foreach ($cliente as $row)
						@if ($row->id == $venda->cliente)
						<option value="{{$row->id}}" selected="selected">{{$row->nome}}</option>
						@else
						<option value="{{$row->id}}">{{$row->nome}}</option>
						@endif
						@endforeach					
					</select>
				</div>
				<div class="form-group col-sm-12 col-lg-6">
					<label for="data">Data:</label>
					<input type="datetime-local" class="form-control" id="data"  value="{{$venda->data}}"   name="data">
				</div>
				
				{{-- <div class="form-group col-sm-12 col-lg-6 ">
					<label for="total">Total:</label>
					<input type="text" class="form-control" id="total"  value="{{$venda->total}}" name="total">
				</div> --}}

				<div class="form-group col-sm-12 col-lg-4	">
					<label for="produto">Produto</label>
					<select class="form-control" id="produto" name="produto">
						<option value="0">Selecione um Produto</option>
						@foreach ($produto as $row)
						@if ($row->id == $venda->produto)
						<option value="{{$row->id}}" selected="selected">{{$row->descricao}}  </option>
						@else
						<option value="{{$row->id}}">{{$row->descricao}}</option>
						@endif
						@endforeach					
					</select>
				</div>
				<div class="form-group col-sm-12 col-lg-4 ">
					<label for="total">Preço:</label>
					<input type="text" class="form-control" id="total"  value="" name="total">
				</div>
				<div class="form-group col-sm-12 col-lg-4 ">
					<label for="total">Quantidade:</label>
					<input type="text" class="form-control" id="total"  value="{{$venda->total}}" name="total">
				</div>
				

				<input type="hidden" name="id" value="{{ $venda->id}}"/>

				<div class="col-sm-12 col-lg-12">					
					<button type="submit" class="btn btn-primary">Salvar</button>
				</div>
			</div>
		</form>
	</div>
	<br>
</div>


<script>
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	$('#submit').click(function(){		
		$.ajax({
			url:"name.php",
			method:"POST",
			data:$('#add_name').serialize(),
			success:function(data)
			{
				alert(data);
				$('#add_name')[0].reset();
			}
		});
	});
	
});
</script>
@endsection	
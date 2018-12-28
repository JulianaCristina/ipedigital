@extends('admin.layout')

@section('content')

<br>
<div class="card">
	<div class="container">
		<br>
		<h3>Vendas</h3>	
		<br>
		<a href="/venda" class="btn btn-primary" role="button">Nova Venda</a>
		<br><br>
	<table class="table table-bordered ">
		<thead class="thead-dark">
			<tr>				
				<th>ID</th>
				<th>Cliente</th>
				<th>Data</th>
				<th>Total</th>
				<th>Detalhes</th>
				<th>Editar</th>
				<th>Excluir</th>
				
			</tr>
		</thead>
		{{-- <tbody>
			@foreach($produto as $row)
				<tr>
					<td>{{ $row->referencia }}</td>
					<td>{{ $row->descricao }}</td>
					<td>{{ $row->marca }}</td>
					<td>{{ $row->precoVenda }}</td>
					<td>{{ $row->estoque }}</td>
					<td>{{ $row->unidade_vendas }}</td>
					<td>
						<a href="/produto?id={{$row->id}}">Editar</a>
					</td>
					<td>
						<a onclick="return confirm('Deseja realmente excluir?');" href="/produto/excluir?id={{$row->id}}">Excluir</a>
					</td>
				</tr>
			@endforeach
		</tbody> --}}
	</table>
</div>
</div>
<br>
</div>         

@endsection
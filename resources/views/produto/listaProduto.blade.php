@extends('admin.layout')

@section('content')

<br>
<div class="card">
	<div class="container">
		<br>
		<h3>Lista de Produtos</h3>	
	<table class="table table-bordered ">
		<thead class="thead-dark">
			<tr>				
				<th>Referência</th>
				<th>Descrição</th>
				<th>Marca</th>
				<th>Preço de Venda</th>
				<th>Estoque</th>
				<th>Unidades de Venda</th>
				<th>Editar</th>
				<th>Excluir</th>
				
			</tr>
		</thead>
		<tbody>
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
		</tbody>
	</table>
</div>
</div>
<br>
</div>         

@endsection
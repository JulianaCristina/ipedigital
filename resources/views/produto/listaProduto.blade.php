@extends('admin.layout')

@section('content')

<br>
<div class="card">
	<div class="container">
		<br>
		<h3>Lista de Clientes</h3>	
	<table class="table table-bordered ">
		<thead class="thead-dark">
			<tr>				
				<th>Nome</th>
				<th>Endereço</th>
				<th>CPF/CNPJ</th>
				<th>Telefones</th>
				<th>Editar</th>
				<th>Excluir</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach($cliente as $row)
				<tr>
					<td>{{ $row->nome }}</td>
					<td>{{ $row->endereco }}</td>
					<td>{{ $row->cpfcnpj }}</td>
					<td>{{ $row->telefones }}</td>
					<td>
						<a href="/cliente?id={{$row->id}}">Editar</a>
					</td>
					<td>
						<a onclick="return confirm('Deseja realmente excluir?');" href="/cliente/excluir?id={{$row->id}}">Excluir</a>
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
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
				<th>CPF/CNPJ</th>
				<th>CEP</th>
				<th>UF</th>
				<th>Cidade</th>
				<th>Bairro</th>
				<th>Endereço</th>
				<th>Número</th>
				<th>Telefones</th>
				<th>celular</th>
				<th>Editar</th>
				<th>Excluir</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach($cliente as $row)
				<tr>
					<td>{{ $row->nome }}</td>
					<td>{{ $row->cpfcnpj }}</td>
					<td>{{ $row->cep }}</td>
					<td>{{ $row->uf }}</td>
					<td>{{ $row->cidade }}</td>
					<td>{{ $row->bairro }}</td>
					<td>{{ $row->endereco }}</td>
					<td>{{ $row->numero }}</td>
					<td>{{ $row->telefones }}</td>
					<td>{{ $row->celular }}</td>
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
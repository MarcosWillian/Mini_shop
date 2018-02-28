 
@extends('layout')

@section('title', 'Usuarios')

@section('content')

<div class="row">
	<div class="container-fluid">
		<h3>Usuários</h3>
		<p>Área destinada para os usuários cadastrados no sistema</p>
	</div>	
</div>
<div class="row">	
	<div class="col-sm-3">	
		<a href="{{ route('usuario.cadastrar') }}" class="btn btn-primary text-center">
			<span class="glyphicon glyphicon-plus" aria-hidden="true"> </span>
			Novo usuário
		</a>
	</div>
	
</div>
<div class="row">
	<div class="col-sm-12">
		<br>
		<div class="well">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Opções</th>
						<th>Nome</th>
						<th>Email</th>
						<th>Endereço</th>
						<th>Foto</th>
					</tr>
				</thead>
				<tbody>
					@foreach($usuarios as $usuario)
					<tr>
						<td>
							<a class="btn btn-success" href="{{ route('usuario.editar') }}" role="button">
								<span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span>
							</a>
							<a class="btn btn-danger" href="#" role="button">
								<span class="glyphicon glyphicon-trash" aria-hidden="true"> </span>
							</a>
						</td>
						<td>{{ $usuario->nome }}</td>
						<td>{{ $usuario->email }}</td>
						<td>{{ $usuario->endereco }}</td>
						<td>
							
						</td>
					</tr>
					@endforeach
					
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
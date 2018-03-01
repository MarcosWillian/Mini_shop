 
@extends('layout')

@section('title', 'Editar usuário')

@section('content')

<div class="row">
	<div class="container-fluid">
		<h3>Edição do usuário</h3>
		<p>Atualize os dados do {{ $usuario->nome }}</p>
	</div>	
</div>
<div class="row">
	<div class="col-sm-12">
		<br>
		<div class="well">

			<form action="{{ route('usuario.atualizar', $usuario->id) }}" method="post" enctype="multipart/form-data">			
				@include('usuario.form_usuario')

				<button type="submit" class="btn btn-primary right">Editar</button>
			</form>
						
		</div>
	</div>
</div>
@endsection
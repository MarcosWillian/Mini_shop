 
@extends('layout')

@section('title', 'Editar usuário')

@section('content')

<div class="row">
	<div class="container-fluid">
		<h3>Edição do usuário</h3>
		<p>Atualize os dados do usuário</p>
	</div>	
</div>
<div class="row">
	<div class="col-sm-12">
		<br>
		<div class="well">

			<form action="">				
				@include('usuario.form_usuario')
			</form>
			
			<button type="submit" class="btn btn-primary right">Editar</button>
		</div>
	</div>
</div>
@endsection
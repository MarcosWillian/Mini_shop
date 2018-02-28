 
@extends('layout')

@section('title', 'Novo usuário')

@section('content')

<div class="row">
	<div class="container-fluid">
		<h3>Novo usuário</h3>
		<p>Informe os dados do novo usuário</p>
	</div>	
</div>
<div class="row">
	<div class="col-sm-12">
		<br>
		<div class="well">

			<form action="{{ route('usuario.salvar') }}" method="post" enctype="multipart/form-data">				
				@include('usuario.form_usuario')

				<button type="submit" class="btn btn-primary right">Salvar</button>
			</form>			
			
		</div>
	</div>
</div>
@endsection
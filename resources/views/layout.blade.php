<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>CRUD | @yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

	<div class="container-fluid">
		<div class="row content">
			<div class="col-m-3 col-sm-12 sidenav">
				<h2 class="text-center">CRUD Laravel</h2>
				<ul class="nav nav-pills nav-stacked">
					@php
						/*Percorre a Rota procurando palavras chaves*/
						$url = Route::currentRouteName();
						if( $url == 'usuarios' ){
							$url = 'usuario';
						}	
						else if( strpos($url, 'usuario') >= 0){
							$fragmento = explode(".", $url);
							$url = $fragmento[0];
						}											
					@endphp
					<li class="{{ $url == 'home' ? 'active' : '' }}">
						<a href="{{ route('home') }}">Home</a>
					</li>
					<li class="{{ $url == 'usuario' ? 'active' : ''  }}">
						<a href="{{ route('usuarios') }}">Usuários</a>
					</li>					
				</ul>
				<br>				
			</div>

			<div class="col-m-9 col-sm-12">

				@yield('content')

			</div> 
			
		</div> <!-- Fim .row content-->
	</div> <!-- Fim .container-fluid-->
	
	<footer class="container-fluid">
		<p>Footer Text</p>
	</footer>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
</html>
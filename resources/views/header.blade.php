<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="http://localhost/blog/public/css/app.css">
	<title>Mi Blog</title>
</head>
<body>
	<header>
		<?php
			function activaopcionmenu($url){
				return request()->is($url) ? 'activo' : '';
			}
		?>

		<nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded" role="navigation">
			<div class="container">
			 
			<a class="navbar-brand" href="#">Blogueando</a>
			 
				<ul class="navbar-nav mr-auto">
					<li class="nav-item " >
						<a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto navbar-right">
					<li class="nav-item">
						<a class="nav-link " href="#">Usuarios</a>
					</li>
					@if (auth()->guest())
						<li class="nav-item"><a class="nav-link {{ activaopcionmenu('login') }}" href="{{ route('login') }}">Login</a></li>
						<li class="nav-item"><a class="nav-link {{ activaopcionmenu('registros/create') }}" href="{{ route('registros.create') }}">Registrate</a></li>
					@else
						<li class="nav-item"><a class="nav-link {{ activaopcionmenu('publicaciones/create') }}" href="{{ route('publicaciones.create') }}">Publicar Contenido</a></li>
						<li class="nav-item"><a class="nav-link {{ activaopcionmenu('publicaciones') }}" href="{{ route('publicaciones.index') }}">Publicaciones</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">Cerrar sesion de {{auth()->user()->name }}</a></li>
					@endif
				</ul>
			</div>
		 </nav>


	</header>
	<div class="container" align="center">
		@yield('contenido')

	</div>
	<footer>Elaborado por Sergio Rodríguez Rosas - {{date('Y')}}</footer>
	
</body>
</html>
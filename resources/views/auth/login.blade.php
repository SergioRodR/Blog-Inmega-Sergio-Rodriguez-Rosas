@extends('header')
@section('contenido')
	
	<div class="col-md-5 classrowpost centrarform" align="center">
		<h1>Login</h1>
		<form method="POST" action="{{route('login')}}">
		{!! csrf_field() !!}
		<input class="form-control" type="email" name="email" placeholder="email"><br>
		<input class="form-control" type="password" name="password" placeholder="password"><br>
		<input class="btn btn-primary" type="submit" name="Entrar">
	</form>
	</div>
	
	<br>
@stop
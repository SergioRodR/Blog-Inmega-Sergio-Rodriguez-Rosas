@extends('header')
@section('contenido')

	<div class="col-md-5 classrowpost centrarform" align="center">
		<h1>Registro</h1>
		@if( session()->has('info'))
			<h3>{{ session('info') }}</h3>
		@else
		<form method="POST" action="{{route('registros.store')}}">
			{!! csrf_field() !!}
			<input class="form-control" type="text" name="name" placeholder="Nombre">
			<input class="form-control" type="email" name="email" placeholder="Email">
			<input class="form-control" type="password" name="password" placeholder="Password">
			<input class="btn btn-primary" type="submit" name="Entrar">
		</form>
	</div>
	<br>
	@endif
@stop
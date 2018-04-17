@extends('header')
@section('contenido')

<div class="col-md-8 classrowpost centrarform">
<h1>Publica tu contenido</h1>
@if( session()->has('info'))
	<h3>{{ session('info') }}</h3>
@else
<form method="Post" action="{{ route('publicaciones.store') }}" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<p><label for="image">
		imagen
		<input class="form-control" type="file" name="image">
		{!! $errors->first('image', '<span class="error">:message</span>') !!}
	</label></p>
	<p><label for="nombre">
		Nombre
		<input class="form-control" type="text" name="nombre" value="{{ old('nombre') }}">
		{!! $errors->first('nombre', '<span class="error">:message</span>') !!}
	</label></p>
	<p><label for="email">
		Email
		<input class="form-control" type="email" name="email" value="{{ old('email') }}">
		{!! $errors->first('email', '<span class="error">:message</span>') !!}
	</label></p>
	<p><label for="publicacion">
		Publicación
		<textarea class="form-control" name="publicacion">{{ old('publicacion') }}</textarea>
		{!! $errors->first('publicacion', '<span class="error">:message</span>') !!}
	</label></p>
	<input type="submit" value="enviar">
</form>
@endif
</div>

@stop
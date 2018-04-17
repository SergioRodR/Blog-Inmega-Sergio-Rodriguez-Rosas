@extends('header')
@section('contenido')

<div class="col-md-8 classrowpost centrarform">
<h1>Editar publicación de {{$data->nombre}}</h1>

<form method="Post" action="{{ route('publicaciones.update',$data->id) }}"  enctype="multipart/form-data">
	{!! method_field('PUT') !!}
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<p><label for="image">
		imagen
		<input class="form-control" type="file" name="image">
		{!! $errors->first('image', '<span class="error">:message</span>') !!}
	</label></p>
	<p><label for="nombre">
		Nombre
		<input class="form-control" type="text" name="nombre" value="{{ $data->nombre }}">
		{!! $errors->first('nombre', '<span class="error">:message</span>') !!}
	</label></p>
	<p><label for="email">
		Email
		<input class="form-control" type="email" name="email" value="{{ $data->email }}">
		{!! $errors->first('email', '<span class="error">:message</span>') !!}
	</label></p>
	<p><label for="publicacion">
		Publicación
		<textarea class="form-control" name="publicacion">{{ $data->publicacion }}</textarea>
		{!! $errors->first('publicacion', '<span class="error">:message</span>') !!}
	</label></p>
	<input class="btn btn-primary" type="submit" value="Guardar">
</form>
</div>

@stop
@extends('header')
@section('contenido')

<h1>Saludos para {{$nombre}}</h1>
<ul>
	@forelse($consolas as $consola)
		<li>{{$consola}}</li>
	@empty
		<p>No hay consolas</p>
	@endforelse
</ul>


@stop
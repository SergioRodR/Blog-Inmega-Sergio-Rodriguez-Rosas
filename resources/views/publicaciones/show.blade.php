@extends('header')
@section('contenido')

<div class="col-md-8 classrowpost centrarform">
<h1>Publicación</h1>
<p>Publicado por {{ $data->nombre }} - {{ $data->email }}</p>
<p>Post: {{ $data->publicacion }}</p>
<p>Creado el: {{ $data->created_at}}</p>	
</div>


@stop
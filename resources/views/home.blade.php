@extends('header')
@section('contenido')
<div class="row" align="center">
<h1>Inicio</h1>
</div>

	@foreach($publicaciones as $row)
	<div class="row classrowpost" align="center">
		<div class="col-md-12 classpost">
			<div class="col-md-12" style="overflow: hidden; height: 304px;">
				<img src="http://localhost/blog/storage/app/public/{{$row->image}}" style="object-fit: cover;width: 100%;height: 100%;">
			</div>
			<div class="col-md-12" >
				<p style="text-align: justify">{{ $row->publicacion }}</p>
			</div>
			<div class="col-md-6" align="center">
				<span>Publicado por: <b>{{ $row->nombre }}</b></span>
			</div>
			<div class="col-md-6" align="center">
				<span>Creado el: <b>{{ $row->created_at }}</b></span>
			</div>
		</div>
	</div><br><br>
	@endforeach

@stop
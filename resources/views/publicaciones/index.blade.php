@extends('header')
@section('contenido')

<h1>Todas las publicaciones</h1>

<table class="table centrarform">
	<thead>
		<th>Nombre</th>
		<th>Email</th>
		<th>Publicación</th>
		<th>fecha Publicación</th>
		<th>Acciones</th>
	</thead>
	<tbody>
		@foreach($publicaciones as $row)
			<tr>
				<td>
					<a href="{{route('publicaciones.show',$row->id)}}">{{ $row->nombre }}</a>
				</td>
				<td>{{ $row->email }}</td>
				<td>{{ $row->publicacion }}</td>
				<td>{{ $row->created_at }}</td>
				<td>
					<a class="btn btn-info btn-xs" href="{{route('publicaciones.edit',$row->id)}}">Editar</a>
					<form style="display: inline;" method="post" action="{{ route('publicaciones.destroy',$row->id) }}">
						{!! csrf_field() !!}
						{!! method_field('DELETE') !!}
						<button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
					</form>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>


@stop
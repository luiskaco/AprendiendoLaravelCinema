@extends('layouts.admin')
   @section('content')
              <table class='table'>
                 
                   	<thead>
                   		<tr>
                   			<th>Nombre</th>
                   			<th>Genero</th>
                   			<th>Dirección</th>
                   			<th>Caratula</th>
                   			<th>Operaciones</th>
                   		</tr>
                   	</thead>
                   	@foreach ($movies as $movie)
		                   	<tbody>
		                   		<tr>
		                   			<td>{{ 	$movie->name }}</td>
		                   			<td>{{ 	$movie->genre }}</td>
		                   			<td>{{	$movie->direction }}</td>
		                   			<td><img src="archivos/{{ $movie->path }}" alt="" width="100px"></td>
		                   			<td>  {!!
              /** Usando laravel Collective para los enlaces.  */
            link_to_route('movie.edit', $title = 'Editar', $parameters = $movie->id, $attributes = ['class'=>'btn btn-primary'])
                             !!}</td>
		                   		</tr>
		                   	</tbody>
                   	@endforeach
                   
                   </table>          
   @endsection
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
		                   			<td><img src="storage/app/{{ $movie->path }}" alt=""></td>
		                   			<td>{{ 	$movie->name}}</td>
		                   		</tr>
		                   	</tbody>
                   	@endforeach
                   
                   </table>          
   @endsection
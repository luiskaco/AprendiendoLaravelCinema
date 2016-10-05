@extends('layouts.admin')
   @section('content')
<!-- Incluyendo las alertas -->
              @include('alerts.request')
   
          
 		   {!! Form::model($movie,['route' => ['movie.update', $movie->id],'method'=>'PUT','files'=>true])  !!} 
			@include('movie.forms.movie')
 	 	   {!! Form::submit('Actualizar',['class'=>'btn btn-info']) !!}
  		   {!! Form::close() !!}
	
	

		   {!! Form::model($movie,['route' => ['movie.destroy', $movie->id],'method'=>'DELETE','files'=>true])  !!} 
  		   {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
  		   {!! Form::close() !!}

   @endsection
@extends('layouts.admin')
@section('content')
			<!-- Incluyendo las alertas -->
              @include('alerts.request')
 		<!-- Especificar la ruta con su metodo -->
    {!! Form::open(['route'=>'usuario.store', 'method'=>'POST']) !!}
    		   @include('usuario.forms.usr')
    {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
   
@endsection
@extends('layouts.admin')
@section('content')

          	<!-- Para mostrar elementos de un modelo se usa model y metodo put para actualizar-->
          	<!-- model / variable user que se recibe y lo demas


          	{{ Form::model($user, ['route' => ['usuario.update', $user->id],'method'=>'PUT']) }}
  	 			@include('usuario.forms.usr')
  	 	   {!! Form::submit('Modificar',['class'=>'btn btn-primary']) !!}
  		  {!! Form::close() !!}
@endsection

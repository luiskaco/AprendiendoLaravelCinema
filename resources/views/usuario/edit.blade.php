@extends('layouts.admin')
@section('content')

          	<!-- Para mostrar elementos de un modelo se usa model y metodo put para actualizar-->
          	<!-- model / variable user que se recibe y lo demas -->

   	       {!! Form::model($user,['route' => ['usuario.update', $user->id],'method'=>'PUT'])  !!} 
   				@include('usuario.forms.usr')
  	 	   {!! Form::submit('Actualizar',['class'=>'btn btn-info']) !!}
  		   {!! Form::close() !!}

  		<!-- OPara eliminar -->
  		   {!! Form::open(['route' => ['usuario.destroy', $user->id],'method'=>'DELETE'])  !!} 
  	 	   {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
  		   {!! Form::close() !!}


  		   <!-- Nota personal: revisar todos los detalles.-->
@endsection

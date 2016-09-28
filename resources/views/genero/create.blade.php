@extends('layouts.admin')
@section('content')
	   {!! Form::open() !!} 

	   <!-- Con ajax se usa un tipo token para identificar si no es una peticion malebola-->

	   <input type="hidden", name="_token", value="{{ csrf_token() }}", id="token">
       @include('genero.forms.genero')   
       {!!link_to('#', $title = 'Registrar', $attributes = ['id'=>'registro','class'=>'btn btn-primary'], $secure = null)!!}   
	   {!! Form::close() !!}
@endsection
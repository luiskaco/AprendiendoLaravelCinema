@extends('layouts.admin')
@section('content')
               


       {!! Form::open() !!}	
 
 
        <div id="msj-success" class="alert alert-success alert-dismissible" role='alert' style="display: none">
        	<strong>Genero Agregado Correctamente</strong>
        </div>	
	   <!-- Con ajax se usa un tipo token para identificar si no es una peticion malebola-->

	   <input type="hidden", name="_token", value="{{ csrf_token() }}", id="token">
       @include('genero.forms.genero')   
       {!!link_to('#', $title = 'Registrar', $attributes = ['id'=>'registro','class'=>'btn btn-primary'], $secure = null)!!}   
	   {!! Form::close() !!}
@endsection

<!-- Ingresaar scrip necesarios -->
@section('scripts')
{!! Html::script("js/script.js") !!}
@endsection
@extends('layouts.admin')
@section('content')
       
 		<div id="msj-success" class="alert alert-success alert-dismissible" role='alert' style="display: none">
        	<strong>Genero Operación realizado Correctamente</strong>
        </div>	

         <!--Incluyendo la ventana modal -->
        @include('genero.modal')
              
	  <table class="table">
	  	<thead>
	  		<th>Nombres</th>
	  		<th>Operaciones</th>
	  	</thead>
	  	<tbody id="datos"></tbody>
	  </table>


@endsection

<!-- Ingresaar scrip necesarios -->
@section('scripts')
{!! Html::script("js/script2.js") !!}
@endsection
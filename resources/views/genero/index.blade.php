@extends('layouts.admin')
@section('content')
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
@extends('layouts.admin')


<!-- 
Seria repetir el mismo codigo en cada una de las ventanas 
            < ? php $message=Session::get('message'); /** Generando variable*/?>
            @ if($message=='store')
                   <div class="alert alert-success">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                         <strong>Title!</strong> Usuario creado exitosamente
                   </div>
            @ endif

-->   
<!-- forma mas ordenada de usar-->
@if(Session::has('message'))
       <div class="alert alert-success">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ Session::get('message') }}
                   </div>
@endif

@section('content')
 
             <table class="table table-bordered table-hover">
             	<thead>
             		<tr>
             			<th>Nombre</th>
             			<th>Correo</th>
             			<th>Operacion</th>
             		</tr>
             	</thead>
                  @foreach($users as $user)
             	<tbody>
             		<tr>
             			<td>{{ $user->name }}</td>
                              <td>{{ $user->email }}/td>
                              <td>
                              {!!
              /** Usando laravel Collective para los enlaces.  */
            link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])
                             !!}
                              </td>
             		</tr>
             	</tbody>
                  @endforeach
             </table>

@endsection
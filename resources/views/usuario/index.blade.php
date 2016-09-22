@extends('layouts.admin')
@section('content')
            

            <?php $message=Session::get('message'); /** Generando variable*/?>
            
            @if($message=='store')
                   <div class="alert alert-success">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                         <strong>Title!</strong> Usuario creado exitosamente
                   </div>
            @endif


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
                              <td></td>
             		</tr>
             	</tbody>
                  @endforeach
             </table>

@endsection
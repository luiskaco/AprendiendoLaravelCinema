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
                              <td>{{ $user->email }}</td>
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
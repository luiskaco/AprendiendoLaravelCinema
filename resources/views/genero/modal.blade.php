
<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Actualizar Genero</h4>
			</div>
			<div class="modal-body">
				    <!-- para el envio de token-->
				    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
				    <input type="hidden" id>
				    <!-- incluimos el mismo form usado pra agregar-->
				    @include('genero.forms.genero')  
			</div>
 			<div class="modal-footer">
			{!!link_to('#', $title = 'Actualizar', $attributes = ['id'=>'actualizar','class'=>'btn btn-primary'], $secure = null)!!}
			</div>
		</div>
	</div>
</div>
  <!-- Validador usando  el Request -->
			   @if (count($errors)>0)
			   	        <div class="alert  alert-danger alert-dismissible" role='alert'>
                               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                               <ul>
		                                @foreach($errors->all() as $element) <!--Imprime todo los errores con ALL() -->
		                                        	<li>{!! $element !!}</li>
		                               @endforeach
                           
                               </ul>
                         </div>
			   @endif
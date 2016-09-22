		  <!-- Nota: Los formularios usan Open y close. equivalente <form> </form> -->
       <div class="form-group">
      			 {!! Form::label('Nombres') !!}
      			 {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre del Usuario']) !!}
      	</div>

 		    <div class="form-group">
        	 {!! Form::label('Correo') !!}
        	 {!! Form::email('email',null,['class'=>'form-control', 'placeholder'=>'tucorreo@ejemplo.com']) !!}
        </div>

  <!-- Para password, recordar no pasar el paraMETRO NULL-->
 	  	<div class="form-group">
        	 {!! Form::label('Password') !!}
        	 {!! Form::password('password',['class'=>'form-control']) !!}
        </div>
     
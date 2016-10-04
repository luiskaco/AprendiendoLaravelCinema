<div class="for-group">
	{!! Form::label('Nombre','Nombre:') !!}
	{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre de la pelicula']) !!}
</div>
<div class="for-group">
	{!! Form::label('Elenco','Elenco:') !!}
	{!! Form::text('cast',null,['class'=>'form-control','placeholder'=>'Ingresa el elenco']) !!}
</div>
<div class="for-group">
	{!! Form::label('Direcion','Direción:') !!}
	{!! Form::text('direction',null,['class'=>'form-control','placeholder'=>'Ingresa el Director']) !!}
</div>
<div class="for-group">
	{!! Form::label('Duracion','Duración:') !!}
	{!! Form::text('duration',null,['class'=>'form-control','placeholder'=>'Ingresa la duración']) !!}
</div>
<div class="for-group">
	{!! Form::label('Poster','Poster:') !!}
	{!! Form::file('path') !!}
</div>
<div class="for-group">
	{!! Form::label('Genero','Genero:') !!}
	{!! Form::select('genre_id',$genres) !!}
</div>

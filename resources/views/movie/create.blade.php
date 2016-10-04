@extends('layouts.admin')
   @section('content')
            {!! Form::open(['route'=>'movie.store','method'=>'POST','files' => true ]) !!} <!-- File es clave para subir archivos.-->
                @include('movie.forms.movie')
            {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
   @endsection
@extends('layouts.admin')
@section('content')
	   {!! Form::open() !!}
                 @include('genero.forms.genero')      
	   {!! Form::close() !!}
@endsection
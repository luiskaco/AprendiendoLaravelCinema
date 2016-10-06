|@extends('layouts.principal')
@section('content')

   <div class="contact-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
					<p>Movie Theater</p>
				</div>
				<div class="search v-search">
					<form>
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
						<input type="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
			<!---contact-->
<div class="main-contact">
		 <h3 class="head">CONTACT</h3>
		 <p>WE'RE ALWAYS HERE TO HELP YOU</p>

<!-- forma mas ordenada de usar-->
                  @if(Session::has('message'))
                         <div class="alert  {{ Session::get('success') }}">
                               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              {{ Session::get('message') }}
                         </div>
                  @endif

		 <div class="contact-form">
				{!! Form::open(['route'=>'mail.store','method'=>'POST']) !!}
				 <div class="col-md-6 contact-left">
					 {!! Form::text('name',null,['placeholder'=>'Nombre']) !!}
					 {!! Form::text('email',null,['placeholder'=>'Email']) !!}
				  </div>
				  <div class="col-md-6 contact-right">
				   {!! Form::textarea('mensaje', null,['placeholder'=>'Mensaje']) !!}
				 </div>
				 {!! Form::submit('SEND') !!}
				 {!! Form::close() !!}
				 <div class="clearfix"></div>
			 </form>
	     </div>
</div>

@endsection('content')
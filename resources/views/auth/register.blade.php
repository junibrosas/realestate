@extends('layouts.property')

@section('content')
<div id="content" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 clearfix">

    <div class="col-lg-12">
    	<div class="widget clearfix">

    	<div class="title">
	        <h3>Register Form</h3>
	    </div>
        
        {{-- Include Validation Errors --}}
        @include('errors.validation')
        
    	

	    {!! Form::open(['route' => 'auth.register', 'name'=> 'registerForm', 'id' => 'registerform', 'method' => 'POST']) !!}
	        <div class="form-group">
	            <input type="text" class="form-control" placeholder="First name" name="firstname" value="{{ old('firstname') }}">
	        </div>
	        <div class="form-group">
	            <input type="text" class="form-control" placeholder="Last name" name="lastname" value="{{ old('lastname') }}">
	        </div>
	        {{-- <div class="form-group">
	            <input type="text" class="form-control" placeholder="Name" name="name">
	        </div>  --}}
	        <div class="form-group">
	            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
	        </div>
	        <div class="form-group">
	            <input type="password" class="form-control" placeholder="Password" name="password">
	        </div>
	        <div class="form-group">
	            <input type="password" class="form-control" placeholder="Re-enter password" name="password_confirmation">
	        </div>
	        <div class="form-group">
	            <input type="submit" class="btn btn-primary" value="Register an account">
	        </div>
	    {!! Form::close() !!}
	    </div>

    </div><!-- end register -->            
</div><!-- end content -->
           
@stop
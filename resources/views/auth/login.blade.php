@extends('layouts.property')

@section('content')
<div id="content" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 clearfix">
    
    <div class="col-lg-12">
        <div class="widget clearfix">

        <div class="title">
            <h3>Login Form</h3>
        </div>
        
        {{-- Include Validation Errors --}}
        @include('errors.validation')

        {!! Form::open(['route' => 'auth.login', 'method' => 'POST', 'name' => 'loginform' ]) !!}
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Email Address" name="email">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label> 
                        <input type="checkbox"> Remember me
                    </label>
                </div>
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        {!! Form::close() !!}

        </div>
    </div><!-- end register -->            
</div><!-- end content -->
           
@stop
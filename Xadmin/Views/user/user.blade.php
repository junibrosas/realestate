@extends('cms::layouts.default')

@section('content')
        
    

    <!-- Material (floating) Register -->
    <div class="block block-themed">
        <div class="block-header bg-success">
            <h3 class="block-title">Material (floating)</h3>
        </div>
        <div class="block-content">

            @include('cms::snippets.form-user-register')

        </div>
    </div>
    <!-- END Material (floating) Register -->

    
@stop
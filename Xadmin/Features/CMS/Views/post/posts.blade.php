@extends('admin.layouts.default')

@section('content')
	<div class="text-right page-block-btns"> 
		<a href="{{ route('admin.posts.create') }}" class="btn btn-primary btn-square"><i class="fa fa-plus"></i> {{ trans('admin.posts.add') }}</a>
	</div>
	<div class="block">
	    <div class="block-content">
		    <div class="table-responsive">
	            @if( count($posts) > 0 )
	            	@include('cms::snippets.table-posts')
                    <div class="text-center">
                        {!! $posts->render() !!}
                    </div>
	            @else
	            	<div class="not-available">
	            		No posts available
	            	</div>
	            @endif
	        </div>
	    </div>
	</div>
@stop
@extends('cms::layouts.default')

@section('content')
	<div class="row">
		<div class="col-lg-5">
			<div class="block">
				<div class="block-header bg-gray-lighter">
			        <h3 class="block-title">{{ trans('admin.tags.add-block') }}</h3>
			    </div>
			    <div class="block-content">
			    	
			    	@include('cms::snippets.form-tags')

			    </div>
			</div>
		</div>
		<div class="col-md-7">
			<div class="block">
				<div class="block-header bg-gray-lighter">
			        <h3 class="block-title">{{ trans('admin.tags.list') }}</h3>
			    </div>
			    <div class="block-content">
				    
				    @include('cms::snippets.table-tags')

				    {!! $tags->render() !!}

			    </div>
			</div>
		</div>	
	</div>
@stop
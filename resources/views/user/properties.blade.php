@extends('layouts.property')

@section('content')
<div id="content" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 clearfix">
	<div class="clearfix">

		{{-- User Header --}}
		@include('user.snippets.user-header')

		<?php $j = 0; ?>
		@forelse($properties as $post)
			{{-- Traditionally include the variable file so that it could be shared to this view --}}
			<?php include base_path() .'/resources/views/snippets/variables-property.blade.php'; ?>

			<div class="col-lg-4 col-md-4 col-sm-4 {{ $j == 0 ? 'first' : '' }} {{ $j == 2 ? 'last' : '' }}">
				
				@include('snippets.property-single-medium')

				<div class="btn-group btn-group-sm btn-block" role="group" aria-label="...">
					{!! Form::model($post, ['route' => ['front.user.properties.delete', $post->id], 'method' => 'DELETE', 'class' => 'delete-form']) !!}
						<a href="{{ route('front.user.properties.edit', $post->id) }}" class="btn btn-success" style="width: 50%; float: left"><i class="fa fa-pencil-square-o"></i> Edit</a>
						<button type="submit" class="btn btn-danger" type="button" style="width: 50%; float: right"><i class="fa fa-trash-o"></i> Delete</button>
					{!! Form::close() !!}
				</div>
			</div>

			<?php 
			if( $j == 2 ) $j = 0; // restarts if counter is greater than 3 items.
			$j++ ?>
		@empty
			<div class="text-center"><b>No available properties. Create <a href="{{ route('front.user.properties.create') }} ">New Property</a></b></div>
			<br/>
		@endforelse
	</div>

</div>
@stop
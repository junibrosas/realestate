@extends('admin.layouts.default')

@section('header')
	<link rel="stylesheet" type="text/css" href="{{ asset('js/plugins/jquery-bonsai/jquery.bonsai.css') }}">
@stop

@section('content')
	<div class="row">
		<div class="col-md-4">
			<!-- My Block -->
		    <div class="block">
			    <div class="block-header">
					<h3 class="block-title">Menu Group</h3>
				</div>
		        <div class="block-content">
		            <div class="row">
		            	<div class="col-md-12">
		            		<p>Link lists help your customers navigate around your website. They can be added to your theme via the Storefront Editor.</p>
			            	<p>Link lists can also be used to create drop-down navigation for your storefront. <br/><br/>
			            		<a href="#" class="btn-square btn-default btn">Add New Group</a>
			            	</p>
		            	</div>		
		            </div>
		        </div>
		    </div>
    		<!-- END My Block -->
		</div>
		<div class="col-md-8">
			<div class="row">
				@forelse($parentMenus as $menu)
					<div class="col-md-6">
						@include('cms::snippets.table-menu', ['menu' => $menu])
					</div>
				@empty
					<div class="col-md-12">
						<div class="text-center">
							Create a new menu group. <a href="#" class="btn btn-primary">Create</a>
						</div>
					</div>
				@endforelse
			</div>
		</div>
	</div>
@stop

@section('footer')
	<script src="{{ asset('js/plugins/jquery-bonsai/jquery.bonsai.js') }}"></script>
	<script type="text/javascript">
		$(function(){
			/*$('#expList ol:first-child').bonsai({
				expandAll: true,
				handleDuplicateCheckboxes: true // optional
			});*/
		});
	</script>
@stop
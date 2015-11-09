@extends('layouts.property')

@section('content')

<div id="content" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 clearfix">

	<div class="property_wrapper boxes clearfix">

		{{-- User Header --}}
		@include('user.snippets.user-header')

		<h3 class="big_title">List Property Form<small>You can submit your property</small></h3>
			@if($post->id)
				{!! Form::open(['route' => ['front.user.properties.update', $post->id], 'method'  => 'POST', 'class' => 'form-horizontal push-10-t', 'enctype' => 'multipart/form-data']) !!}
						<input name="_method" type="hidden" value="PUT">
				@else 
					{!! Form::open(['route' => ['front.user.properties.store', $post->id], 'method'  => 'POST', 'class' => 'form-horizontal push-10-t' , 'enctype' => 'multipart/form-data']) !!}
				@endif
				{{-- Define the Post Type --}}        
				<input name="post_type" type="hidden" value="post">
				<input name="post" type="hidden" value="{{ $post->id }}">
				
				<label for="title">Title</label>
				<input type="text" id="title" class="form-control" placeholder="Title" name="title" value="{{ $post->title }}" required="required">    
				
				<label for="address">Address</label>
				<input id="address" type="text" class="form-control" placeholder="Address" name="meta[address]" value="{{ _postMeta($post->id, 'address') }}" required="required">     
				
				<label for="description">Description</label>
				<textarea class="form-control" name="content" id="description" rows="6" placeholder="Add property details goes here">@if( $post->content ){!! $post->content !!}@endif </textarea>
				
				<label for="status">Status</label>
				<div class="col-sm-12">
				
				<?php 
				$propertyStatuses = _propertyStatuses();
				$propertyStatuses[0] = 'Please Select';
				$propertyStatuses = array_reverse($propertyStatuses);
				$propertyStatus = _postMeta($post->id, 'property_status') ? _postMeta($post->id, 'property_status') : 0;
				?>
				{!! Form::select('meta[property_status]', $propertyStatuses, $propertyStatus, ['class' => 'form-control', 'size' => 1] ) !!}
				</div>

				<label for="country">Country</label>
				<div class="col-sm-12">
				<?php 
				$countries = _dataCountries();
				?>
				{!! Form::select('meta[country]', $countries, _postMeta($post->id, 'country'), ['class' => 'form-control', 'size' => 1, 'id' => 'country'] ) !!}
				</div>

				<label for="location">Location</label>
				<div class="col-sm-12">
				<?php 
				$cities = _dataCities(_dataCountriesAndLocation()[0]['name']);
				?>
				{!! Form::select('meta[location]', $cities, null, ['class' => 'form-control', 'size' => 1, 'id' => 'location', 'data-selected-location' => _postMeta($post->id, 'location')] ) !!}
				</div>
				 <hr>   
					<div class="clearfix">
						<label>Amenities</label><br>
						@foreach(_dataAmenities() as $amenity)
							<?php $amenityTitle = $amenity['title'] ?>
							<div class="col-lg-4">
								<label>{{ $amenityTitle }}</label>
								<input class="form-control" type="text" name="meta[amenities][{{ $amenityTitle }}]" value="{{ _postMeta($post->id, ['meta_key'=>'amenities', 'meta_value' => $amenityTitle]) }}">
							</div>
						@endforeach
					</div><!-- end row --> 
					<hr>   
					<div class="row clearfix">  
						<div class="col-lg-6 col-md-6 col-sm-12">                                   
							<label>Price</label><br>
							<div class="input-group">
								<span class="input-group-addon">$</span>
								<input type="text" class="form-control" name="meta[price]" value="{{ _postMeta($post->id, 'price') }}" required="required">
								<span class="input-group-addon">.00</span>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">                                   
							<label>Area</label><br>
							<div class="input-group">
								<input type="text" class="form-control" name="meta[area]" value="{{ _postMeta($post->id, 'area') }}">
								<span class="input-group-addon">m<sup>2</sup></span>
							</div>
						</div>                                        
					</div><!-- end row -->
					
					<hr>
					<label>Submit Screenshot</label>
					<div class="fileupload fileupload-new" data-provides="fileupload">
						<div class="fileupload-preview thumbnail">
							@if( $post->featureImage() )
								<img src="{{ $post->featureImage() }}" alt="{{ $post->title }}" class="post-feature-image img-responsive">
							@endif
						</div>
					<div>
					<span class="btn btn-primary btn-file">
						<span class="fileupload-new">Select image</span>
						<span class="fileupload-exists">Change</span>
						<input type="file" name="file">
					</span>
					<a href="#" class="btn btn-primary fileupload-exists" data-dismiss="fileupload">Remove</a>
					</div>
					</div>
					
					<div class="clearfix"></div>
					
					<hr>
					
					<label for="geocomplete">Location Search</label>
					<input id="geocomplete" type="text" class="form-control" placeholder="Type in an address" name="meta[geo_location]" value="{{ _postMeta($post->id, 'geo_location') }}">
					<input id="find" type="button" class="btn btn-primary" value="Find Address" />    
					
					<div class="map_canvas"></div>
					<hr>
					
					<label for="geocomplete">Property Category</label>
					<div class="panel-group" id="accordion2">
						<?php
							$categoryList = \Xadmin\Models\Tag::where('type', 'category')->where('parent_id', 0)->get();
						?>
						@forelse( $categoryList as $i => $category)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#{{ str_slug( $category->name )}}">
									{{ $category->name }}
									</a>
									</h4>
								</div>
								<div id="{{ str_slug( $category->name )}}" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="row">
										<?php 
											$repo = new \Xadmin\Repositories\TagRepo;
											$subCategories = $repo->subCategories( $category->id );
											foreach( $subCategories as $sub ){ ?>
												<div class="col-md-6">
													<label class="css-input css-checkbox css-checkbox-default">
														<input type="checkbox" name="category[]"  {{ _tagExistInPost( $post->id, $sub->id ) ? 'checked' : '' }} value="{{ $sub->id }}" ><span></span>
														{{ $sub->name }} 
													</label>
												</div>
											<?php }

										?>
										</div>
									</div>
								</div>
							</div>
						@empty
							<div class="text-center">No available category</div>
						@endforelse
					</div>
					<hr/>
					<label for="post-visibility">Post Visibility</label><br/>
					<label class="css-input switch switch-sm switch-primary">
					<?php 
						$isVisible = true;
						if($post->id && $post->is_visible == false){
							$isVisible = false;
						} 
					?>
					<input id="post-visibility" type="checkbox" name="is_visible" {{ $isVisible ? 'checked' : ''  }}><span></span> Hidden/Visible
					</label>
					<br><br>
					<label for="blog-publishing-date">Publish Date</label>
					<input class="js-datepicker form-control" type="text" id="blog-publishing-date" name="published_at" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="{{ $post->id ? date('Y-m-d', strtotime($post->published_at)) : '' }}">
							 <hr>
				<button type="submit" class="btn btn-primary">SEND DETAILS</button>                   
			{!! Form::close() !!} <!-- end search form -->
	</div><!-- end property_wrapper -->                
</div><!-- end content -->



@stop

@section('head')
<link rel="stylesheet" href="{{ asset('xadmin/js/plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css') }}">
@stop

@section('footer')
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
<script src="{{ asset('xadmin/js/plugins/geocomplete/jquery.geocomplete.js') }}"></script>
<script src="{{ asset('xadmin/js/plugins/geocomplete/logger.js') }}"></script>
<script src="{{ asset('xadmin/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('realestate/js/bootstrap-fileupload.js') }}"></script>
<!-- Script for Country and Location -->
@include('cms::snippets.script-country-location')

<script>
  $(function(){
	// date picker
	jQuery('.js-datepicker').add('.input-daterange').datepicker({
		weekStart: 1,
		autoclose: true,
		todayHighlight: true
	});
	var options = {
		map: ".map_canvas"
	};
	
	$("#geocomplete").geocomplete(options)
	  .bind("geocode:result", function(event, result){
		$.log("Result: " + result.formatted_address);
	  })
	  .bind("geocode:error", function(event, status){
		$.log("ERROR: " + status);
	  })
	  .bind("geocode:multiple", function(event, results){
		$.log("Multiple: " + results.length + " results found");
	  });
	
	$("#find").click(function(){
		$("#geocomplete").trigger("geocode");
	});
	
	$("#examples a").click(function(){
		$("#geocomplete").val($(this).text()).trigger("geocode");
		return false;
	});
	
  });
</script>


@stop
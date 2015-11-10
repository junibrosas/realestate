@extends('layouts.property')

{{-- Traditionally include the variable file so that it could be shared to this view --}}
<?php include base_path() .'/resources/views/snippets/variables-property.blade.php'; ?>

@section('footer')
<!-- FlexSlider JavaScript
================================================== -->
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
<script src="{{ asset('xadmin/js/plugins/geocomplete/jquery.geocomplete.js') }}"></script>
<script src="{{ asset('xadmin/js/plugins/geocomplete/logger.js') }}"></script>
<script>
	$(window).load(function() {
		$('#carousel').flexslider({
			animation: "slide",
			controlNav: false,
			directionNav: false,
			animationLoop: true,
			slideshow: true,
			itemWidth: 122,
			itemMargin: 0,
			asNavFor: '#slider'
		});

		$('#slider').flexslider({
			animation: "fade",
			controlNav: false,
			animationLoop: false,
			slideshow: true,
			sync: "#carousel"
		});
	});
</script>

@include('cms::snippets.script-geocomplete')

@stop


@section('content')
<div id="content" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 clearfix">
	<div class="property_wrapper boxes clearfix">
		<div class="boxes_img">
			<div id="slider" class="flexslider clearfix">
				<ul class="slides">
					<li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
					<li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
					<li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
					<li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
					<li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
					<li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
					<li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
					<li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
				</ul>
			</div>
			<div id="carousel" class="flexslider clearfix">
				<ul class="slides">
					<li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
					<li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
					<li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
					<li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
					<li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
					<li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
					<li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
					<li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
				</ul>
			</div>
		</div><!-- boxes_img -->

		<hr>

		<div class="title clearfix">
			<!-- <span class="agent_img pull-right"><a data-placement="bottom" data-toggle="tooltip" data-original-title="Mark ANTHONY" title="" href="single-agent.html"><img width="75" class="img-responsive img-thumbnail" src="{{ asset('realestate/demos/03_team.png') }}" alt=""></a></span> -->
			<h3>{{ $title }}
			<small class="small_title">{{ $address }} <mark>{{ $price }}</mark></small>
			</h3>
		</div><!-- end title -->

		<div class="boxed_mini_details1 clearfix">
			<span class="type first"><strong>Country</strong>{{ $country }}</span>
			<span class="sqft"><strong>Area</strong><i class="icon-sqft"></i> {{ $area }}</span>
			<span class="garage"><strong>Garage</strong><i class="icon-garage"></i> {{ $garage}}</span>
			<span class="bedrooms"><strong>Beds</strong><i class="icon-bed"></i> {{ $beds }}</span>
			<span class="status"><strong>Baths</strong><i class="icon-bath"></i> {{ $baths }}</span>
			<span class="furnished"><strong>Furnish</strong><i class="icon-furnished"></i> Yes</span>
			<span class="pool last"><strong>Pool</strong><i class="icon-pool"></i> Yes</span>
		</div><!-- end boxed_mini_details1 -->

		<div class="property_desc clearfix">

			{!! $content !!}

		</div>
		
		<hr>

		<!-- Property Categories -->
		<div class="property_categories">
			<h5><b>Property Categories</b></h5> 	
			@forelse($postCategories as $postTag)
				<a href="{{ _tagPermalink($postTag->tag) }}">{{ $postTag->tag->name }}</a>,
			@empty
				No category
			@endforelse
		</div>
		
		<hr>

		<!-- Property Video -->
		<!-- <div class="property_video clearfix">
			 <h3 class="big_title">Property Video<small>See the details of the house on the video</small></h3>
			 <iframe src="http://player.vimeo.com/video/73221098?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div> -->

		<div class="property_map clearfix">
			<h3 class="big_title">Property Map<small>{{ _postMeta($post->id, 'geo_location') }}</small></h3>
			
			{{-- Shows the Map here --}}
			<div class="map_canvas"></div>

			<div class="hide">
				<input id="geocomplete" type="text" class="form-control hide"  placeholder="Type in an address" name="meta[geo_location]" value="{{ _postMeta($post->id, 'geo_location') }}"> <br>
				<a id="find" class="btn btn-primary btn-square"><i class="fa fa-map-marker"></i> Find Address</a>
						
				<div class="map">
					<div id="map"></div>
				</div>
			</div>
		</div>
	</div><!-- end property_wrapper -->

	<!-- Property Similarity -->
	<div class="property_wrapper boxes clearfix">
		<h3 class="big_title">Similar Properties<small>View other properties</small></h3>
		<div class="row">
			<?php $j = 0; ?>
			@forelse($relatedPosts as $post)

				{{-- Traditionally include the variable file so that it could be shared to this view --}}
				<?php include base_path() .'/resources/views/snippets/variables-property.blade.php'; ?>

				<div class="col-lg-4 col-md-4 col-sm-4 {{ $j == 0 ? 'first' : '' }} {{ $j == 2 ? 'last' : '' }}">
					
					@include('snippets.property-single-medium')

				</div>
			<?php 
			if( $j == 2 ) $j = 0; // restarts if counter is greater than 3 items.
			$j++ ?>
			@empty
				<div class="text-center"><b>No Available Related Properties</b><br></div>
			@endforelse

		</div><!-- end row -->
	</div>
</div><!-- end content -->
@stop



@extends('layouts.master')

@section('content')
<section id="one-parallax" class="parallax" style="background-image: url('{{ asset('realestate/demos/01_parallax.jpg') }}');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
	<div class="mapandslider">
		<div class="overlay1 dm-shadow">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12">
						<div id="property-slider" class="clearfix">
							<div class="flexslider">
									
									@include('snippets.block-feature-slide')

							</div><!-- end flexslider -->
						</div><!-- end property-slider -->
					</div><!-- end col-lg-8 -->
									
					@include('snippets.block-search-front')
									
				</div><!-- end row -->
			</div><!-- end dm_container -->
		</div>
	</div>
</section><!-- end mapandslider -->

	 

<section id="three-parallax" class="parallax" style="background-image: url('{{ asset('realestate/demos/02_parallax.jpg') }}');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
			<div class="threewrapper">
					<div class="overlay1 dm-shadow">
							<div class="container">
								<div class="row">
										<div class="text-center clearfix">
											<h3 class="big_title">Featured Properties <small>This week's most admired properties </small></h3>
										</div>
											
										{{-- Featured Properties --}}
										@include('snippets.block-home-feature')
																						 
									</div><!-- end row -->
							</div><!-- end container -->
					</div><!-- end overlay1 -->
			</div><!-- end threewrapper -->
	</section><!-- end parallax -->
						
	<section class="generalwrapper dm-shadow clearfix">
		<div class="container">
		<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 first clearfix">
								
									{{-- Category Groups --}}
									@include('snippets.block-category-groups')

							</div>
							
						<div class="col-lg-7 col-md-9 col-sm-9 col-xs-12 clearfix">

									{{-- Tab Properties --}}
									@include('snippets.tab-front-properties')

			</div><!-- end col-lg-7 -->

			<div class="col-lg-2 col-md-6 col-sm-9 col-xs-12 last clearfix">
								
									@include('snippets.block-site-links')
									
			</div><!-- end col-lg-4 --> 
		</div><!-- end row -->
			</div><!-- end dm_container -->  
	</section><!-- end generalwrapper -->
	
	<section class="secondwrapper dm-shadow clearfix">
		<div class="container">       
			<div class="row">
				
				{{-- Bottom Features and Blog--}}
				@include('snippets.block-bottom-feature')

			</div><!-- end row -->
		</div><!-- end dm_container -->  
	</section><!-- end secondwrapper -->

@stop
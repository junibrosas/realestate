@extends('layouts.master')

@section('content')
<section class="generalwrapper dm-shadow clearfix">
	<div class="container">
		<div class="row">
        	<div id="left_sidebar" class="col-lg-2 col-md-3 col-sm-3 col-xs-12 first clearfix">
      			<div class="widget clearfix">
                	<div class="title"><h3>Banner Ads</h3></div>
					<a href="#"><img src="{{ asset('realestate/demos/03_banner.png') }}" alt="" class="img-thumbnail img-responsive"></a>
                </div><!-- end widget -->
                
      			<div class="widget clearfix">
                	<div class="title"><h3>Site Links</h3></div>
                    <ul class="list">
                    	<li><a title="" href="#">Support</a></li>
                    	<li><a title="" href="#">Get in touch</a></li>
                    	<li><a title="" href="#">About us</a></li>
                    	<li><a title="" href="#">Terms of use</a></li>
                    	<li><a title="" href="#">Copyrights</a></li>
                    	<li><a title="" href="#">Join us</a></li>
                    </ul>
                </div>
                                               
            	<div class="widget cats_widget clearfix">
					<div class="title"><h3><i class="icon-sale"></i> For Sale</h3></div>
        			<ul class="real-estate-cats-widget" data-effect="slide-left">
                        <li><a href="#">Housing (21)</a>
                            <ul>
                                <li><a href="#">Apartment</a></li>
                                <li><a href="#">Villa</a></li>
                                <li><a href="#">Summerhouse</a></li>
                                <li><a href="#">Family House</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Workplace (12)</a>
                            <ul>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Apartment</a></li>
                                <li><a href="#">Resort</a></li>
                                <li><a href="#">Emporium</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Land (9)</a>
                            <ul>
                                <li><a href="#">Arable Field</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- end widget -->
                
            	<div class="widget clearfix">
					<div class="title"><h3><i class="icon-rent"></i> For Rent</h3></div>
        			<ul class="real-estate-cats-widget" data-effect="slide-left">
                        <li><a href="#">Housing (15)</a>
                            <ul>
                                <li><a href="#">Apartment</a></li>
                                <li><a href="#">Villa</a></li>
                                <li><a href="#">Summerhouse</a></li>
                                <li><a href="#">Family House</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Workplace (65)</a>
                            <ul>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Apartment</a></li>
                                <li><a href="#">Resort</a></li>
                                <li><a href="#">Emporium</a></li>
                                <li><a href="#">Arable Field</a></li>
                                <li><a href="#">Land</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- end widget -->
            </div><!-- #left_sidebar -->
            
        	<div id="content" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 clearfix">
            	<div class="property_wrapper boxes clearfix">
					<div class="ImageWrapper boxes_img">
						<img class="img-responsive" src="{{ asset('realestate/demos/01_home.jpg') }}" alt="">
						<div class="ImageOverlayH"></div>
						<div class="Buttons StyleMg">
							<span class="WhiteSquare"><a class="fancybox" href="{{ asset('realestate/demos/01_home.jpg') }}"><i class="fa fa-search"></i></a></span>
							<span class="WhiteSquare"><a href="{{ route('front.property') }}"><i class="fa fa-link"></i></a></span>
						</div><!-- end Buttons -->
						<div class="box_type">$2.500.000</div>
						<div class="status_type">For Sale</div>
					</div><!-- ImageWrapper -->
                    
					<div class="title clearfix">
                    	<span class="agent_img pull-right"><a data-placement="bottom" data-toggle="tooltip" data-original-title="Mark ANTHONY" title="" href="single-agent.html"><img width="75" class="img-responsive img-thumbnail" src="{{ asset('realestate/demos/03_team.png') }}" alt=""></a></span>
                    	<h3><a href="{{ route('front.property') }}"> A Family Home for all your needs</a> 
                        <small class="small_title">890 Istanbul / Maslak</small>
                        </h3>
					</div><!-- end title -->

					<div class="boxed_mini_details1 clearfix">
						<span class="type first"><strong>Type</strong><a href="agencies.html">Villa</a></span>
						<span class="sqft"><strong>Area</strong><i class="icon-sqft"></i> 140</span>
						<span class="garage"><strong>Garage</strong><i class="icon-garage"></i> 2</span>
						<span class="bedrooms"><strong>Beds</strong><i class="icon-bed"></i> 3</span>
						<span class="status"><strong>Baths</strong><i class="icon-bath"></i> 1</span>
						<span class="furnished"><strong>Furnish</strong><i class="icon-furnished"></i> Yes</span>
						<span class="pool last"><strong>Pool</strong><i class="icon-pool"></i> Yes</span>
					</div><!-- end boxed_mini_details1 -->
                    
                    <div class="property_desc clearfix">
                    	<p>Lorem Ipsum is simply dummy Lorem Ipsum has been the industry's standard dummy text. Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free.</p>
                        <a class="btn btn-primary btn-xs" href="{{ route('front.property') }}" title="">read more</a>
                    </div>
                </div><!-- end property_wrapper -->

            	<div class="property_wrapper boxes clearfix">
					<div class="ImageWrapper boxes_img">
						<img class="img-responsive" src="{{ asset('realestate/demos/02_home.jpg') }}" alt="">
						<div class="ImageOverlayH"></div>
						<div class="Buttons StyleMg">
							<span class="WhiteSquare"><a class="fancybox" href="{{ asset('realestate/demos/02_home.jpg') }}"><i class="fa fa-search"></i></a></span>
							<span class="WhiteSquare"><a href="{{ route('front.property') }}"><i class="fa fa-link"></i></a></span>
						</div><!-- end Buttons -->
						<div class="box_type">$3.000</div>
						<div class="status_type">For Rent</div>
					</div><!-- ImageWrapper -->
                    
					<div class="title clearfix">
                    	<span class="agent_img pull-right"><a data-placement="bottom" data-toggle="tooltip" data-original-title="Stephania JOHNSON" title="" href="single-agent.html"><img width="75" class="img-responsive img-thumbnail" src="{{ asset('realestate/demos/02_team.png') }}" alt=""></a></span>
                    	<h3><a href="{{ route('front.property') }}">Complete Apertment (1 Year)</a> 
                        <small class="small_title">50/7 Amsterdam / HOLLAND</small>
                        </h3>
					</div><!-- end title -->

					<div class="boxed_mini_details1 clearfix">
						<span class="type first"><strong>Type</strong><a href="agencies.html">Villa</a></span>
						<span class="sqft"><strong>Area</strong><i class="icon-sqft"></i> 140</span>
						<span class="garage"><strong>Garage</strong><i class="icon-garage"></i> 2</span>
						<span class="bedrooms"><strong>Beds</strong><i class="icon-bed"></i> 3</span>
						<span class="status"><strong>Baths</strong><i class="icon-bath"></i> 1</span>
						<span class="furnished"><strong>Furnish</strong><i class="icon-furnished"></i> Yes</span>
						<span class="pool last"><strong>Pool</strong><i class="icon-pool"></i> Yes</span>
					</div><!-- end boxed_mini_details1 -->
                    
                    <div class="property_desc clearfix">
                    	<p>Lorem Ipsum is simply dummy Lorem Ipsum has been the industry's standard dummy text. Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free.</p>
                        <a class="btn btn-primary btn-xs" href="{{ route('front.property') }}" title="">read more</a>
                    </div>
                </div><!-- end property_wrapper -->

            	<div class="property_wrapper boxes clearfix">
					<div class="ImageWrapper boxes_img">
						<img class="img-responsive" src="{{ asset('realestate/demos/03_home.jpg') }}" alt="">
						<div class="ImageOverlayH"></div>
						<div class="Buttons StyleMg">
							<span class="WhiteSquare"><a class="fancybox" href="{{ asset('realestate/demos/03_home.jpg') }}"><i class="fa fa-search"></i></a></span>
							<span class="WhiteSquare"><a href="{{ route('front.property') }}"><i class="fa fa-link"></i></a></span>
						</div><!-- end Buttons -->
						<div class="box_type">$1.560.000</div>
						<div class="status_type">For Sale</div>
					</div><!-- ImageWrapper -->
                    
					<div class="title clearfix">
                    	<span class="agent_img pull-right"><a data-placement="bottom" data-toggle="tooltip" data-original-title="Mustapha COLLIENS" title="" href="single-agent.html"><img width="75" class="img-responsive img-thumbnail" src="{{ asset('realestate/demos/01_team.png') }}" alt=""></a></span>
                    	<h3><a href="{{ route('front.property') }}">Creative & Modern Family House</a> 
                        <small class="small_title">120/79 ST Antalya / TURKEI</small>
                        </h3>
					</div><!-- end title -->

					<div class="boxed_mini_details1 clearfix">
						<span class="type first"><strong>Type</strong><a href="agencies.html">House</a></span>
						<span class="sqft"><strong>Area</strong><i class="icon-sqft"></i> 340</span>
						<span class="garage"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
						<span class="bedrooms"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
						<span class="status"><strong>Baths</strong><i class="icon-bath"></i> 4</span>
						<span class="furnished"><strong>Furnish</strong><i class="icon-furnished"></i> Yes</span>
						<span class="pool last"><strong>Pool</strong><i class="icon-pool"></i> No</span>
					</div><!-- end boxed_mini_details1 -->
                    
                    <div class="property_desc clearfix">
                    	<p>Lorem Ipsum is simply dummy Lorem Ipsum has been the industry's standard dummy text. Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free.</p>
                        <a class="btn btn-primary btn-xs" href="{{ route('front.property') }}" title="">read more</a>
                    </div>
                </div><!-- end property_wrapper -->

            	<div class="property_wrapper boxes clearfix">
					<div class="ImageWrapper boxes_img">
						<img class="img-responsive" src="{{ asset('realestate/demos/05_home.png') }}" alt="">
						<div class="ImageOverlayH"></div>
						<div class="Buttons StyleMg">
							<span class="WhiteSquare"><a class="fancybox" href="{{ asset('realestate/demos/05_home.png') }}"><i class="fa fa-search"></i></a></span>
							<span class="WhiteSquare"><a href="{{ route('front.property') }}"><i class="fa fa-link"></i></a></span>
						</div><!-- end Buttons -->
						<div class="box_type">$450.000</div>
						<div class="status_type">For Sale</div>
					</div><!-- ImageWrapper -->
                    
					<div class="title clearfix">
                    	<span class="agent_img pull-right"><a data-placement="bottom" data-toggle="tooltip" data-original-title="Jenny ANTHONY" title="" href="single-agent.html"><img width="75" class="img-responsive img-thumbnail" src="{{ asset('realestate/demos/04_team.png') }}" alt=""></a></span>
                    	<h3><a href="{{ route('front.property') }}">Creative & Modern Family House</a> 
                        <small class="small_title">120/79 ST Antalya / TURKEI</small>
                        </h3>
					</div><!-- end title -->

					<div class="boxed_mini_details1 clearfix">
						<span class="type first"><strong>Type</strong><a href="agencies.html">House</a></span>
						<span class="sqft"><strong>Area</strong><i class="icon-sqft"></i> 980</span>
						<span class="garage"><strong>Garage</strong><i class="icon-garage"></i> 4</span>
						<span class="bedrooms"><strong>Beds</strong><i class="icon-bed"></i> 6</span>
						<span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
						<span class="furnished"><strong>Furnish</strong><i class="icon-furnished"></i> No</span>
						<span class="pool last"><strong>Pool</strong><i class="icon-pool"></i> Yes</span>
					</div><!-- end boxed_mini_details1 -->
                    
                    <div class="property_desc clearfix">
                    	<p>Lorem Ipsum is simply dummy Lorem Ipsum has been the industry's standard dummy text. Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free.</p>
                        <a class="btn btn-primary btn-xs" href="{{ route('front.property') }}" title="">read more</a>
                    </div>
                </div><!-- end property_wrapper -->
                
				<div class="pagination_wrapper clearfix">
                    <!-- Pagination Normal -->
                    <ul class="pagination">
                      <li><a href="#">«</a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li class="disabled"><a href="#">»</a></li>
                    </ul>
                </div>

            </div><!-- end content -->
            
            <div id="right_sidebar" class="col-lg-3 col-md-3 col-sm-3 col-xs-12 last clearfix">
            	<div class="widget clearfix">
                	<div class="search_widget">
                    	<div class="title"><h3><i class="fa fa-search"></i> Search For Property</h3></div>
						<form action="#" id="search_form">
                         	<input type="text" class="form-control" placeholder="Search by ID or property name...">     
						</form><!-- end search form -->
                    </div><!-- end search_widget -->
                </div><!-- end widget -->

             	<div class="widget clearfix">
                	<div class="title"><h3>Banner Ads</h3></div>
					<img data-effect="fade" class="text-center img-thumbnail img-responsive" src="{{ asset('realestate/demos/01_banner.png') }}" alt="">
				</div><!-- end of widget -->  
			</div><!-- end sidebar -->
            
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end generalwrapper -->
@stop
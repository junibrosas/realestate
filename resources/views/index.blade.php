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
                            <ul class="slides">
								<li>
                                    <div class="desc">
                                        <div class="ps-desc">
                                            <h3><a href="#">Sea view duplex villa</a></h3>
                                            <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free. <a href="#">read more</a></p>
                                            <span class="type">Villa</span>
                                            <span class="price">€3 200 000</span>
                                            <a href="#" class="status">On Sale</a>
                                        </div>
                                    </div>
                                    <a href="#"><img src="{{ asset('realestate/demos/02_slider.png') }}" alt=""></a>
								</li>
								<li>
                                    <div class="desc">
                                        <div class="ps-desc">
                                            <h3><a href="#">Home of your dreams</a></h3>
                                            <p>Model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free. <a href="#">read more</a></p>
                                            <span class="type">Family Home</span>
                                            <span class="price">€1 112 000</span>
                                            <a href="#" class="status">On Sale</a>
                                        </div>
                                    </div>
                                    <a href="#"><img src="{{ asset('realestate/demos/01_slider.png') }}" alt=""></a>
								</li>  
								<li>
                                    <div class="desc">
                                        <div class="ps-desc">
                                            <h3><a href="#">Modern house interior</a></h3>
                                            <p>Lo generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free. <a href="#">read more</a></p>
                                            <span class="type">Family Home</span>
                                            <span class="price">€1 300</span>
                                            <a href="#" class="status">On Rent</a>
                                        </div>
                                    </div>
                                    <a href="#"><img src="{{ asset('realestate/demos/03_slider.png') }}" alt=""></a>
								</li>
							</ul><!-- end slides -->
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
                            
                            @include('snippets.block-home-feature')
                                               
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end overlay1 -->
        </div><!-- end threewrapper -->
    </section><!-- end parallax -->
              
    <section class="generalwrapper dm-shadow clearfix">
    	<div class="container">
			<div class="row">
            	<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 first clearfix">
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
                </div>
                
            	<div class="col-lg-7 col-md-9 col-sm-9 col-xs-12 clearfix">
                    <div id="tabbed_widget" class="tabbable clearfix" data-effect="slide-bottom"> 
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab" data-toggle="tab">Hotel</a></li>
                        <li><a href="#tab2" data-toggle="tab">Apartment/Flat</a></li>
                        <li><a href="#tab3" data-toggle="tab">Villa</a></li>
                        <li><a href="#tab4" data-toggle="tab">Commercial</a></li>
                        <li><a href="#tab5" data-toggle="tab">Land</a></li>
                      </ul>
                      <div class="tab-content tabbed_widget clearfix">
                        <div class="tab-pane active" id="tab">
                            <div class="col-lg-4 col-md-4 col-sm-4 first">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/01_home.jpg') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$3.000.00</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Home of your dreams</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 4</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
            
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/02_home.jpg') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$2.332.000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Sea view duplex villa</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 2</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 4</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                                                       
                            <div class="col-lg-4 col-md-4 col-sm-4 last">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/03_home.jpg') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$189.000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Country side house exterior</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
            
                            <div class="col-lg-4 col-md-4 col-sm-4 first">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/04_home.jpg') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$345.000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Executive Home</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 5</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
            
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/05_home.png') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$4.200.00</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Ottoman Style Triplex</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
            
                            <div class="col-lg-4 col-md-4 col-sm-4 last">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/06_home.png') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$2000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Two Week on Miami </a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 1</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 first">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/07_home.png') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$1.210.00</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Wooden Style Family Hose</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 3</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 5</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                                                
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/08_home.png') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$3.100.00</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Modern Family House</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 3</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 last">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/09_home.png') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$2200</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> One Week Istanbul Holiday</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 7</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                        </div><!-- tab pane-->
                        
                        <div class="tab-pane" id="tab2">

                            <div class="col-lg-4 col-md-4 col-sm-4 first">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/09_home.png') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$1.655.000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> One Week Istanbul Holiday</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 4</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/03_home.jpg') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$1.600.000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Country side house exterior</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 7</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                            
                           <div class="col-lg-4 col-md-4 col-sm-4 last">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/01_home.jpg') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$1.000.000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Home of your dreams</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 5</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                             
                            <div class="col-lg-4 col-md-4 col-sm-4 first">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/02_home.jpg') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$3.100.000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Sea view duplex villa</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 4</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                                  
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/04_home.jpg') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$1.200.100</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Executive Home</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 2</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
            
                            <div class="col-lg-4 col-md-4 col-sm-4 last">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/05_home.png') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$11.200.000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Ottoman Style Triplex</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 3</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
            
                            <div class="col-lg-4 col-md-4 col-sm-4 first">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/06_home.png') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$2000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Two Week Holiday on Miami </a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/09_home.png') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$5.500.000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Wooden Style Family Hose</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                                                
                            <div class="col-lg-4 col-md-4 col-sm-4 last">
                                <div class="boxes"> 
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/08_home.png') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$5.100.000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Modern Family House</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                        </div><!-- tab pane -->
                        
                        <div class="tab-pane" id="tab3">
                            <div class="col-lg-4 col-md-4 col-sm-4 first">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/05_home.png') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$14.200.100</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Ottoman Style Triplex</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 1</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
            
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/06_home.png') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$6000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Two Week Holiday on Miami </a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 7</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 12</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 last">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/07_home.png') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$123.000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Wooden Style Family Hose</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 1</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                        
                            <div class="col-lg-4 col-md-4 col-sm-4 first">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/09_home.png') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$2400</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> One Week Istanbul Holiday</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 1</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                                                             
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/02_home.jpg') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$1.222.100</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Sea view duplex villa</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                                  
                            <div class="col-lg-4 col-md-4 col-sm-4 last">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/04_home.jpg') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$2.200.000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Executive Home</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 1</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 first">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/03_home.jpg') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$4.200.00</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Country side house exterior</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                            
                           <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/01_home.jpg') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$1.200.000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Home of your dreams</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                            
                            <div class="col-lg-4 col-md-4 col-sm-4 last">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/08_home.png') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$380.000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Modern Family House</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 1</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                        </div><!-- tab pane -->
                        
                        <div class="tab-pane" id="tab4">
                        
                           <div class="col-lg-4 col-md-4 col-sm-4 first">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/07_home.png') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$124.000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Wooden Style Family Hose</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                        
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/09_home.png') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$340.000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> One Week Istanbul Holiday</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 1</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                                                             
                            <div class="col-lg-4 col-md-4 col-sm-4 last">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/02_home.jpg') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$1.200.000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Sea view duplex villa</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 2</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 11</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                                  
                            <div class="col-lg-4 col-md-4 col-sm-4 first">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/04_home.jpg') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$3.200.500</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Executive Home</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 3</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                            
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/05_home.png') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$1.500.000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Ottoman Style Triplex</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 1</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
            
                            <div class="col-lg-4 col-md-4 col-sm-4 last">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/06_home.png') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$2.200.000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Two Week Holiday on Miami </a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 4</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 3</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                                                            
                          <div class="col-lg-4 col-md-4 col-sm-4 first">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/03_home.jpg') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$189.900</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Country side house exterior</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 3</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                            
                           <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/01_home.jpg') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$1.200.000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Home of your dreams</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                            
                            <div class="col-lg-4 col-md-4 col-sm-4 last">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/08_home.png') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$555.000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Modern Family House</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>            
                        </div><!-- tab pane -->
                        
                        <div class="tab-pane" id="tab5">
                            <div class="col-lg-4 col-md-4 col-sm-4 first">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/06_home.png') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$200.000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Two Week Holiday on Miami </a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                            
                              <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/04_home.jpg') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$1.200.000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Executive Home</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 1</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                            
                          	<div class="col-lg-4 col-md-4 col-sm-4 last">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/03_home.jpg') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$2.200.500</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Country side house exterior</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 3</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                            
                           <div class="col-lg-4 col-md-4 col-sm-4 first">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/05_home.png') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$1.200.000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Ottoman Style Triplex</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                                 
                           <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/01_home.jpg') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$3.200.100</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Home of your dreams</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                            
                            <div class="col-lg-4 col-md-4 col-sm-4 last">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/08_home.png') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$880.000</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Modern Family House</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Area:</strong> 250m²</span>
                                        <span class="status"><strong>Status:</strong> On Sale</span>
                                        <span class="bedrooms last"><strong>Beds:</strong> 5</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                        
                            <div class="col-lg-4 col-md-4 col-sm-4 first">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/07_home.png') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$134.999</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> Wooden Style Family Hose</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 1</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                        
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/09_home.png') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$4200</div>
                                    </div>
                                    <h2 class="title"><a href="single-property.html"> One Week Istanbul Holiday</a></h2>
                                    <div class="boxed_mini_details clearfix">
                                        <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                        <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                    </div>
                                </div><!-- end boxes -->
                            </div>
                                                             
                            	<div class="col-lg-4 col-md-4 col-sm-4 last">
                                    <div class="boxes">
                                    <div class="boxes_img ImageWrapper">
										<a href="single-property.html">
											<img class="img-responsive" src="{{ asset('realestate/demos/02_home.jpg') }}" alt="">
											<div class="PStyleNe"></div>
										</a>
                                        <div class="box_type">$4.200.00</div>
                                    </div>
                                        <h2 class="title"><a href="single-property.html"> Sea view duplex villa</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                        	<span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                        	<span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                        	<span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                        </div>
                                    </div><!-- end boxes -->
                        		</div><!-- tab pane -->
                            </div><!-- tabbed_widget -->
						</div><!-- tab-content -->
					</div> <!-- widget -->  
				</div><!-- end col-lg-7 -->

				<div class="col-lg-3 col-md-6 col-sm-9 col-xs-12 last clearfix">
                 	<div class="widget text-center clearfix">
						<img data-effect="fade" class="img-thumbnail img-responsive" src="{{ asset('realestate/demos/01_banner.png') }}" alt="">
					</div><!-- end of widget -->  
				</div><!-- end col-lg-4 --> 
			</div><!-- end row -->
        </div><!-- end dm_container -->  
    </section><!-- end generalwrapper -->
    
    <section class="secondwrapper dm-shadow clearfix">
    	<div class="container">       
            <div class="row">
            	<div class="col-lg-5 col-md-5 col-sm-12">
                    <h3 class="big_title">Recent Properties <small>Handpicked Properties for you</small></h3>
                    <div id="slider" class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="ps-mini-desc">
									<span class="type">Family Home</span>
									<span class="price">€1 112 000</span>
									<a href="#" class="status">On Sale</a>
                                </div>
                                <img class="img-thumbnail" src="{{ asset('realestate/demos/01_home.jpg') }}" alt="">
                            </li>
                            <li>
                                <div class="ps-mini-desc">
									<span class="type">Villa</span>
									<span class="price">€3 111 000</span>
									<a href="#" class="status">On Sale</a>
                                </div>
                                <img class="img-thumbnail" src="{{ asset('realestate/demos/02_home.jpg') }}" alt="">
                            </li>
                            <li>
                                <div class="ps-mini-desc">
									<span class="type">Apertment</span>
									<span class="price">$2 000 000</span>
									<a href="#" class="status">On Sale</a>
                                </div>
                                <img class="img-thumbnail" src="{{ asset('realestate/demos/03_home.jpg') }}" alt="">
                            </li>
                            <li>
                                <div class="ps-mini-desc">
									<span class="type">Family Home</span>
									<span class="price">€1 112 000</span>
									<a href="#" class="status">On Sale</a>
                                </div>
                                <img class="img-thumbnail" src="{{ asset('realestate/demos/04_home.jpg') }}" alt="">
                            </li>
                            <li>
                                <div class="ps-mini-desc">
									<span class="type">Triplex</span>
									<span class="price">€3 100 000</span>
									<a href="#" class="status">On Sale</a>
                                </div>
                                <img class="img-thumbnail" src="{{ asset('realestate/demos/05_home.png') }}" alt="">
                            </li>
                            <li>
                                <div class="ps-mini-desc">
									<span class="type">Family Home</span>
									<span class="price">€4 211 000</span>
									<a href="#" class="status">On Sale</a>
                                </div>
                                <img class="img-thumbnail" src="{{ asset('realestate/demos/06_home.png') }}" alt="">
                            </li>
                            <li>
                                <div class="ps-mini-desc">
									<span class="type">Home</span>
									<span class="price">€3 000</span>
									<a href="#" class="status">On Rent</a>
                                </div>
                                <img class="img-thumbnail" src="{{ asset('realestate/demos/07_home.png') }}" alt="">
                            </li>
                            <li>
                                <div class="ps-mini-desc">
									<span class="type">Apertment</span>
									<span class="price">€1 112 000</span>
									<a href="#" class="status">On Sale</a>
                                </div>
                                <img class="img-thumbnail" src="{{ asset('realestate/demos/08_home.png') }}" alt="">
                            </li>  
                        </ul>
                    </div>
                    <div id="carousel" class="flexslider">
                        <ul class="slides">
                            <li><img class="img-thumbnail" src="{{ asset('realestate/demos/01_home.jpg') }}" alt=""></li>
                            <li><img class="img-thumbnail" src="{{ asset('realestate/demos/02_home.jpg') }}" alt=""></li>
                            <li><img class="img-thumbnail" src="{{ asset('realestate/demos/03_home.jpg') }}" alt=""></li>
                            <li><img class="img-thumbnail" src="{{ asset('realestate/demos/04_home.jpg') }}" alt=""></li>
                            <li><img class="img-thumbnail" src="{{ asset('realestate/demos/05_home.png') }}" alt=""></li>
                            <li><img class="img-thumbnail" src="{{ asset('realestate/demos/06_home.png') }}" alt=""></li>
                            <li><img class="img-thumbnail" src="{{ asset('realestate/demos/07_home.png') }}" alt=""></li>
                            <li><img class="img-thumbnail" src="{{ asset('realestate/demos/08_home.png') }}" alt=""></li>
                        </ul>
                    </div>  
                </div><!-- end col6 -->
                
            	<div class="col-lg-7 col-md-7 col-sm-12">
					<h3 class="big_title">News & Updates <small>The most popular real estate news</small></h3>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <article class="blog-wrap">
                            <div class="blog-media">
                               <iframe src="http://player.vimeo.com/video/73221098?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div><!-- end blog media -->
                            <div class="post-date">
                                <span class="day">01</span>
                                <span class="month">Feb</span>
                            </div><!-- end post-date -->
        
                            <div class="post-content">
                                <h2><a href="single-blog.html">New York City 124/56 for Sale!</a></h2>
                                    <p>Er zijn vele variaties van passages van Lorem Ipsum beschikbaar maar het merendeel.</p>
                                <div class="post-meta">
                                    <span><i class="fa fa-user"></i> <a href="#">John Doe</a> </span>
                                    <span><i class="fa fa-tag"></i> <a href="#">Video</a> </span>
                                    <span><i class="fa fa-comments"></i> <a href="#">1 Comments</a></span>
                                </div><!-- end post-meta -->
                                    <a href="single-blog.html" class="btn btn-primary btn-xs">read more</a>
                            </div><!-- post-content -->
                        </article><!-- end blog wrap -->
                    </div><!-- end col-lg-6 -->
                    
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <article class="blog-wrap">
                            <div class="blog-media">
								<iframe src="http://player.vimeo.com/video/64550407?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div><!-- end blog media -->
                            <div class="post-date">
                                <span class="day">12</span>
                                <span class="month">Jan</span>
                            </div><!-- end post-date -->
        
                            <div class="post-content">
                                <h2><a href="single-blog.html">Estate+ video presentation</a></h2>
                                    <p>Er zijn vele variaties van passages van Lorem Ipsum beschikbaar maar het merendeel.</p>
                                <div class="post-meta">
                                    <span><i class="fa fa-user"></i> <a href="#">Mark Doe</a> </span>
                                    <span><i class="fa fa-tag"></i> <a href="#">Video</a> </span>
                                    <span><i class="fa fa-comments"></i> <a href="#">11 Comments</a></span>
                                </div><!-- end post-meta -->
                                    <a href="single-blog.html" class="btn btn-primary btn-xs">read more</a>
                            </div><!-- post-content -->
                        </article><!-- end blog wrap -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end col7 -->
			</div><!-- end row -->
        </div><!-- end dm_container -->  
    </section><!-- end secondwrapper -->
  
@stop
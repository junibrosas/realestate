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
        			<ul class="real-estate-cats-widget">
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
        			<ul class="real-estate-cats-widget">
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
					<div class="boxes_img">
                        <div id="slider" class="flexslider clearfix">
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
                        <div id="carousel" class="flexslider clearfix">
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
					</div><!-- boxes_img -->
                    
                    <hr>
                    
					<div class="title clearfix">
                    	<span class="agent_img pull-right"><a data-placement="bottom" data-toggle="tooltip" data-original-title="Mark ANTHONY" title="" href="single-agent.html"><img width="75" class="img-responsive img-thumbnail" src="{{ asset('realestate/demos/03_team.png') }}" alt=""></a></span>
                    	<h3>A Family Home for all your needs 
                        <small class="small_title">890 Istanbul / Maslak <mark>$2.550.000</mark></small>
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

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.</p>
                        
                        <p>Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.</p>
                        
                        <p>Sed blandit turpis vel ipsum malesuada, in vestibulum orci iaculis. Nam feugiat feugiat massa, at ultricies mi laoreet in. Donec porttitor mauris eu eleifend condimentum. Nullam vulputate metus at odio vestibulum porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean at tortor id neque dapibus bibendum id vitae odio. Vivamus dictum purus et faucibus viverra. Duis a leo arcu. Nullam ornare accumsan augue. Cras quis luctus justo, ac rhoncus tellus. Aliquam erat volutpat. Nam tempus varius lectus varius elementum.</p>
                        
                        <p>Aliquam vitae fermentum diam. Pellentesque nec congue mi. Suspendisse congue eros urna, sed fringilla orci viverra id. Ut eget bibendum odio, a commodo justo. Nulla ac tempus nunc. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam quis tellus nibh. Quisque cursus faucibus lorem eget auctor. Vestibulum ullamcorper nec diam a tincidunt. Quisque vulputate massa neque, a semper leo cursus condimentum. Proin magna nunc, tempor sit amet neque vitae, consequat vulputate quam. </p>
                    </div>
                    
                    <hr>
                    
                    <div class="property_video clearfix">
                    	 <h3 class="big_title">Property Video<small>See the details of the house on the video</small></h3>
                         <iframe src="http://player.vimeo.com/video/73221098?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                                           
                    <hr>
                    
                    <div class="property_map clearfix">
                    	<h3 class="big_title">Property Map<small>See the address of the house on the map</small></h3>
                     	<div class="map">
							<div id="map"></div>
						</div>
                    </div>
                </div><!-- end property_wrapper -->

				<div class="agent_boxes boxes clearfix">
                	<div class="agent_details clearfix">
                    	<div class="col-lg-7 col-md-7 col-sm-12">
                        	<div class="agents_widget">
                        		<h3 class="big_title">Mark ANTHONY<small>Total (36) pieces of property</small></h3>
                                <div class="agencies_widget row"> 
                                    <div class="col-lg-5 clearfix">
                                        <img class="img-thumbnail img-responsive" src="{{ asset('realestate/demos/03_team.png') }}" alt="">
                                    </div><!-- end col-lg-5 -->
                                    <div class="col-lg-7 clearfix">
                                        <div class="agencies_meta clearfix">
                                            <span><i class="fa fa-envelope"></i> <a href="mailto:support@sitename.com">support@sitename.com</a></span>
                                            <span><i class="fa fa-link"></i> <a href="#">www.sitename.com</a></span>
                                            <span><i class="fa fa-phone-square"></i> +1 232 444 55 66</span>
                                            <span><i class="fa fa-print"></i> +1 232 444 55 66</span>
                                            <span><i class="fa fa-facebook-square"></i> <a href="#">facebook.com/tagline</a></span>
                                            <span><i class="fa fa-twitter-square"></i> <a href="#">twitter.com/tagline</a></span>
                                            <span><i class="fa fa-linkedin-square"></i> <a href="#">linkedin.com/tagline</a></span>
                                        </div><!-- end agencies_meta -->
                                        
                                    </div><!-- end col-lg-7 -->
                                    
                                    <div class="clearfix"></div>
                                    
                                    <hr>
                                    
                                    <div class="col-lg-12">
                                    	<p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.. Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free.</p>
                                    </div>
                                </div><!-- end agencies_widget -->
                            </div><!-- agents_widget -->
                        </div><!-- end col-lg-7 -->
                        
          				<div class="col-lg-5 col-md-5 col-sm-12">
                        	<h3 class="big_title">Contact Agent<small>Have a Question? Ask this Agent</small></h3>
                            <form action="#" id="agent_form">
                                <input type="text" class="form-control" placeholder="Name">     
                                <input type="text" class="form-control" placeholder="Email">     
                                <input type="text" class="form-control" placeholder="Phone">     
                                <input type="text" class="form-control" placeholder="Subject">     
                                <textarea class="form-control" rows="5" placeholder="Message goes here..."></textarea>
                                <button class="btn btn-primary">Send Message</button>   
                            </form><!-- end search form -->
                            
                        </div><!-- end col-lg-6 -->
                    </div><!-- end agent_details -->
                </div><!-- end agent_boxes -->
                
				<div class="property_wrapper boxes clearfix">
					<h3 class="big_title">Similar Properties<small>View other properties from this agent</small></h3>
             		<div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 first">
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
        
                        <div class="col-lg-4 col-md-6 col-sm-12">
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
                                                   
                        <div class="col-lg-4 col-md-6 col-sm-12 last">
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
                    </div><!-- end row -->
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

            	
				</div><!-- end of widget -->
             	<div class="widget clearfix">
                	<div class="title"><h3>Banner Ads</h3></div>
					<img data-effect="fade" class="text-center img-thumbnail img-responsive" src="{{ asset('realestate/demos/01_banner.png') }}" alt="">
				</div><!-- end of widget -->  
			</div><!-- end sidebar -->
            
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end generalwrapper -->
@stop
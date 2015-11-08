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
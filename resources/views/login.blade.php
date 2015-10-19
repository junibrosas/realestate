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

                <div class="col-lg-6 col-md-6 col-sm-12">	
                <div class="widget clearfix">
                    <div class="title">
                        <h3>Login Form</h3>
                    </div>
                    <form id="loginform" method="post" name="loginform" action="">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label> 
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </form>
                    </div>
                </div><!-- end login -->
                
                <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="widget clearfix">
                    <div class="title">
                        <h3>Register Form</h3>
                    </div>
                    <form id="registerform" method="post" name="registerform" action="">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Re-enter password">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Register an account">
                        </div>
                    </form>
                    </div>
                </div><!-- end register -->            
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
                	<div class="agents_widget">
                    	<div class="title"><h3><i class="fa fa-users"></i> Our Agents</h3></div>
						<div class="agent boxes clearfix">
                            <div class="image">
                            	<img class="img-circle img-responsive img-thumbnail" src="{{ asset('realestate/demos/01_team.png') }}" alt="">
                            </div><!-- image -->
                            <div class="agent_desc">
                            	<h3 class="title">Mustapha COLLIENS</h3>
								<p><span><i class="fa fa-envelope"></i> info@yoursite.com</span></p>
                                <p><span><i class="fa fa-phone-square"></i> +90 333 444 55 66</span></p>
                            </div><!-- agento desc -->
						</div>
						<div class="agent boxes clearfix">
                            <div class="image">
                            	<img class="img-circle img-responsive img-thumbnail" src="{{ asset('realestate/demos/02_team.png') }}" alt="">
                            </div><!-- image -->
                            <div class="agent_desc">
                            	<h3 class="title">Stephania JOHNSON</h3>
								<p><span><i class="fa fa-envelope"></i> info@yoursite.com</span></p>
                                <p><span><i class="fa fa-phone-square"></i> +90 333 444 55 66</span></p>
                            </div><!-- agento desc -->
						</div>
						<div class="agent boxes clearfix">
                            <div class="image">
                            	<img class="img-circle img-responsive img-thumbnail" src="{{ asset('realestate/demos/03_team.png') }}" alt="">
                            </div><!-- image -->
                            <div class="agent_desc">
                            	<h3 class="title">Mark ANTHONY</h3>
								<p><span><i class="fa fa-envelope"></i> info@yoursite.com</span></p>
                                <p><span><i class="fa fa-phone-square"></i> +90 333 444 55 66</span></p>
                            </div><!-- agento desc -->
						</div>     
						<div class="agent boxes clearfix">
                            <div class="image">
                            	<img class="img-circle img-responsive img-thumbnail" src="{{ asset('realestate/demos/04_team.png') }}" alt="">
                            </div><!-- image -->
                            <div class="agent_desc">
                            	<h3 class="title">Jenny ANTHONY</h3>
								<p><span><i class="fa fa-envelope"></i> info@yoursite.com</span></p>
                                <p><span><i class="fa fa-phone-square"></i> +90 333 444 55 66</span></p>
                            </div><!-- agento desc -->
						</div>                          
                    </div><!-- end of agents_widget -->
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
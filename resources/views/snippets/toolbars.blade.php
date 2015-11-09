<div class="toolbar-wrapp">
	<div class="sticky-toolbar">
		<ul>
			<li id="support"><a title="Support Menu" title="" href="#" ><i class="fa fa-link"></i></a></li>
			<li id="help"><a href="#ContactFormModal" data-toggle="modal" title="Ask a question"><i class="fa fa-question"></i></a></li>
			<li id="accountlogin"><a title="Login account" href="#" ><i class="fa fa-lock"></i></a></li>
		</ul>
	</div><!--/ sticky-toolbar-->
		
	<div class="popup">
		<ul>
			<li><a href="contact.html">Contact</a></li>
			<li><a href="forum.html">Support</a></li>
			<li><a href="ticket.html">Open Ticket</a></li>
		</ul>
	</div><!--/ popup-->

	<div class="loginpopup">
		<h3><i class="fa fa-key"></i> Agent Login Form</h3>
		{!! Form::open(['route' => 'auth.login', 'method' => 'POST', 'name' => 'loginform' , 'id' => 'loginform']) !!}
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user"></i></span>
					<input type="text" class="form-control" placeholder="Email Address" name="email">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-lock"></i></span>
					<input type="password" class="form-control" placeholder="Password" name="password">
				</div>
			</div>
			<div class="form-group">
				<div class="checkbox">
					<label><input type="checkbox"> Remember me</label>
				</div>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Sign in</button> <a title="Register" href="{{ route('auth.register') }}" class="btn btn-primary">Register</a>
			</div>
		{!! Form::close() !!}
	</div><!--/ login-popup-->
</div><!--/ toolbar-wrapp-->

<div class="modal fade" id="ContactFormModal" tabindex="-1" role="dialog" aria-labelledby="ContactFormModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="big_title">Do you have questions?
					<small>Dont worry! We're here to help you</small>
				</h3>
			</div>
			<div class="modal-body clearfix">
				<div class="text-left">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="ImageWrapper boxes_img">
							<img src="{{ asset('realestate/demos/01_about.jpg') }}" class="img-responsive" alt="">
							<div class="ImageOverlayH"></div>
								<div class="Buttons StyleSc">
									<span class="WhiteSquare"><a href="#"><i class="fa fa-facebook"></i></a></span>
									<span class="WhiteSquare"><a href="#"><i class="fa fa-twitter"></i></a></span>
									<span class="WhiteSquare"><a href="#"><i class="fa fa-google-plus"></i></a></span>
								</div>
						</div>
						<div class="servicetitle"><h3>Contact Details</h3></div>
						<ul>
							<li><i class="fa fa-external-link"></i> www.yoursite.com</li>
							<li><i class="fa fa-envelope"></i> info@yoursite.com</li>
							<li><i class="fa fa-phone-square"></i> +90 333 444 55 66</li>
							<li><i class="fa fa-phone-square"></i> +90 333 444 55 66</li>
						</ul>
					</div>
					
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<form id="contact" class="row" action="contact.php" name="contactform" method="post">
							<input type="text" name="name" id="name" class="form-control" placeholder="Name"> 
							<input type="text" name="email" id="email" class="form-control" placeholder="Email"> 
							<input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
							<input type="text" name="subject" id="subject" class="form-control" placeholder="Subject"> 
							<textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Your Message ..."></textarea>
							<button type="button" class="btn btn-primary">Send Message</button>
						</form>
					</div>
				</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="topbar clearfix">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="callus">
					<p>
					<span><i class="fa fa-envelope"></i> info@yoursite.com</span>
					<span><i class="fa fa-phone-square"></i> +90 333 444 55 66</span>
					</p>
				</div><!-- end callus-->
			</div><!-- end col-lg-6 -->
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="marketing">
					{{-- <ul class="topflags pull-right">
						<li><a data-placement="bottom" data-toggle="tooltip" data-original-title="German" title="" href="#"><img alt="de" src="{{ asset('realestate/images/flags/de.png') }}"></a></li>
						<li><a data-placement="bottom" data-toggle="tooltip" data-original-title="Turkish" title="" href="#"><img alt="tr" src="{{ asset('realestate/images/flags/tr.png') }}"></a></li>
						<li><a data-placement="bottom" data-toggle="tooltip" data-original-title="Geek" title="" href="#"><img alt="gr" src="{{ asset('realestate/images/flags/gr.png') }}"></a></li>
					</ul> --}}
					<ul class="topmenu pull-right">
						@if(!Auth::check())
							<li><a href="{{ route('auth.login') }}"><i class="fa fa-lock"></i> Login</a></li>
							<li><a href="{{ route('auth.register') }}"><i class="fa fa-book"></i> Register</a></li>
						@else
							<li><a href="{{ route('front.user.properties.index') }}">Welcome, {{ \Auth::user()->name }} </a></li>
							<li><a href="{{ route('auth.logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>
						@endif
						
					</ul><!-- topmenu -->
				</div><!-- end marketing -->
			</div><!-- end col-lg-6 -->
		</div><!-- end row -->
	</div><!-- end container -->
</div><!-- end topbar -->        

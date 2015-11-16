<div class="col-lg-5 col-md-5 col-sm-12">
		<h3 class="big_title">Recent Properties <small>Handpicked Properties for you</small></h3>
		<div id="slider" class="flexslider">
				<ul class="slides">
				@forelse( $recentPosts as $post )
					{{-- Traditionally include the variable file so that it could be shared to this view --}}
					<?php include base_path() .'/resources/views/snippets/variables-property.blade.php'; ?>

					<li>
						<div class="ps-mini-desc">
						<span class="price">{{ $price }}</span>
						<a href="{{ $url }}" class="status">{{ $propertyType }}</a>
						</div>
						<img class="img-thumbnail" src="{{ $featureImageSource }}" alt="">
					</li>
				@empty
				@endforelse
				</ul>
		</div>
		<div id="carousel" class="flexslider">
				<ul class="slides">
					@forelse( $recentPosts as $post )
						{{-- Traditionally include the variable file so that it could be shared to this view --}}
						<?php include base_path() .'/resources/views/snippets/variables-property.blade.php'; ?>

						<li>
							<img class="img-thumbnail" src="{{ $featureImageSource }}" alt="">
						</li>
					@empty
					@endforelse
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
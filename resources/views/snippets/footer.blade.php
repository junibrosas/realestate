<footer class="footer1">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 first clearfix">
           		<div class="widget clearfix">
                	<div class="title"><h3>Site Links</h3><hr></div>
                        <ul class="list">
                        <?php $menuItems = Menu::get('menu-front')->roots(); ?>
                        @forelse($menuItems as $item)
                            <?php $subMenuClass = $item->hasChildren() ? 'nav-submenu' : ''; ?>
                            <li class="{{ $item->attributes() != "" ? 'active' : '' }} {{ $subMenuClass }}">
                                <a href="{{ $item->url() }}">
                                    {!! $item->title !!}
                                </a>
                            </li>
                        @empty
                            <div class="text-center">No Available Links</div>
                        @endforelse
                    </ul>
                </div>
            </div><!-- end col-lg-3 -->
        	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-xs-12 clearfix">
           		<div class="widget clearfix">
                	<div class="title"><h3><i class="fa fa-home"></i> About Estate+</h3><hr></div>
                    	<p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free.</p>
                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-info"></i> read more</a>
                </div>
            </div><!-- end col-lg-3 -->
        	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-xs-12 clearfix">
           		<div class="widget clearfix">
                	<div class="title"><h3>Twitter Stream</h3><hr></div>
                    <ul class="tweet">
                    	<li><a title="" href="#">@support</a> Latin words, combined with sentence structures, to generate Lorem Ipsum which looks reasonable.
                        <small><a href="#">12 Minutes Ago</a></small>
                        </li>
                    	<li><a title="" href="#">@designingmedia</a> To generate Lorem Ipsum which looks reasonable.
                        <small><a href="#">34 Minutes Ago</a></small>
                        </li>
                    </ul>
                </div>
            </div><!-- end col-lg-3 -->
        	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 last clearfix">
           		<div class="widget clearfix">
                	<div class="title"><h3><i class="fa fa-envelope-o"></i> Newsletter Form</h3><hr></div>
                    <p>Latin words, combined with a handful of model sentence structures, to generate.</p>
                      <form class="form-inline" role="form">
                        <div class="form-group">
                          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                        </div>
                        <button type="submit" class="btn btn-primary">SUBSCRIBE</button>
                      </form>
                </div>
            </div><!-- end col-lg-4 -->
        </div><!-- row -->
    </div><!-- container -->
</footer><!-- footer1 -->
<section class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6">
                <p><small>Estate+ a real estate template. Copyright 2014</small></p>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6">
                <div class="social clearfix pull-right">
                    <span><a data-placement="top" data-toggle="tooltip" data-original-title="Facebook" title="" href="#"><i class="fa fa-facebook"></i></a></span>
                    <span><a data-placement="top" data-toggle="tooltip" data-original-title="Twitter" title="" href="#"><i class="fa fa-twitter"></i></a></span>
                    <span><a data-placement="top" data-toggle="tooltip" data-original-title="Linkedin" title="" href="#"><i class="fa fa-linkedin"></i></a></span>
                    <span><a data-placement="top" data-toggle="tooltip" data-original-title="Instagram" title="" href="#"><i class="fa fa-instagram"></i></a></span>
                    <span><a data-placement="top" data-toggle="tooltip" data-original-title="Google Plus" title="" href="#"><i class="fa fa-google-plus"></i></a></span>
                </div><!-- end social -->
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end copyright -->
        
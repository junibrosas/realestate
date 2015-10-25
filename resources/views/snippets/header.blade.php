<header class="header1">
	<div class="container">
    	<div class="row header-row">
            <div class="col-lg-4 col-md-6 col-sm-12">
               <div class="logo-wrapper clearfix">
					<div class="logo">
						<a href="index.html" title="Home">
							<img src="{{ asset('realestate/images/logo.png') }}" alt="Estate">
						</a>
					</div><!-- /.site-name -->
				</div><!-- /.logo-wrapper -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
            </div>      
            <div class="col-lg-5 col-md-5 col-sm-12  pull-right">
                <div class="social clearfix pull-right">
                    <span><a data-placement="bottom" data-toggle="tooltip" data-original-title="Facebook" title="" href="#"><i class="fa fa-facebook"></i></a></span>
                    <span><a data-placement="bottom" data-toggle="tooltip" data-original-title="Twitter" title="" href="#"><i class="fa fa-twitter"></i></a></span>
                    <span><a data-placement="bottom" data-toggle="tooltip" data-original-title="Linkedin" title="" href="#"><i class="fa fa-linkedin"></i></a></span>
                    <span><a data-placement="bottom" data-toggle="tooltip" data-original-title="Instagram" title="" href="#"><i class="fa fa-instagram"></i></a></span>
                    <span><a data-placement="bottom" data-toggle="tooltip" data-original-title="Google Plus" title="" href="#"><i class="fa fa-google-plus"></i></a></span>
                </div>
            </div>     
        </div><!-- end row -->
        <nav class="navbar navbar-default fhmm" role="navigation">
            <div class="menudrop container">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div><!-- end navbar-header -->
                <div id="defaultmenu" class="navbar-collapse collapse">


                    {{-- Display Front Menu --}}
                    <?php $menuItems = Menu::get('menu-front')->roots(); ?>
                    <ul class="nav navbar-nav">
                        @foreach($menuItems as $item)
                            <?php $subMenuClass = $item->hasChildren() ? 'nav-submenu' : ''; ?>
                            <li class="{{ $item->attributes() != "" ? 'active' : '' }} {{ $subMenuClass }}">
                                <a href="{{ $item->url() }}" style="text-transform: uppercase;">
                                    {!! $item->title !!}
                                </a>
                                {{-- @if($item->hasChildren())
                                    <ul>
                                        @foreach($item->children() as $child)
                                            <li><a href="{{ $child->url() }}">{!! $child->title !!}</a></li>
                                        @endforeach
                                    </ul>
                                @endif --}}
                            </li>
                        @endforeach
                    </ul>

                    {{-- <ul class="nav navbar-nav">

                        <li class="dropdown fhmm-fw active"><a href="{{ route('front.index') }}"><i class="fa fa-home"></i> HOME</a></li><!-- mega menu -->

                        <li class="dropdown fhmm-fw"><a href="{{ route('front.properties') }}">PROPERTIES</a></li><!-- mega menu -->
                        
                    </ul> --}}<!-- end nav navbar-nav -->
                </div><!-- end #navbar-collapse-1 -->
             </div><!-- end dm_container -->
        </nav><!-- end navbar navbar-default fhmm -->
    </div><!-- end container -->
</header><!-- end header -->

@if(!in_array(\Request::route()->getName(), ['front.index']))
    @include('snippets.breadcrumbs')
@endif
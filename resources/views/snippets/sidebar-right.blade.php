<div id="right_sidebar" class="col-lg-3 col-md-3 col-sm-3 col-xs-12 last clearfix">
	<div class="widget clearfix">
    	<div class="search_widget">
        	<div class="title"><h3><i class="fa fa-search"></i> Search For Property</h3></div>
			{!! Form::open(['route' => 'front.search.index', 'method' => 'GET', 'id' => 'search_form']) !!}

             	<input type="text" class="form-control" name="q" placeholder="Search by ID or property name..." value="{{ \Request::get('q') }}">     
			{!! Form::close() !!} <!-- end search form -->
        </div><!-- end search_widget -->
    </div><!-- end widget -->

 	@include('snippets.block-site-links')
    
</div><!-- end sidebar -->
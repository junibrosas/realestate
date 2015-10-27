@extends('layouts.property')

@section('content')

{{-- Traditionally include the variable file so that it could be shared to this view --}}
<?php include base_path() .'/resources/views/snippets/variables-property.blade.php'; ?>

<div id="content" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 clearfix">
    <div class="property_wrapper boxes clearfix">
        <div class="boxes_img">
            <div id="slider" class="flexslider clearfix">
                <ul class="slides">
                    <li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
                    <li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
                    <li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
                    <li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
                    <li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
                    <li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
                    <li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
                    <li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>  
                </ul>
            </div>
            <div id="carousel" class="flexslider clearfix">
                <ul class="slides">
                    <li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
                    <li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
                    <li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
                    <li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
                    <li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
                    <li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
                    <li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
                    <li><img class="img-thumbnail" src="{{ $featureImageSource }}" alt="{{ $title }}"></li>
                </ul>
            </div>  
        </div><!-- boxes_img -->
        
        <hr>
        
        <div class="title clearfix">
            <span class="agent_img pull-right"><a data-placement="bottom" data-toggle="tooltip" data-original-title="Mark ANTHONY" title="" href="single-agent.html"><img width="75" class="img-responsive img-thumbnail" src="{{ asset('realestate/demos/03_team.png') }}" alt=""></a></span>
            <h3>{{ $title }} 
            <small class="small_title">{{ $address }} <mark>{{ $price }}</mark></small>
            </h3>
        </div><!-- end title -->

        <div class="boxed_mini_details1 clearfix">
            <span class="type first"><strong>Type</strong><a href="agencies.html">Villa</a></span>
            <span class="sqft"><strong>Area</strong><i class="icon-sqft"></i> {{ $area }}</span>
            <span class="garage"><strong>Garage</strong><i class="icon-garage"></i> {{ $garage}}</span>
            <span class="bedrooms"><strong>Beds</strong><i class="icon-bed"></i> {{ $beds }}</span>
            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> {{ $baths }}</span>
            <span class="furnished"><strong>Furnish</strong><i class="icon-furnished"></i> Yes</span>
            <span class="pool last"><strong>Pool</strong><i class="icon-pool"></i> Yes</span>
        </div><!-- end boxed_mini_details1 -->
        
        <div class="property_desc clearfix">
            
            {!! $content !!}

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
@stop

@section('footer')
    <!-- FlexSlider JavaScript
    ================================================== -->
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
    <script>
        $(window).load(function() {
            $('#carousel').flexslider({
                animation: "slide",
                controlNav: false,
                directionNav: false,
                animationLoop: true,
                slideshow: true,
                itemWidth: 122,
                itemMargin: 0,
                asNavFor: '#slider'
            });
       
            $('#slider').flexslider({
                animation: "fade",
                controlNav: false,
                animationLoop: false,
                slideshow: true,
                sync: "#carousel"
            });
        });
    </script>

    <script type="text/javascript">
    var locations = [
    ['<div class="infobox agents_widget"><div class="agent clearfix"><div class="image"><img class="img-thumbnail img-responsive" src="demos/01_home.jpg" alt=""></div><div class="agent_desc"><h3 class="title"><a href="single-property.html">Home of your dreams</a></h3><span>890 Istanbul / Maslak</span></p></div></div></div>', -33.950198, 151.259302, 1]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
        scrollwheel: false,
        navigationControl: true,
        mapTypeControl: false,
        scaleControl: false,
        draggable: true,
        styles: [ { "stylers": [ { "hue": "#19B8DF" }, { "gamma": 1 } ] } ],
        center: new google.maps.LatLng(-33.92, 151.25),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
  
        marker = new google.maps.Marker({ 
        position: new google.maps.LatLng(locations[i][1], locations[i][2]), 
        map: map ,
        icon: 'realestate/images/marker.png'
        });


      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
@stop
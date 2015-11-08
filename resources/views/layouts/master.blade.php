<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Real Estate Application</title>

	<!-- Bootstrap core CSS -->
	<link href="{{ asset('realestate/assets/css/bootstrap.css') }}" rel="stylesheet">

	<!-- Style CSS -->
	<link href="{{ asset('realestate/style.css') }}" rel="stylesheet">
    
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,300,400italic,700,700italic,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800,300italic,400italic' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="{{ asset('realestate/assets/js/html5shiv.js') }}"></script>
	  <script src="{{ asset('realestate/assets/js/respond.min.js') }}"></script>
	<![endif]-->

	<!-- Favicons -->
	<link rel="shortcut icon" href="{{ asset('realestate/assets/ico/favicon.ico') }}" type="image/x-icon">
	<link rel="apple-touch-icon" href="{{ asset('realestate/assets/ico/apple-touch-icon.png') }}" />
	<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('realestate/assets/ico/apple-touch-icon-57x57.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('realestate/assets/ico/apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('realestate/assets/ico/apple-touch-icon-114x114.png') }}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('realestate/assets/ico/apple-touch-icon-144x144.png') }}">

    <script src="{{ asset('realestate/js/jquery-1.10.2.min.js') }}"></script> <!-- Jquery -->
    @yield('head')

</head>
<body>
        @include('snippets.toolbars')

        @include('snippets.header')

		@yield('content')
        
        @include('snippets.footer')
    
	<!-- Bootstrap core and JavaScript's
    ================================================== -->
    
    <script src="{{ asset('realestate/js/bootstrap.js') }}"></script>
    <script src="{{ asset('realestate/js/jquery.parallax.js') }}"></script>
    <script src="{{ asset('realestate/js/jquery.fitvids.js') }}"></script>    
	<script src="{{ asset('realestate/js/jquery.unveilEffects.js') }}"></script>	
	<script src="{{ asset('realestate/js/retina-1.1.0.js') }}"></script>
    <script src="{{ asset('realestate/js/fhmm.js') }}"></script>
	<script src="{{ asset('realestate/js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('realestate/fancyBox/jquery.fancybox.pack.js') }}"></script>
	<script src="{{ asset('realestate/js/application.js') }}"></script>
    
	<!-- FlexSlider JavaScript
    ================================================== -->
 	<script src="{{ asset('realestate/js/jquery.flexslider.js') }}"></script>
	<script>
        $(window).load(function() {
            $('#carousel').flexslider({
                animation: "slide",
                controlNav: true,
                directionNav: false,
                animationLoop: true,
                slideshow: true,
                itemWidth: 114,
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
            
            $('#property-slider .flexslider').flexslider({
                animation: "fade",
                slideshowSpeed: 6000,
                animationSpeed:	1300,
                directionNav: true,
                controlNav: false,
                keyboardNav: true
            });
        });
    </script>

    @yield('footer')

</body>
</html>
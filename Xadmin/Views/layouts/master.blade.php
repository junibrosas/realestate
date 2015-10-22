<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>{{ trans(Route::getCurrentRoute()->getName()) }} | Xadmin</title>

        <meta name="description" content="OneUI - Admin Dashboard Template & UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{ asset('xadmin/img/favicons/favicon.png') }}">

        <link rel="icon" type="image/png" href="{{ asset('xadmin/img/favicons/favicon-16x16.png') }}" sizes="16x16">
        <link rel="icon" type="image/png" href="{{ asset('xadmin/img/favicons/favicon-32x32.png') }}" sizes="32x32">
        <link rel="icon" type="image/png" href="{{ asset('xadmin/img/favicons/favicon-96x96.png') }}" sizes="96x96">
        <link rel="icon" type="image/png" href="{{ asset('xadmin/img/favicons/favicon-160x160.png') }}" sizes="160x160">
        <link rel="icon" type="image/png" href="{{ asset('xadmin/img/favicons/favicon-192x192.png') }}" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('xadmin/img/favicons/apple-touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('xadmin/img/favicons/apple-touch-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('xadmin/img/favicons/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('xadmin/img/favicons/apple-touch-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('xadmin/img/favicons/apple-touch-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('xadmin/img/favicons/apple-touch-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('xadmin/img/favicons/apple-touch-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('xadmin/img/favicons/apple-touch-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('xadmin/img/favicons/apple-touch-icon-180x180.png') }}">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- Page JS Plugins CSS go here -->
        <link rel="stylesheet" type="text/css" href="{{ asset('xadmin/js/plugins/sweetalert/sweetalert.css') }}">
        @yield('header')

        <!-- OneUI CSS framework -->
        <link rel="stylesheet" id="css-main" href="{{ asset('xadmin/css/oneui.min.css') }}">

        <!-- Custom Admin CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('xadmin/css/custom-admin.css') }}">

        <!-- You can include a specific file from xadmin/css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/xadmin/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
        
    </head>
    <body>



        @yield('layout-child-content')


        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="{{ asset('xadmin/js/core/jquery.min.js') }}"></script>
        <script src="{{ asset('xadmin/js/core/bootstrap.min.js') }}"></script>
        <script src="{{ asset('xadmin/js/core/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('xadmin/js/core/jquery.scrollLock.min.js') }}"></script>
        <script src="{{ asset('xadmin/js/core/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('xadmin/js/core/jquery.countTo.min.js') }}"></script>
        <script src="{{ asset('xadmin/js/core/jquery.placeholder.min.js') }}"></script>
        <script src="{{ asset('xadmin/js/core/js.cookie.min.js') }}"></script>
        <script src="{{ asset('xadmin/js/app.js') }}"></script>

        <script src="{{ asset('xadmin/js/plugins/sweetalert/sweetalert.min.js') }}"></script>
        <script src="https://js.pusher.com/3.0/pusher.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.14/vue.min.js"></script>
        {{-- <script src="{{ asset('xadmin/js/oneui.min.js') }}"></script> --}}
        <script src="{{ asset('xadmin/js/admin/custom-admin.js') }}"></script>
        

        <!-- Session flash messaging -->
        @include('cms::snippets.insta-flash')

        <!-- Page JS Plugins + Page JS Code -->
        @yield('footer')
        
    </body>
</html>
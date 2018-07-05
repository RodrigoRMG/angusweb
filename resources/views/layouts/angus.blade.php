<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Template specific stylesheets-->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
        <link href="{{url('assets/lib/animate.css/animate.css')}}" rel="stylesheet">
        <link href="{{url('assets/lib/components-font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{url('assets/lib/et-line-font/et-line-font.css')}}" rel="stylesheet">
        <link href="{{url('assets/lib/flexslider/flexslider.css')}}" rel="stylesheet">
        <link href="{{url('assets/lib/owl.carousel/dist/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{url('assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css')}}" rel="stylesheet">
        <link href="{{url('assets/lib/magnific-popup/dist/magnific-popup.css')}}" rel="stylesheet">
        <link href="{{url('assets/lib/simple-text-rotator/simpletextrotator.css')}}" rel="stylesheet">
        <!-- Main stylesheet and color file-->
        <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
        <link href="{{url('css/style.css')}}" rel="stylesheet">
        <link href="{{url('css/style-custom.css')}}" rel="stylesheet">
        <link id="color-scheme" href="{{url('assets/css/colors/default.css')}}" rel="stylesheet">

    </head>
    <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
        <main>
            @yield('content')
        </main>
    </body>

        <script src="{{url('assets/lib/jquery/dist/jquery.js')}}"></script>
    <script src="{{url('assets/lib/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/lib/wow/dist/wow.js')}}"></script>
    <script src="{{url('assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js')}}"></script>
    <script src="{{url('assets/lib/isotope/dist/isotope.pkgd.js')}}"></script>
    <script src="{{url('assets/lib/imagesloaded/imagesloaded.pkgd.js')}}"></script>
    <script src="{{url('assets/lib/flexslider/jquery.flexslider.js')}}"></script>
    <script src="{{url('assets/lib/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    <script src="{{url('assets/lib/smoothscroll.js')}}"></script>
    <script src="{{url('assets/lib/magnific-popup/dist/jquery.magnific-popup.js')}}"></script>
    <script src="{{url('assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js')}}"></script>
    <script src="{{url('assets/js/plugins.js')}}"></script>
    <script src="{{url('assets/js/main.js')}}"></script>

    <script type='text/javascript' src='http://harbour60.com/wp-content/plugins/instagram-feed/js/sb-instagram.min.js?ver=1.8.2'></script>
<script type='text/javascript' src='http://harbour60.com/wp-includes/js/mediaelement/wp-mediaelement.min.js?ver=4.9.6'></script>
<script type='text/javascript' src='http://harbour60.com/wp-content/themes/uncode/library/js/min/plugins.min.js'></script>
<script type='text/javascript' src='http://harbour60.com/wp-content/themes/uncode/library/js/min/app.min.js'></script>
<script type='text/javascript' src='http://harbour60.com/wp-content/themes/uncode-child/dist/js/script.min.js?ver=1.0'></script>
<script type='text/javascript' src='http://harbour60.com/wp-includes/js/wp-embed.min.js?ver=4.9.6'></script>
<script type='text/javascript' src='http://harbour60.com/wp-includes/js/mediaelement/renderers/vimeo.min.js?ver=4.2.6-78496d1'></script>
<script type='text/javascript' src='//maps.googleapis.com/maps/api/js?key=AIzaSyCcq6_t9-8MSiT0fjUG0Jbbao3ZbF6Re6k&#038;ver=4.9.6'></script>
<script type='text/javascript' src='http://harbour60.com/wp-content/themes/uncode/library/js/min/uncode.gmaps.min.js?ver=1.0.0'></script>

    
</html>

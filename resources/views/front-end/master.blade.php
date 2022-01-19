<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title> @yield('title') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Gifty Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{ asset('/') }}/front-end/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="{{ asset('/') }}/front-end/css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ asset('/') }}/front-end/css/jquery.countdown.css" />
    <!-- Custom Theme files -->
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{{ asset('/') }}/front-end/js/jquery-1.11.1.min.js"></script>
    <!-- dropdown -->
    <script src="{{ asset('/') }}/front-end/js/jquery.easydropdown.js"></script>
    <!-- start menu -->
    <link href="{{ asset('/') }}/front-end/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="{{ asset('/') }}/front-end/js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <script src="{{ asset('/') }}/front-end/js/responsiveslides.min.js"></script>
    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>
    <script src="{{ asset('/') }}/front-end/js/jquery.countdown.js"></script>
    <script src="{{ asset('/') }}/front-end/js/script.js"></script>
</head>
<body>
@include('front-end.include.header')
@yield('body')
@include('front-end.include.footer')
</body>
</html>
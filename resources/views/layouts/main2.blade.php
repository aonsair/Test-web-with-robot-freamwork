<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="Tour Thai">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic'
          rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">

    <!-- Css -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/font-icons.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('revolution/css/settings.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/rev-slider.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/sliders.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/spacings.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/color.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/color.css') }}"/>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ URL::asset('img/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ URL::asset('img/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('img/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('img/apple-touch-icon-114x114.png') }}">

    <title>{{trans('main.ThailandPortalTitle')}} - @yield('site_title')</title>
    {{--<link rel="stylesheet" type="text/css" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">--}}
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('fontawesome-free-5.3.1-web/css/all.css') }}">
</head>
<body data-spy="scroll" data-offset="60" data-target=".navbar-fixed-top"
      style="font-family: 'Kanit', sans-serif, 'Montserrat', sans-serif;">


<!-- Preloader -->
<div class="loader-mask">
    <div class="loader">
        "Loading..."
    </div>
</div>

<!-- Navigation -->
<header class="nav-type-1" id="home">

    <nav class="navbar navbar-fixed-top">
        <div class="navigation-overlay">
            <div class="container-fluid relative">
                <div class="row">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo-container">
                            <div class="logo-wrap local-scroll">
                                <a href="/">
                                    <img class="logo" src="{{URL::asset('img/logo_light.png')}}" alt="logo">
                                </a>
                            </div>
                        </div>
                    </div> <!-- end navbar-header -->


                    <div class="col-xs-12 col-md-11 nav-wrap">
                        <div class="collapse navbar-collapse text-center" id="navbar-collapse">

                            <ul class="nav navbar-nav local-scroll text-center">

                                <li>
                                    <a id="home_menu" href="/"
                                       style="font-family: 'Kanit', sans-serif, 'Montserrat', sans-serif; font-size: 16px;">
                                        {{ trans('main.Home') }}
                                    </a>
                                </li>
                                <li>
                                    <a id="trip_menu" href="/trip"
                                       style="font-family: 'Kanit', sans-serif, 'Montserrat', sans-serif; font-size: 16px;">
                                        {{ trans('main.Trip') }}
                                    </a>
                                </li>
                                <li>
                                    <a id="review_menu" href="/review"
                                       style="font-family: 'Kanit', sans-serif, 'Montserrat', sans-serif; font-size: 16px;">
                                        {{ trans('main.Review') }}
                                    </a>
                                </li>
                                <li>
                                    <a id="contact_menu" href="/"
                                       style="font-family: 'Kanit', sans-serif, 'Montserrat', sans-serif; font-size: 16px;">
                                        {{ trans('main.Contact') }}
                                    </a>
                                </li>


                                @guest
                                    <li>
                                        <a href="{{ url('login') }}" id="login_menu"
                                           style="font-family: 'Kanit', sans-serif, 'Montserrat', sans-serif; font-size: 16px;">
                                            <i class="fas fa-sign-in-alt"></i> {{ trans('main.Login') }}
                                        </a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li>
                                            <a href="{{ url('register') }}" id="register_menu"
                                               style="font-family: 'Kanit', sans-serif, 'Montserrat', sans-serif; font-size: 16px;">
                                                <i class="fas fa-user-plus"></i> {{ trans('main.Register') }}
                                            </a>
                                        </li>
                                    @endif
                                @else
                                    {{--<li class="dropdown">--}}
                                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" style="font-family: 'Kanit', sans-serif, 'Montserrat', sans-serif; font-size: 16px;">--}}
                                    {{--{{ Auth::user()->name }}--}}
                                    {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                    {{--<a href="{{ url('create-review') }}" style="font-family: 'Kanit', sans-serif, 'Montserrat', sans-serif; font-size: 16px;">--}}
                                    {{--<i class="fa fas fa-plus"></i> {{ trans('main.CreateReview') }}--}}
                                    {{--</a>--}}
                                    {{--</li>--}}
                                    <li>
                                        <a id="logout_menu"
                                           class="hoverc"
                                           style="font-family: 'Kanit', sans-serif, 'Montserrat', sans-serif; font-size: 16px;"
                                           href="{{ url('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt"></i> {{ trans('main.Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                @endguest

                                <li>
                                    @if(session()->has('locale'))
                                        <a style="font-size: 16px;"
                                           href="{{ url('lang/' . ((session()->get('locale')=='th')? 'en' : 'th')) }}"> {{ Str::upper((session()->get('locale')=='th')?'en':'th') }}</a>
                                    @else
                                        <a style="font-size: 16px;" href="{{ url('lang/en') }}">
                                            EN </a>
                                    @endif
                                </li>

                            </ul>
                        </div>
                    </div> <!-- end col -->

                </div> <!-- end row -->
            </div> <!-- end container -->
        </div> <!-- end navigation -->
    </nav> <!-- end navbar -->
</header>
<!-- end navigation -->

@yield('content')

<!-- Footer -->
<div class="main-wrapper-onepage main oh" style="z-index: 1000;">
    <footer class="footer minimal bg-dark">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-md-offset-4">

                    <div class="footer-logo local-scroll mb-30 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2>
                            <a href="#home" class="color-white">Tour Thai</a>
                        </h2>
                    </div>

                    <div class="socials footer-socials">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-tripadvisor"></i></a>
                    </div> <!-- end socials -->

                    <span class="copyright text-center">
                      <span style="color: #fff">&copy; 2018 {{ trans('main.ThailandPortal') }}
                          | {{ trans('main.Development') }}  </span> <br>  <a
                                style="font-size: 14px;"
                                href="http://www.topumin.com/"> {{ trans('main.by') }} {{ trans('main.ThailandPortal') }}</a>
                </span>

                </div>

            </div>
        </div>
    </footer> <!-- end footer -->
</div> <!-- end main-wrapper -->

<!-- back to top -->
<div id="back-to-top" style="z-index: 10000;" class="show" style="margin-top:3px;">
    <a href="#top" alt="back to top" title="back to top"><i class="fa fa-angle-up"></i></a>
</div>

<nav id="response-message" class="navbar navbar-fixed-bottom" style="margin-bottom: 0">
    @yield('response')
</nav>
<!-- jQuery Scripts -->
<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<!--
  1. Generate your key here - https://developers.google.com/maps/documentation/javascript/get-api-key
  2. Paste your key in the script below.
-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoQ3_zzRfW-hYspkwr5kvwCwLPGZsN4nw"></script>
<script type="text/javascript" src="{{ URL::asset('js/gmap3.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/plugins.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/rev-slider.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/scripts.js') }}"></script>

<!-- Google Map -->
<script type="text/javascript">
    $(document).ready(function () {

        var gmapDiv = $("#google-map");
        var gmapMarker = gmapDiv.attr("data-address");

        gmapDiv.gmap3({
            zoom: 16,
            address: gmapMarker,
            oomControl: true,
            navigationControl: true,
            scrollwheel: false,
            styles: [
                {
                    "featureType": "all",
                    "elementType": "all",
                    "stylers": [
                        {"saturation": "-70"}
                    ]
                }]
        })
            .marker({
                address: gmapMarker,
                icon: "img/map_pin.png"
            })
            .infowindow({
                content: "V Tytana St, Manila, Philippines"
            })
            .then(function (infowindow) {
                var map = this.get(0);
                var marker = this.get(1);
                marker.addListener('click', function () {
                    infowindow.open(map, marker);
                });
            });
    });
</script>

<script type="text/javascript"
        src="{{ URL::asset('revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script type="text/javascript"
        src="{{ URL::asset('revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript"
        src="{{ URL::asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript"
        src="{{ URL::asset('revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript"
        src="{{ URL::asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript"
        src="{{ URL::asset('revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript"
        src="{{ URL::asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript"
        src="{{ URL::asset('revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript"
        src="{{ URL::asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>

<!-- Must be connect the internet -->
<script src="//cdn.ckeditor.com/4.11.1/full/ckeditor.js"></script>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('body');

    function CKupdate() {
        for (instance in CKEDITOR.instances)
            CKEDITOR.instances[instance].updateElement();
    }
</script>

{{--<!-- jQuery -->--}}
{{--<script type="text/javascript">--}}
    {{--$('.filter').click(function () {--}}
        {{--var data = $(this).attr('data-filter');--}}

        {{--$('.web-design').css('display', 'none');--}}
        {{--$('.' + data).css('display', 'visible');--}}
    {{--});--}}
{{--</script>--}}


</body>
</html>

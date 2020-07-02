@extends('layouts.main')

@section('site_title',trans('main.Home'))

@section('content')

    <!-- index.blade.php -->
    <div class="main-wrapper-onepage main oh " style="margin-bottom: 0;">

        <!-- Revolution Slider -->
        <section>
            <div class="rev_slider_wrapper">
                <div class="rev_slider" id="slider1" data-version="5.0">
                    <ul>
                        <!-- SLIDE 1 -->
                        <li data-fstransition="fade"
                            data-transition="zoomout"
                            data-easein="default"
                            data-easeout="default"
                            data-slotamount="1"
                            data-masterspeed="1200"
                            data-delay="8000"
                            data-title="The first trip of Thailand"
                        >
                            <!-- MAIN IMAGE -->
                            <img src="{{ URL::asset('img/revolution/onepage_slide_1.jpg') }}"
                                 alt=""
                                 data-bgrepeat="no-repeat"
                                 data-bgfit="cover"
                                 data-bgparallax="7"
                                 class="rev-slidebg"
                            >

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption huge_white rs-parallaxlevel-8"
                                 data-x="center"
                                 data-y="center"
                                 data-transform_idle="o:1;"
                                 data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:500;e:Power3.easeOut;"
                                 data-transform_out="opacity:0;sX:0;sY:0;s:1200;e:Power3.easeInOut;"
                                 data-start="1200"
                                 data-splitout="none"
                            ><img src="{{ URL::asset('img/revolution/hero_img_1.png') }}" alt="" width="504"
                                  height="504" data-ww="['504px','400px','360px','320px']"
                                  data-hh="['504px','400px','360px','320px']"
                                  data-no-retina>
                            </div>


                        </li> <!-- end slide 1 -->

                        <!-- SLIDE 2 -->
                        <li data-transition="zoomout"
                            data-easein="default"
                            data-easeout="default"
                            data-slotamount="1"
                            data-masterspeed="1200"
                            data-delay="8000"
                            data-title="Wat Phra Kaew"
                        >
                            <!-- MAIN IMAGE -->
                            <img src="{{ URL::asset('img/revolution/onepage_slide_2.jpg') }}"
                                 alt=""
                                 data-bgrepeat="no-repeat"
                                 data-bgfit="cover"
                                 data-bgparallax="7"
                                 class="rev-slidebg"
                            >

                            <!-- LAYER NR. 1 -->
                            <div style="font-family: 'Kanit', sans-serif, 'Montserrat', sans-serif;"
                                 class="tp-caption medium_text"
                                 data-x="center"
                                 data-y="center"
                                 data-voffset="-60"
                                 data-fontsize="[15,15,15,15]"
                                 data-textAlign="center"
                                 data-width="[none, none, none, 400]"
                                 data-whitespace="[nowrap, nowrap, nowrap, normal]"
                                 data-lineheight="[15,15,15,18]"
                                 data-transform_idle="o:1;s:1000"
                                 data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:500;"
                                 data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                                 data-start="1000">{{ trans('index.Slide2L1') }}
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div style="font-family: 'Kanit', sans-serif, 'Montserrat', sans-serif;"
                                 class="tp-caption hero-text large_white"
                                 data-x="center"
                                 data-y="center"
                                 data-fontsize="[60,50,40,36]"
                                 data-textAlign="center"
                                 data-width="[none, none, none, 400]"
                                 data-whitespace="[nowrap, nowrap, nowrap, normal]"
                                 data-lineheight="[60,50,40,36]"
                                 data-transform_idle="o:1;s:900"
                                 data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:500;"
                                 data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                                 data-start="1200">{{ trans('index.Slide2L2') }}
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div style="font-family: 'Kanit', sans-serif, 'Montserrat', sans-serif;"
                                 class="tp-caption small_text"
                                 data-x="center"
                                 data-y="center"
                                 data-voffset="60"
                                 data-fontsize="[16,16,16,16]"
                                 data-textAlign="center"
                                 data-width="[none, none, none, 400]"
                                 data-whitespace="[nowrap, nowrap, nowrap, normal]"
                                 data-lineheight="[16,16,16,18]"
                                 data-transform_idle="o:1;s:800"
                                 data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:500;"
                                 data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                                 data-start="1400">{{ trans('index.Slide2L3') }}
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div style="font-family: 'Kanit', sans-serif, 'Montserrat', sans-serif;"
                                 class="tp-caption tp-resizeme"
                                 data-x="center"
                                 data-y="center"
                                 data-voffset="140"
                                 data-hoffset="0"
                                 data-transform_idle="o:1;s:700"
                                 data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:500;"
                                 data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                                 data-start="1600"
                                 style="z-index: 12; max-width: 100%; max-height: 100%; white-space: nowrap; line-height: 100%;">
                                <a href='#' class='btn btn-lg btn-color'
                                   style="height: 100%;">{{ trans('index.LearnMore') }}</a>
                            </div>

                        </li> <!-- end slide 2 -->

                        <!-- SLIDE 3 -->
                        <li style="font-family: 'Kanit', sans-serif, 'Montserrat', sans-serif;"
                            data-transition="zoomout"
                            data-easein="default"
                            data-easeout="default"
                            data-slotamount="1"
                            data-masterspeed="1200"
                            data-delay="8000"
                            data-title="How to be a Gold"
                        >
                            <!-- MAIN IMAGE -->
                            <img src="{{ URL::asset('img/revolution/onepage_slide_3.jpg') }}"
                                 alt=""
                                 data-bgrepeat="no-repeat"
                                 data-bgfit="cover"
                                 data-bgparallax="7"
                                 class="rev-slidebg"
                            >

                            <!-- LAYER NR. 1 -->
                            <div style="font-family: 'Kanit', sans-serif, 'Montserrat', sans-serif;"
                                 class="tp-caption medium_text"
                                 data-x="center"
                                 data-y="center"
                                 data-voffset="-60"
                                 data-fontsize="[15,15,15,15]"
                                 data-textAlign="center"
                                 data-width="[none, none, none, 400]"
                                 data-whitespace="[nowrap, nowrap, nowrap, normal]"
                                 data-lineheight="[15,15,15,18]"
                                 data-transform_idle="o:1;s:1000"
                                 data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:500;"
                                 data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                                 data-start="1000">{{ trans('index.Slide3L1') }}
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div style="font-family: 'Kanit', sans-serif, 'Montserrat', sans-serif;"
                                 class="tp-caption hero-text large_white"
                                 data-x="center"
                                 data-y="center"
                                 data-fontsize="[60,50,40,36]"
                                 data-textAlign="center"
                                 data-width="[none, none, none, 400]"
                                 data-whitespace="[nowrap, nowrap, nowrap, normal]"
                                 data-lineheight="[60,50,40,36]"
                                 data-transform_idle="o:1;s:900"
                                 data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:500;"
                                 data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                                 data-start="1200">{{ trans('index.Slide3L2') }}
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div style="font-family: 'Kanit', sans-serif, 'Montserrat', sans-serif;"
                                 class="tp-caption small_text"
                                 data-x="center"
                                 data-y="center"
                                 data-voffset="60"
                                 data-fontsize="[16,16,16,16]"
                                 data-textAlign="center"
                                 data-width="[none, none, none, 400]"
                                 data-whitespace="[nowrap, nowrap, nowrap, normal]"
                                 data-lineheight="[16,16,16,18]"
                                 data-transform_idle="o:1;s:800"
                                 data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:500;"
                                 data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                                 data-start="1400">{{ trans('index.Slide3L3') }}
                            </div>


                            <!-- LAYER NR. 4 -->
                            <div style="font-family: 'Kanit', sans-serif, 'Montserrat', sans-serif;"
                                 class="tp-caption tp-resizeme"
                                 data-x="center"
                                 data-y="center"
                                 data-voffset="140"
                                 data-hoffset="0"
                                 data-transform_idle="o:1;s:700"
                                 data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:500;"
                                 data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                                 data-start="1600"
                                 style="z-index: 12; max-width: 100%; max-height: 100%; white-space: nowrap; line-height: 100%;">
                                <a href='tel:0898115155' class='btn btn-lg btn-transparent'
                                   style="height: 100%;">{{ trans('index.ContactUs') }}</a>
                            </div>

                        </li> <!-- end slide 3 -->

                    </ul>

                    <div class="local-scroll">
                        <a href="#intro" class="scroll-down">
                            <i class="fa fa-angle-down"></i>
                        </a>
                    </div>

                </div>
            </div>
        </section>


        <!-- Intro -->
    {{--<section class="section-wrap intro" id="intro">--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}

    {{--<div class="col-sm-8 col-sm-offset-2 text-center wow slideInUp" data-wow-duration="1.2s" data-wow-delay="0s">--}}
    {{--<h2 class="intro-heading heading-frame">Thailand Portal Website</h2>--}}
    {{--<p class="intro-text mb-60">--}}
    {{--We continuosly seek new things and amazing of thailand. For over a decade, we've helped member and businesses all of Thailand-Portal.com through strategy such as Sharing, Centralize of Travel and Marketing. Ofcause our team hand picked to provide the right balance of skills to work.--}}
    {{--</p>--}}

    {{--<img src="{{ URL::asset('img/intro_logo.png') }}" alt="logo" style="max-width: 25%; width: 300px;" />--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    <!-- end intro -->

        <!-- Results -->
    {{--<section class="result-boxes">--}}
    {{--<div class="container-fluid">--}}
    {{--<div class="row">--}}

    {{--<div class="col-md-4 nopadding">--}}
    {{--<div class="statistic result-box result-box-first">--}}
    {{--<div class="result-wrap clearfix">--}}
    {{--<i class="icon icon-Users"></i>--}}
    {{--<span class="timer" data-from="60000" data-to="65536">&nbsp;</span>--}}
    {{--<span class="counter-text">Members</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div> <!-- end first result box -->--}}

    {{--<div class="col-md-4 nopadding">--}}
    {{--<div class="statistic result-box result-box-second">--}}
    {{--<div class="result-wrap clearfix">--}}
    {{--<i class="icon icon-DSLRCamera"></i>--}}
    {{--<span class="timer" data-from="1000" data-to="2048">&nbsp;</span>--}}
    {{--<span class="counter-text">Reviews</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div> <!-- end second result box -->--}}

    {{--<div class="col-md-4 nopadding">--}}
    {{--<div class="statistic result-box result-box-third">--}}
    {{--<div class="result-wrap clearfix">--}}
    {{--<i class="icon icon-Share"></i>--}}
    {{--<span class="timer" data-from="800" data-to="1024">&nbsp;</span>--}}
    {{--<span class="counter-text">Partners</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div> <!-- end third result box -->--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</section> --}}
    <!-- end results-->


        <!-- Our Services -->
    {{--<section class="section-wrap bg-light pb-mdm-50 pb-130" id="services">--}}
    {{--<div class="container">--}}

    {{--<div class="row heading">--}}
    {{--<div class="col-md-6 col-md-offset-3">--}}
    {{--<h2 class="text-center bottom-line">Mission</h2>--}}
    {{--<p class="subheading text-center">Continuously Creating Daring Digital Solutions</p>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="row">--}}
    {{--<div class="col-md-4 service-item">--}}
    {{--<div class="service-item-box icon-effect-1 icon-effect-1a text-center">--}}
    {{--<a href="#">--}}
    {{--<i class="icon icon-Megaphone hi-icon"></i>--}}
    {{--</a>--}}
    {{--<h3>Announcement</h3>--}}
    {{--<p>Our web design team will spend time with our digital marketing team to ensure the core principles of effective websites.</p>--}}
    {{--</div>--}}
    {{--</div> <!-- end service item -->--}}

    {{--<div class="col-md-4 service-item">--}}
    {{--<div class="service-item-box icon-effect-1 icon-effect-1a text-center">--}}
    {{--<a href="#">--}}
    {{--<i class="icon icon-Pointer hi-icon"></i>--}}
    {{--</a>--}}
    {{--<h3>Central of Community</h3>--}}
    {{--<p>Our web design team will spend time with our digital marketing team to ensure the core principles of effective websites.</p>--}}
    {{--</div>--}}
    {{--</div> <!-- end service item -->--}}

    {{--<div class="col-md-4 service-item">--}}
    {{--<div class="service-item-box icon-effect-1 icon-effect-1a text-center">--}}
    {{--<a href="#">--}}
    {{--<i class="icon icon-ChartUp hi-icon"></i>--}}
    {{--</a>--}}
    {{--<h3>Economic stimulus</h3>--}}
    {{--<p>Our web design team will spend time with our digital marketing team to ensure the core principles of effective websites.</p>--}}
    {{--</div>--}}
    {{--</div> <!-- end service item -->--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    <!-- end services -->

        <!-- Portfolio -->
        <section class="section-wrap  bg-light works-grid-3-col-wide pb-0" id="portfolio"
                 style="padding: 130px 0 120px 0">

            <div class="container-fluid">

                <div class="row heading">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <h2 class="text-center bottom-line">{{ trans('index.ViewOfThailand') }}</h2>
                        <p class="subheading text-center">{{ trans('index.Instagram') }}: : @tourismthailand </p>
                    </div>
                </div>

                <div class="grid-3-col grid-wide grid-gutter">

                    <div class="work-item web-design print">
                        <div class="work-img">
                            <img src="{{ URL::asset('img/project_1.jpg') }}" alt="">
                            <div class="work-overlay">
                                <div class="work-description">
                                    <h3>
                                        <span style="font-size: 16px;">The first trip of Thailand</span>
                                    </h3>
                                    <span style="font-size: 13px;"><i class="icon icon-Pointer"></i> Krabi</span>
                                </div>
                                <a href="{{ URL::asset('img/project_1_big.jpg') }}"
                                   class="lightbox-gallery btn btn-lg btn-transparent"
                                   title="The first trip of Thailand">{{ trans('index.Zoom') }}</a>
                            </div>
                        </div>
                    </div> <!-- end work-item -->

                    <div class="work-item web-design print">
                        <div class="work-img">
                            <img src="{{ URL::asset('img/project_2.jpg') }}" alt="">
                            <div class="work-overlay">
                                <div class="work-description">
                                    <h3>
                                        <span style="font-size: 16px;">Wat Phra Si Rattana Satsadaram</span>
                                    </h3>
                                    <span style="font-size: 13px;"><i class="icon icon-Pointer"></i> Bangkok</span>
                                </div>
                                <a href="{{ URL::asset('img/project_2_big.jpg') }}"
                                   class="lightbox-gallery btn btn-lg btn-transparent"
                                   title="Wat Phra Si Rattana Satsadaram">{{ trans('index.Zoom') }}</a>
                            </div>
                        </div>
                    </div> <!-- end work-item -->

                    <div class="work-item web-design print">
                        <div class="work-img">
                            <img src="{{ URL::asset('img/project_3.jpg') }}" alt="">
                            <div class="work-overlay">
                                <div class="work-description">
                                    <h3>
                                        <span style="font-size: 16px;">Talay Bua Daeng</span>
                                    </h3>
                                    <span style="font-size: 13px;"><i class="icon icon-Pointer"></i> Udonthani</span>
                                </div>
                                <a href="{{ URL::asset('img/project_3_big.jpg') }}"
                                   class="lightbox-gallery btn btn-lg btn-transparent"
                                   title="Talay Bua Daeng">{{ trans('index.Zoom') }}</a>
                            </div>
                        </div>
                    </div> <!-- end work-item -->

                    <div class="work-item web-design print">
                        <div class="work-img">
                            <img src="{{ URL::asset('img/project_4.jpg') }}" alt="">
                            <div class="work-overlay">
                                <div class="work-description">
                                    <h3>
                                        <span style="font-size: 16px;">Ao Nang Beach</span>
                                    </h3>
                                    <span style="font-size: 16px;"><i class="icon icon-Pointer"></i> krabi</span>
                                </div>
                                <a href="{{ URL::asset('img/project_4_big.jpg') }}"
                                   class="lightbox-gallery btn btn-lg btn-transparent"
                                   title="Pa Sak Jolasid Dam">{{ trans('index.Zoom') }}</a>
                            </div>
                        </div>
                    </div> <!-- end work-item -->

                    <div class="work-item web-design branding">
                        <div class="work-img">
                            <img src="{{ URL::asset('img/project_5.jpg') }}" alt="">
                            <div class="work-overlay">
                                <div class="work-description">
                                    <h3>
                                        <span style="font-size: 16px;">Pa Sak Jolasid Dam</span>
                                    </h3>
                                    <span style="font-size: 13px;"><i class="icon icon-Pointer"></i> Lop Buri</span>
                                </div>
                                <a href="{{ URL::asset('img/project_5_big.jpg') }}"
                                   class="lightbox-gallery btn btn-lg btn-transparent"
                                   title="Pa Sak Jolasid Dam">{{ trans('index.Zoom') }}</a>
                            </div>
                        </div>
                    </div> <!-- end work-item -->

                    <div class="work-item web-design branding">
                        <div class="work-img">
                            <img src="{{ URL::asset('img/project_6.jpg') }}" alt="">
                            <div class="work-overlay">
                                <div class="work-description">
                                    <h3>
                                        <span style="font-size: 16px;">Damnoen Saduak</span>
                                    </h3>
                                    <span style="font-size: 13px;"><i class="icon icon-Pointer"></i> Rachaburi</span>
                                </div>
                                <a href="{{ URL::asset('img/project_6_big.jpg') }}"
                                   class="lightbox-gallery btn btn-lg btn-transparent"
                                   title="Damnoen Saduak">{{ trans('index.Zoom') }}</a>
                            </div>
                        </div>
                    </div> <!-- end work-item -->

                </div>
            </div>
        </section>
        <!-- end portfolio-->


        <!-- Call to Action -->
        <section class="call-to-action">
            <div class="container mb-90">
                <div class="row">

                    <div class="col-md-9 col-xs-12">
                        <h2>{{ trans('index.ViewSub') }}</h2>
                    </div>

                    <div class="col-md-3 col-xs-12 cta-button">
                        <a target="_blank" href="https://www.instagram.com/tourismthailand/"
                           class="btn btn-lg btn-color" style="line-height: 100%;">{{ trans('index.ViewMore') }}</a>
                    </div>

                </div>
            </div>
        </section>
        <!-- end call to action -->

        <span id="trip"></span>
        <!-- Promo Section -->
        <section class="section-wrap promo-section bg-dark" style="padding: 140px 0 100px 0">

            <div id="owl-promo" class="owl-carousel owl-theme">

                @foreach($trips as $trip)
                    <div class="item">
                        <div class="container">
                            <div class="row">

                                <div class="col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                                    @if($trip->cover_image)
                                        <img src="{{ url($trip->cover_image) }}" alt="">
                                    @else
                                        <img src="{{ url("img/trips/no_image.png") }}">
                                    @endif
                                </div>

                                <div class="col-md-6 promo-description">
                                    <h3 class="color-white">
                                        <a style="font-size: 21px; color: #fff;"
                                           href="{{ action('TripController@show', [$trip->id]) }}"
                                           class="read-more">{{ $trip->name }}</a>
                                    </h3>
                                    <span style="color: #29dfff;font-style: normal;" class="subheading">
                                        <i class="icon icon-Pointer"></i>
                                        @foreach($provinces as $province)
                                            @if( ($trip->province_id) == ($province->id) )
                                                {{ $province->name }}
                                            @endif
                                        @endforeach

                                        <i class="icon icon-Timer"></i> {{ date('d/m/Y',strtotime($trip->date_start)) }}
                                        {{--{{ date('G:i', strtotime($trip->time_start)) }}--}}

                                        {{--- {{ date('G:i', strtotime($trip->time_stop)) }} &nbsp--}}
                                        <i class="icon icon-Users"> <span
                                                    style="font-family: 'Kanit', sans-serif, 'Montserrat', sans-serif; font-style: normal">{{ $trip->amount }} {{ trans('index.Persons') }}
                                                <i class="icon icon-Bag"></i> {{ trans('create.Price') }}
                                                @if(($trip->price)==0)
                                                    {{ trans('index.Free') }}
                                                @else
                                                    {{ $trip->price }} {{ trans('create.Baht') }}
                                                @endif
                                            </span>
                                        </i>

                                    </span>
                                    <p class="mb-30" style="text-align: justify"> {{ $trip->detail }}</p>
                                    <a id="joinTrip" href="tel:
                                                @foreach($users as $user)
                                    @if($user->id == $trip->user_id)
                                    {{ $user->tel }}
                                    @endif
                                    @endforeach
                                            " class="btn btn-lg btn-color"
                                       style="line-height: 100%;">{{ trans('index.JoinTrip') }}</a>
                                    <a id="viewMoreTrip" href="{{ action('TripController@index') }}"
                                       class="btn btn-lg btn-dark"
                                       style="line-height: 100%; margin-left: 20px">{{ trans('index.ViewMoreTrip') }}</a>
                                    <div class="customNavigation mt-40">
                                        <a class="prev"><i class="icon arrow_left"></i></a>
                                        <a class="next"><i class="icon arrow_right"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach


                {{--<div class="item">--}}
                {{--<div class="container">--}}
                {{--<div class="row">--}}

                {{--<div class="col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s">--}}
                {{--<img src="img/promo_img_2.png" alt="">--}}
                {{--</div>--}}

                {{--<div class="col-md-6 promo-description">--}}
                {{--<p class="subheading">--}}
                {{--<i class="icon icon-Pointer"></i> Samutsakorn &nbsp&nbsp--}}
                {{--<i class="icon icon-Timer"></i> 9 Nov 2018 &nbsp 09:00-16:45 &nbsp&nbsp--}}
                {{--<i class="icon icon-Users"> 99 persons</i>--}}
                {{--</p>--}}
                {{--<h3 class="color-white">Trips 9 temples</h3>--}}
                {{--<p class="mb-30"> We want to tell your brand’s story with quality content that will help--}}
                {{--you inspire your audience, build meaningful connections and grow your success.--}}
                {{--Different marketing goals mean different content tools.</p>--}}
                {{--<a href="tel:0898115155" class="btn btn-lg btn-color"--}}
                {{--style="line-height: 100%;">{{ trans('index.JoinTrip') }}</a>--}}
                {{--<a href="#" class="btn btn-lg btn-dark"--}}
                {{--style="line-height: 100%; margin-left: 20px">{{ trans('index.ViewMoreTrip') }}</a>--}}
                {{--<div class="customNavigation mt-40">--}}
                {{--<a class="prev"><i class="icon arrow_left"></i></a>--}}
                {{--<a class="next"><i class="icon arrow_right"></i></a>--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--<div class="item">--}}
                {{--<div class="container">--}}
                {{--<div class="row">--}}

                {{--<div class="col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s">--}}
                {{--<img src="img/promo_img_3.png" alt="">--}}
                {{--</div>--}}

                {{--<div class="col-md-6 promo-description">--}}
                {{--<p class="subheading">--}}
                {{--<i class="icon icon-Pointer"></i> Bangkok &nbsp&nbsp--}}
                {{--<i class="icon icon-Timer"></i> 11 Nov 2018 &nbsp 09:00-16:45 &nbsp&nbsp--}}
                {{--<i class="icon icon-Users"> 600 persons</i>--}}
                {{--<h3 class="color-white">Come back again!--}}
                {{--Episode: Battle of the Miracles in Ramayana</h3>--}}
                {{--</p>--}}
                {{--<p class="mb-30"> We want to tell your brand’s story with quality content that will help--}}
                {{--you inspire your audience, build meaningful connections and grow your success.--}}
                {{--Different marketing goals mean different content tools.</p>--}}
                {{--<a href="tel:0898115155" class="btn btn-lg btn-color"--}}
                {{--style="line-height: 100%;">{{ trans('index.JoinTrip') }}</a>--}}
                {{--<a href="#" class="btn btn-lg btn-dark"--}}
                {{--style="line-height: 100%; margin-left: 20px">{{ trans('index.ViewMoreTrip') }}</a>--}}
                {{--<div class="customNavigation mt-40">--}}
                {{--<a class="prev"><i class="icon arrow_left"></i></a>--}}
                {{--<a class="next"><i class="icon arrow_right"></i></a>--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div> <!-- end slider -->

        </section>
        <!-- end promo section -->

        <!-- From Blog -->
        <section class="section-wrap bg-light from-blog" style="padding: 140px 0 140px 0">
            <div class="container">

                <div class="row heading">
                    <div class="col-md-6 col-md-offset-3">
                        <h2 class="text-center bottom-line">{{ trans('index.FromReview') }}</h2>
                        <p class="subheading text-center">{{ trans('index.ReviewSub') }}</p>
                    </div>
                </div>

                <span id="review"></span>
                <div class="container">

                    <div class="row">

                        <div id="owl-blog" class="owl-carousel owl-theme">
                            @foreach($reviews as $review)
                                <div class="blog-col" style="padding: 0px 0px 0px 4.5%;">
                                    @if($review->cover_image)
                                        <div class="entry-img">
                                            <a href="{{ action('ReviewController@show', [$review->id]) }}">
                                                <img src="{{ url($review->cover_image) }}" alt=""
                                                     style="margin: 0; padding: 0; max-width: 100%; max-height: 100%; height: auto; display: block;">
                                            </a>
                                        </div>
                                    @else
                                        <div class="entry-img">
                                            <a href="{{ action('ReviewController@show', [$review->id]) }}">
                                                <img src="{{ URL::asset('img/reviews/no_image.jpg') }}" alt="">
                                            </a>
                                        </div>
                                    @endif
                                    <div class="entry-box"
                                         style="max-width: 95%; padding-bottom: 35px; padding-top: 25px;">
                                        <div class="entry-title">
                                            <h4>
                                                <a style="font-size: 16px;"
                                                   href="{{ action('ReviewController@show', [$review->id]) }}">{{ $review->title }}</a>
                                            </h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>
                                                {{ trans('index.By') }} {{ $review->user->name }}
                                            </li>
                                            <li>
                                                {{ trans('index.PublishedAt') }}  {{ date('d/m/Y',strtotime($review->published_at)) }}
                                            </li>
                                            <li>
                                                {{ trans('main.ProvinceShow') }}  {{ $review->province->name }}
                                            </li>
                                            <li>
                                                <i class="far fa-eye"></i> {{ $review->view }}
                                                @if($review->view>=2)
                                                    {{ trans('index.View') }}{{ trans('create.s') }}
                                                @else
                                                    {{ trans('index.View') }}
                                                @endif
                                            </li>
                                        </ul>
                                        <div class="entry-content">
                                            {{--<p>{{  substr($review->text_sample, 0 , 300) }}</p>--}}
                                            {{--<p style="text-align: justify;">{{ substr($review->text_sample, 0, 550) }}</p>--}}
                                            <a style="font-size: 14px;"
                                               href="{{ action('ReviewController@show', [$review->id]) }}"
                                               class="read-more">{{ trans('index.ReadMore') }}</a>
                                        </div>
                                    </div>
                                </div> <!-- end post -->
                            @endforeach
                        </div>
                        <div class="col-md-4 col-md-offset-4 col-xs-12 cta-button text-center mt-70">
                            <a id="viewMoreReview" style="line-height: 100%" href="{{ url('review') }}"
                               class="btn btn-lg btn-color">{{ trans('index.ViewMore') }}</a>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="customNavigation mt-40 text-center">
                            <a class="prev"><i class="icon arrow_left"></i></a>
                            <a class="next"><i class="icon arrow_right"></i></a>
                        </div>

                    </div> <!-- end row -->
                </div>
            </div>

        </section> <!-- end from blog -->

        <!-- Clients -->
        <section class="section-wrap clients" style="padding: 120px 0px 110px 0px;">
            <div class="container">

                <div class="row heading">
                    <div class="col-md-6 col-md-offset-3">
                        <h2 class="text-center bottom-line">{{ trans('index.OurSupport') }}</h2>
                        <p class="subheading text-center">{{ trans('index.SupportSub') }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 client-logo">
                        <a href="https://thai.tourismthailand.org/" alt="{{ trans('index.SP1') }}"
                           title="{{ trans('index.SP1') }}" target="_blanlk">
                            <img src="img/client_logo_1.png" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4 client-logo">
                        <a href="https://www.mots.go.th/main.php?filename=index" alt="{{ trans('index.SP2') }}"
                           title="{{ trans('index.SP2') }}" target="_blanlk">
                            <img src="img/client_logo_2.png" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4 client-logo">
                        <a href="http://www.mfa.go.th/main/">
                            <img src="img/client_logo_3.png" alt="{{ trans('index.SP3') }}"
                                 title="{{ trans('index.SP3') }}" target="_blanlk">
                        </a>
                    </div>
                </div>
                <div class="row second-row">
                    <div class="col-sm-4 client-logo">
                        <a href="http://www.culture.go.th/culture_th/main.php?filename=index"
                           alt="{{ trans('index.SP4') }}" title="{{ trans('index.SP4') }}" target="_blanlk">
                            <img src="img/client_logo_4.png" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4 client-logo">
                        <a href="http://www.moc.go.th/" alt="{{ trans('index.SP5') }}์" title="{{ trans('index.SP5') }}"
                           target="_blanlk">
                            <img src="img/client_logo_5.png" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4 client-logo">
                        <a href="https://www.bot.or.th/Thai/Pages/default.aspx" alt="{{ trans('index.SP6') }}"
                           title="{{ trans('index.SP6') }}" target="_blanlk"><img src="img/client_logo_6.png"
                                                                                  alt=""></a>
                    </div>
                </div>

            </div>
        </section> <!-- end clients -->

        <!-- Contact -->
        <section class="section-wrap bg-light" style="padding: 130px 0 0px 0">
            <div class="container mb-100">

                <div class="row heading">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <h2 class="text-center bottom-line" id="contact">{{ trans('index.Contact') }}</h2>
                        <p class="subheading">{{ trans('index.ContactNote1') }}</p>
                    </div>
                </div>

                <div class="row mb-30">
                    <div class="col-md-4 service-item">
                        <div class="service-item-box icon-effect-1 icon-effect-1a text-center">
                            <a href="#">
                                <i class="icon icon-Pointer hi-icon"></i>
                            </a>
                            <h3>{{ trans('index.Address') }}</h3>
                            <p>
                                {{ trans('index.AddressDetail1') }} <br>
                                {{ trans('index.AddressDetail2') }} <br>
                                {{ trans('index.AddressDetail3') }}
                            </p>
                        </div>
                    </div> <!-- end service item -->

                    <div class="col-md-4 service-item">
                        <div class="service-item-box icon-effect-1 icon-effect-1a text-center">
                            <a href="#">
                                <i class="icon icon-Phone hi-icon"></i>
                            </a>
                            <h3>{{ trans('index.CallUs') }}</h3>
                            <p>+(66)2 465 1331
                                <br>+(66)2 470 8000
                                <br>{{ trans('index.ContactDetail3') }}
                            </p>


                        </div>
                    </div> <!-- end service item -->

                    <div class="col-md-4 service-item">
                        <div class="service-item-box icon-effect-1 icon-effect-1a text-center">
                            <a href="#">
                                <i class="icon icon-Mail hi-icon"></i>
                            </a>
                            <h3>{{ trans('index.Email') }}</h3>
                            <p>support@tourthai.com
                                <br>info@tourthai.com
                                <br>{{ trans('index.EmailDetail3') }}
                            </p>
                        </div>
                    </div> <!-- end service item -->
                </div>

                {{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242.24486670187792!2d100.48478197026968!3d13.723422212580367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e298f7d929460d%3A0x213724d49fcee274!2z4LiL4Lit4LiiIOC5gOC4l-C4reC4lOC5hOC4lyAxNSDguYHguILguKfguIcg4Lia4Liy4LiH4Lii4Li14LmI4LmA4Lij4Li34LitIOC5gOC4guC4lSDguJjguJnguJrguLjguKPguLUg4LiB4Lij4Li44LiH4LmA4LiX4Lie4Lih4Lir4Liy4LiZ4LiE4LijIDEwNjAw!5e0!3m2!1sth!2sth!4v1542444085013"  style="border:0; width: 100%; height: 500px; background: rgba(0,84,123,0.3)"></iframe>--}}

                {{--<div class="row">--}}

                {{--<div class="col-md-12 mt-50" style="width: 100%">--}}
                {{--<form id="contact-form" action="#">--}}

                {{--<div class="row contact-row">--}}
                {{--<div class="col-md-4 contact-name">--}}
                {{--<input name="name" id="name" type="text" placeholder="Name*" style="background: #fff;">--}}
                {{--</div>--}}
                {{--<div class="col-md-4 contact-email">--}}
                {{--<input name="tel" id="tel" type="tel" placeholder="Tel*" style="background: #fff;">--}}
                {{--</div>--}}
                {{--<div class="col-md-4 contact-email">--}}
                {{--<input name="mail" id="mail" type="email" placeholder="E-mail*" style="background: #fff;">--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--<input name="subject" id="subject" type="text" placeholder="Subject" style="background: #fff;">--}}
                {{--<textarea name="comment" id="comment" placeholder="Message" style="background: #fff;" rows="20"></textarea>--}}
                {{--<input type="submit" class="btn btn-lg btn-color btn-submit btn-block" value="Send Message"--}}
                {{--id="submit-message">--}}
                {{--<div id="msg" class="message"></div>--}}
                {{--</form>--}}
                {{--</div> <!-- end col -->--}}
                {{--</div>--}}

            </div>

        </section>


    {{--<div class="col-md-4">--}}
    {{--<h5>Get in Touch</h5>--}}
    {{--<p>Mon-Fri: 8:00 AM – 04:00 PM</p>--}}

    {{--<div class="contact-item">--}}
    {{--<div class="contact-icon">--}}
    {{--<i class="icon icon-Pointer"></i>--}}
    {{--</div>--}}
    {{--<h6>Address</h6>--}}
    {{--<p>Thailand,<br>--}}
    {{--49 Soi. Thoedthai 15 Rd.Thoedthai--}}
    {{--<br> Bang Yi Ruea 10600</p>--}}
    {{--</div> <!-- end address -->--}}

    {{--<div class="contact-item">--}}
    {{--<div class="contact-icon">--}}
    {{--<i class="icon icon-Phone"></i>--}}
    {{--</div>--}}
    {{--<h6>Call Us</h6>--}}
    {{--<span>+662 465 1331</span>--}}
    {{--</div> <!-- end phone number -->--}}

    {{--<div class="contact-item">--}}
    {{--<div class="contact-icon">--}}
    {{--<i class="icon icon-Mail"></i>--}}
    {{--</div>--}}
    {{--<h6>E-mail</h6>--}}
    {{--<a href="mailto:topumin@hotmail.com">support@thailand-portal.com</a>--}}
    {{--</div> <!-- end email -->--}}

    {{--</div>--}}

    {{--<div class="col-md-8">--}}
    {{--<form id="contact-form" action="#">--}}

    {{--<div class="row contact-row">--}}
    {{--<div class="col-md-6 contact-name">--}}
    {{--<input name="name" id="name" type="text" placeholder="Name*">--}}
    {{--</div>--}}
    {{--<div class="col-md-6 contact-email">--}}
    {{--<input name="mail" id="mail" type="email" placeholder="E-mail*">--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<input name="subject" id="subject" type="text" placeholder="Subject">--}}
    {{--<textarea name="comment" id="comment" placeholder="Message"></textarea>--}}
    {{--<input type="submit" class="btn btn-lg btn-color btn-submit" value="Send Message" id="submit-message">--}}
    {{--<div id="msg" class="message"></div>--}}
    {{--</form>--}}
    {{--</div> --}}
    <!-- end col -->

    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    <!-- end contact -->

        {{--<!-- back to top -->--}}
        {{--<div id="back-to-top" style="z-index: 10000;" class="show">--}}
        {{--<a href="#top"><i class="fa fa-angle-up"></i></a>--}}
        {{--</div>--}}


        {{--<!-- Google Map -->--}}
        {{--<div id="google-map" class="gmap" data-address="V Tytana St, Manila, Philippines"></div>--}}

    </div> <!-- end main-wrapper -->

    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->

@stop

@section('response')
    {{--@if(Session::has('flash_message'))--}}
    {{--<ul class="alert alert-danger"--}}
    {{--style="margin-bottom: 0%; background: rgba(0,155,60,0.89); text-align: center; font-size: 16px; height: 82px; max-heiht: 100%; vertical-align: middle;">--}}
    {{--<li style="margin-top: 15px;z-index: 0">--}}
    {{--<i class="icon icon-Plaine"></i>--}}
    {{--<em> {!! session('flash_message') !!}</em>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--@endif--}}
    @if(Session::has('flash_message_login'))
        <span style="opacity: 0;">
            @if(Auth::user()->role->name === 'Gold')
                {{ $temp = trans('flash.Gold') }}
            @elseif(Auth::user()->role->name === 'ITSupport')
                {{ $temp = trans('flash.ITSupport')}}
            @else
                {{ $temp = trans('flash.Member')}}
            @endif
        </span>
        <ul class="alert alert-primary"
            style="margin-bottom: 0%; background: rgba(12, 76, 178,0.9); text-align: center; font-size: 16px; height: 82px; max-heiht: 100%; vertical-align: middle;">
            <li style="margin-top: 15px;z-index: 0">
                <i class="icon icon-User"></i>
                <em> {!! session('flash_message_login') !!} {{ $temp }} </em>
            </li>
        </ul>
    @endif
    @if(Session::has('flash_message_unpublished_failed'))
        <ul class="alert alert-success" style="margin-bottom: 0%; background: rgba(155,2,0,0.82); text-align: center; font-size: 16px; height: 82px; max-heiht: 100%; vertical-align: middle;">
            <li style="margin-top: 15px;z-index: 0">
                <i class="icon icon-Megaphone"></i>
                <em> {!! session('flash_message_unpublished_failed') !!}</em>
            </li>
        </ul>
    @endif
@stop

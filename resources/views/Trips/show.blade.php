@extends('layouts.main2')

@section('site_title', trans('main.Trip').': '.($trip->name))

@section('content')


    <div class="main-wrapper-onepage main oh">

        <section class="page-title text-center"
                 style="background-color: rgba(0,0,0,0.5); background-image: url({{ URL::asset('img/trips/temp18.gif') }}); background-size: cover;">

            <div class="container relative clearfix layer">
                <div class="title-holder">
                    <div class="title-text local-scroll">
                        <a name="detail" href="#detail"><h1 class="color-white heading-frame"> {{ trans('main.Trip2') }}
                            : {{ $trip->name }}</h1></a>
                        <ol class="breadcrumb" style="color: #fff; font-size: 16px;">
                            <li>
                                {{ trans('index.By') }} {{ $trip->user->name }}
                            </li>
                            <li>
                                {{ trans('index.PublishedAt') }}  {{ date('d/m/Y',strtotime($trip->published_at)) }}
                            </li>
                            <li>
                                {{ trans('index.Province') }}  {{ $trip->province->name }}
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section> <!-- end page title -->


    {{--<!-- Blog Single -->--}}
    {{--<section class="section-wrap pb-100 blog-single pt-60">--}}
    {{--<div class="container relative">--}}
    {{--<div class="row">--}}

    {{--<!-- content -->--}}
    {{--<div class="col-sm-12 blog-content">--}}

    {{--<!-- standard post -->--}}
    {{--<div class="entry-item">--}}
    {{--<div class="row">--}}
    {{--<div class="col-sm-10 col-sm-offset-1">--}}

    {{--<div class="entry">--}}
    {{--<div class="entry-content">--}}

    {{--<span style="text-align:  justify;"> {{ $trip->detail }} </span>--}}

    {{--</div>--}}
    {{--</div> <!-- end entry -->--}}

    {{--</div>--}}
    {{--</div> <!-- end row -->--}}

    {{--</div> <!-- end entry item -->--}}
    {{--</div> <!-- end col -->--}}

    {{--</div> <!-- end row -->--}}

    {{--</div> <!-- end container -->--}}
    {{--</section> <!-- end blog single -->--}}


    <!-- Our Services -->
        <section id="detail" class="section-wrap-mp services style-2 pb-0 mt-30 pb-0">
            <div class="container">

                <div class="row">
                    <div class="col-md-3 service-item">
                        <a>
                            <i class="icon icon-Agenda"></i>
                        </a>
                        <div class="service-item-box">
                            <h3>{{ trans('create.DateStart') }}</h3>
                            <p>{{ date('d/m/Y',strtotime($trip->date_start)) }}</p>
                        </div>
                        <hr>
                    </div> <!-- end service item -->

                    <div class="col-md-3 service-item">
                        <a>
                            <i class="icon icon-Timer"></i>
                        </a>
                        <div class="service-item-box">
                            <h3>{{ trans('create.TimeStart') }}</h3>
                            <p>{{ date('G:i', strtotime($trip->time_start)) }}</p>
                        </div>
                        <hr>
                    </div> <!-- end service item -->

                    <div class="col-md-3 service-item">
                        <a>
                            <i class="icon icon-Agenda"></i>
                        </a>
                        <div class="service-item-box">
                            <h3>{{ trans('create.DateStop') }}</h3>
                            <p>{{ date('d/m/Y',strtotime($trip->date_stop)) }}</p>
                        </div>
                        <hr>
                    </div> <!-- end service item -->

                    <div class="col-md-3 service-item">
                        <a>
                            <i class="icon icon-Timer"></i>
                        </a>
                        <div class="service-item-box">
                            <h3>{{ trans('create.TimeStop') }}</h3>
                            <p>{{ date('G:i', strtotime($trip->time_stop)) }}</p>
                        </div>
                        <hr>
                    </div> <!-- end service item -->

                    <div class="col-md-3 service-item">
                        <a>
                            <i class="icon icon-Bag"></i>
                        </a>
                        <div class="service-item-box">
                            <h3>{{ trans('create.Price') }}</h3>
                            <p>{{ $trip->price }} {{ trans('index.Baht') }}</p>
                        </div>
                        <hr>
                    </div> <!-- end service item -->

                    <div class="col-md-3 service-item">
                        <a>
                            <i class="icon icon-Users"></i>
                        </a>
                        <div class="service-item-box">
                            <h3>{{ trans('create.Amount') }}</h3>
                            <p>{{ $trip->amount }} {{ trans('index.Persons') }}</p>
                        </div>
                        <hr>
                    </div> <!-- end service item -->

                    <div class="col-md-3 service-item">
                        <a href="#">
                            <i class="icon icon-Pointer"></i>
                        </a>
                        <div class="service-item-box">
                            <h3>{{ trans('create.Provinces') }}</h3>
                            <p>{{ $trip->province->name }}</p>
                        </div>
                        <hr>
                    </div> <!-- end service item -->

                    <div class="col-md-3 service-item">
                        <a>
                            <i class="icon icon-Phone2"></i>
                        </a>
                        <div class="service-item-box">
                            <h3>{{ trans('main.Contact') }}</h3>
                            <p>{{ $trip->user->tel }}</p>
                        </div>
                        <hr>
                    </div> <!-- end service item -->

                </div>
            </div>
        </section> <!-- end services -->

        <!-- Blog Single -->
        <section class="section-wrap pb-100 blog-single pt-20">
            <div class="container relative">
                <div class="row">

                    <!-- content -->
                    <div class="col-sm-12 blog-content">

                        <!-- standard post -->
                        <div class="entry-item">
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1">

                                    <div class="entry">
                                        <div class="entry-content">

                                            <div class="col-md-12 clearfix">
                                                <div class="entry-share">
                                                    <h6>Share:</h6>
                                                    <div class="socials">
                                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"
                                                           target="_blank"><i
                                                                    class="fab fa-facebook-f"></i></a>
                                                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}"
                                                           target="_blank"><i
                                                                    class="fab fa-twitter"></i></a>
                                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                                        <a href="#"><i
                                                                    class="fab fa-tripadvisor"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end share -->

                                    </div>
                                </div> <!-- end entry -->

                            </div>
                        </div> <!-- end row -->

                    </div> <!-- end entry item -->
                </div> <!-- end col -->

            </div> <!-- end row -->
        </section>

    </div> <!-- end container -->
    {{--</section> <!-- end blog single -->--}}

    {{--</div>--}}

    <script>
        document.getElementById("trip_menu").style.color = "#11afff";
    </script>
    @guest
    @else
        @if((Auth::user()->id) == ($trip->user_id))
            <div id="create-sth" style="z-index: 10010;" class="show">
                <a id="edit-trip" href="{{ action('TripController@edit', $trip->id) }}" alt="edit trip"><i
                            class="fa fas fa-cog"></i></a>
            </div>

            <div id="delete-sth" style="z-index: 10010;" class="show">
                <a id="delete-trip" href="{{ url('trip/delete/'. $trip->id) }}" alt="delete trip"><i class="fas fa-trash-alt"></i></a>
            </div>


            {{--<form action="{{action('ReviewController@destroy', $review->id)}}" method="post">--}}
            {{--@csrf--}}
            {{--<input name="_method" type="hidden" value="DELETE">--}}
            {{--<button class="btn btn-danger" type="submit">Delete</button>--}}
            {{--</form>--}}

        @endif
    @endguest
@stop






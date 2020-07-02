<?php

?>
@extends('layouts.main2')

@section('site_title', trans('main.Review'))

@section('content')

    <!-- Portfolio -->
    <section class="section-wrap-mp pb-50">
        <div class="container">

            <h2 class=" bottom-line text-center mt-60 mb-30">
                {{ trans('index.ReviewAll') }}
            </h2>
            <!-- filter -->
            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio-filter">
                        <a href="#" class="filter active" data-filter="*"> {{ trans('main.All') }} </a>
                        <a href="#" class="filter" data-filter=".กิน"> {{ trans('main.Eat') }} </a>
                        <a href="#" class="filter" data-filter=".ช็อป"> {{ trans('main.Shop') }} </a>
                        <a href="#" class="filter" data-filter=".เที่ยว"> {{ trans('main.Travel') }} </a>
                        <a href="#" class="filter" data-filter=".พัก"> {{ trans('main.Hotel') }} </a>
                        <a href="#" class="filter" data-filter=".เส้นทาง"> {{ trans('main.Route') }} </a>
                        {{--<a href="{{ url('create-review') }}"--}}
                        {{--style="color: #fff;background: #0c4cb2; border: #0c4cb2 solid" class="">--}}
                        {{--<i class="fa fas fa-plus"></i> {{ trans('main.CreateReview') }}--}}
                        {{--</a>--}}
                    </div>
                </div>
            </div> <!-- end filter -->

            <div class="row">

                <div class="works-grid titles">

                    @foreach($reviews as $review)
                        <div class="col-md-4 col-xs-6 work-item

                            @foreach($category_reviews as $cr)
                                @if(($cr->review_id) == ($review->id))
                                    @foreach($categories as $category)
                                        @if(($category->id) == ($cr->category_id))
                                            {{ $category->name }}
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach

                                " id=SetCategory{{ $review->id  }}">

                            <div class="work-container">
                                <div class="work-img">
                                    @if($review->cover_image)
                                        <img id="review-{{ $review->id }}" src="{{  url($review->cover_image) }}" alt="">
                                    @else
                                        <img src="{{ url("img/reviews/no_image.jpg") }}">

                                    @endif
                                    <div class="portfolio-overlay">
                                        <div class="project-icons">
                                            {{--class="lightbox-gallery"--}}
                                            <a href="{{ action('ReviewController@show', [$review->id]) }}"
                                               title="{{ $review->title }}"><i class="fa fa-search"></i></a>
                                            <a href="#" class="project-icon"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="work-description">
                                    <h3>
                                        <a  id="review-{{ $review->id }}" href="{{ action('ReviewController@show', $review->id) }}">{{ $review->title }} (<i class="far fa-eye"></i> {{ $review->view }})</a>
                                    </h3>
                                    <span style="color: #0c4cb2">{{ trans('index.Category') }} </span>
                                    @foreach($category_reviews as $cr)
                                        @if(($cr->review_id) === ($review->id))
                                            @foreach($categories as $category)
                                                @if(($category->id) === ($cr->category_id))
                                                    <span style="color: #0c4cb2">{{ $category->name }} </span>
                                                @endif
                                            @endforeach
                                        @else
                                            @continue
                                        @endif
                                    @endforeach
                                    <span style="color: #11afff">{{ trans('create.PublishedShow') }}: {{ date('d/m/Y',strtotime($review->published_at)) }}</span>

                                </div>
                            </div>
                        </div> <!-- end work-item -->
                    @endforeach
                </div>
                {{ $reviews->links() }}
            </div>
        </div>
    </section> <!-- end portfolio-->


    <script>
        document.getElementById("review_menu").style.color = "#11afff";
    </script>

    <!-- jQuery -->
    <script type="text/javascript">
        // $('.filter').click(function() {
        //     var data = $(this).attr('data-filter');
        //
        //     $('.web-design').css('display','none');
        //     $('.'+data).css('display','visible');
        // });
    </script>

    <!-- user btn -->
    @can('unpublished-reviews', Auth::user())
        {{--@if(Auth::user())--}}
            <!-- user btn -->
            <div id="user-btn" style="z-index: 10000;" class="show">
                <a id="unpublished-review" href="{{ url('review/unpublished') }}" alt="user button" title="your profile" style="margin-top:3px;">
                    <i class="far fa-eye-slash"></i>
                    {{--<i class="fa fa-user-alt"></i>--}}
                </a>
            </div>
        {{--@endif--}}
    @endcan()

    <!-- create sth -->
    @guest
    @else
        {{--@if((Auth::user()->role->slug == 'gold') or (Auth::user()->role->slug == 'member'))--}}
        <div id="create-sth" style="z-index: 10010;" class="show">
            <a id="create-review" href="{{ action('ReviewController@create') }}" alt="create review" style="margin-top:3px;"><i class="fa fas fa-plus"></i></a>
        </div>
        {{--@endif--}}
    @endguest

@stop

@section('response')
    @if(Session::has('flash_message_create'))
        <ul class="alert alert-success"
            style="margin-bottom: 0%; background: rgba(0,155,60,0.89); text-align: center; font-size: 16px; height: 82px; max-heiht: 100%; vertical-align: middle;">
            <li style="margin-top: 15px;z-index: 0">
                <i class="fas fa-flag"></i>
                <em> {!! session('flash_message_create') !!}</em>
            </li>
        </ul>
    @endif
    @if(Session::has('flash_message_edit'))
        <ul class="alert alert-success"
            style="margin-bottom: 0%; background: rgba(0,155,60,0.89); text-align: center; font-size: 16px; height: 82px; max-heiht: 100%; vertical-align: middle;">
            <li style="margin-top: 15px;z-index: 0">
                <i class="far fa-edit"></i>
                <em> {!! session('flash_message_edit') !!}</em>
            </li>
        </ul>
    @endif
    @if(Session::has('flash_message_delete'))
        <ul class="alert alert-success"
            style="margin-bottom: 0%; background: rgba(0,155,60,0.89); text-align: center; font-size: 16px; height: 82px; max-heiht: 100%; vertical-align: middle;">
            <li style="margin-top: 15px;z-index: 0">
                <i class="fas fa-trash-alt"></i>
                <em> {!! session('flash_message_delete') !!}</em>
            </li>
        </ul>
    @endif
    @if(Session::has('flash_message_unpublished_failed'))
        <ul class="alert alert-success"
            style="margin-bottom: 0%; background: rgba(155,2,0,0.82); text-align: center; font-size: 16px; height: 82px; max-heiht: 100%; vertical-align: middle;">
            <li style="margin-top: 15px;z-index: 0">
                <i class="icon icon-Megaphone"></i>
                <em> {!! session('flash_message_unpublished_failed') !!}</em>
            </li>
        </ul>
    @endif
    @if(Session::has('flash_message_error'))
        <ul class="alert alert-success"
            style="margin-bottom: 0%; background: rgba(155,2,0,0.82); text-align: center; font-size: 16px; height: 82px; max-heiht: 100%; vertical-align: middle;">
            <li style="margin-top: 15px;z-index: 0">
                <i class="icon icon-Megaphone"></i>
                <em> {!! session('flash_message_error') !!}</em>
            </li>
        </ul>
    @endif
@stop
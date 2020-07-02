<?php

?>
@extends('layouts.main2')

@section('site_title', trans('main.Trip'))

@section('content')

    <!-- Portfolio -->
    <section class="section-wrap-mp pb-50">
        <div class="container mt-20">

            <h2 class=" bottom-line text-center mt-40 mb-60" >
                {{ trans('index.TripAll') }}
            </h2>

            <div class="row">

                <div class="works-grid titles">
                    @foreach($trips as $trip)
                        <div class="col-md-4 col-xs-6 work-item web-design">

                            <div class="work-container">
                                <div class="work-img">
                                    <a id="trip-{{ $trip->id }}" href="{{ action('TripController@show', [$trip->id]) }}">
                                        @if($trip->cover_image)
                                            <img src="{{  url($trip->cover_image) }}" alt="">
                                        @else
                                            <img src="{{ url("img/trips/no_image.png") }}">
                                        @endif
                                    </a>
                                </div>
                                <div class="work-description">
                                    <h3>
                                        <a id="trip-{{ $trip->id }}" href="{{ action('TripController@show', $trip->id) }}">{{ $trip->name }}</a>
                                    </h3>
                                    <span style="color: #0c4cb2">
                                        {{ trans('index.Province') }}
                                        @foreach($provinces as $province)
                                            @if( ($trip->province_id) == ($province->id) )
                                                {{ $province->name }}
                                            @endif
                                        @endforeach
                                        <span style="color: #11afff">{{ trans('create.DateStart') }}: {{ date('d/m/Y',strtotime($trip->date_start)) }}</span>
                                    </span>

                                </div>
                            </div>
                        </div> <!-- end work-item -->
                    @endforeach
                </div>
                {{ $trips->links() }}
            </div>
        </div>
    </section> <!-- end portfolio-->


    <script>
        document.getElementById("trip_menu").style.color = "#11afff";
    </script>

    <!-- user btn -->
    @can('unpublished-trips', Auth::user())
        {{--@if(Auth::user())--}}
        <!-- user btn -->
        <div id="user-btn" style="z-index: 10000;" class="show">
            <a id="unpublished-trip" href="{{ url('trip/unpublished') }}" alt="user button" title="your profile" style="margin-top:3px;">
                <i class="far fa-eye-slash"></i>
                {{--<i class="fa fa-user-alt"></i>--}}
            </a>
        </div>
        {{--@endif--}}
    @endcan()

    <!-- create sth -->
    @guest
    @else
        @if(Auth::user()->role->slug == 'gold')
                <div id="create-sth" style="z-index: 10010;" class="show">
                    <a id="create-trip" href="{{ action('TripController@create') }}" alt="create trip" style="margin-top:3px;"><i class="fa fas fa-plus"></i></a>
                </div>
        @endif
    @endguest

@stop

@section('response')
    @if(Session::has('flash_message_create'))
        <ul class="alert alert-success" style="margin-bottom: 0%; background: rgba(0,155,60,0.89); text-align: center; font-size: 16px; height: 82px; max-heiht: 100%; vertical-align: middle;">
            <li style="margin-top: 15px;z-index: 0">
                <i class="fas fa-flag"></i>
                <em> {!! session('flash_message_create') !!}</em>
            </li>
        </ul>
    @endif
    @if(Session::has('flash_message_edit'))
        <ul class="alert alert-success" style="margin-bottom: 0%; background: rgba(0,155,60,0.89); text-align: center; font-size: 16px; height: 82px; max-heiht: 100%; vertical-align: middle;">
            <li style="margin-top: 15px;z-index: 0">
                <i class="far fa-edit"></i>
                <em> {!! session('flash_message_edit') !!}</em>
            </li>
        </ul>
    @endif
    @if(Session::has('flash_message_delete'))
        <ul class="alert alert-success" style="margin-bottom: 0%; background: rgba(0,155,60,0.89); text-align: center; font-size: 16px; height: 82px; max-heiht: 100%; vertical-align: middle;">
            <li style="margin-top: 15px;z-index: 0">
                <i class="fas fa-trash-alt"></i>
                <em> {!! session('flash_message_delete') !!}</em>
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


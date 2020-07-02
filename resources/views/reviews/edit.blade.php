@extends('layouts.main2')

@section('site_title', trans('main.EditReview'))

@section('content')

    {!! Form::model($review, ['method' => 'PATCH','action'=>['ReviewController@update', $review->id], 'files' => true]) !!}
        @include('reviews._form', ['submitButtonText' => trans('create.EditReview') ])
    {!! Form::close() !!}

@stop

@section('response')
    @if($errors->any())
        <ul class="alert alert-danger" style="margin-bottom: 0%; background: rgba(155,2,0,0.82); text-align: center; font-size: 16px; max-heiht: 100%; vertical-align: middle;">
            <li style="margin-top: 3px;z-index: 0">
                <i class="icon icon-Megaphone"></i> {{ trans('flash.Warning') }}
            </li>
            @foreach($errors->all() as $error)
                <li style="margin-top: 2px;z-index: 0">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif
@stop

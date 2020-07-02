@extends('layouts.main2')

@section('site_title', trans('main.CreateReview'))

@section('response')
    @if($errors->any())
        <ul class="alert alert-danger" style="margin-bottom: 0%;background: rgba(252,20,0,0.78); text-align: center; font-size: 16px;">
            <li><i class="icon icon-Megaphone"></i> {{ trans('flash.Warning') }}</li>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@stop

@section('content')
    {!! Form::open(['url'=>'review', 'method' => 'POST' , 'files' => true]) !!}
        @include('reviews._form', ['submitButtonText' => trans('create.CreateReview')])
    {!! Form::close() !!}
@stop

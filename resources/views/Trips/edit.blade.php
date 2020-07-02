@extends('layouts.main2')

@section('site_title', trans('main.EditTrip'))

@section('content')

    {!! Form::model($trip, ['method' => 'PATCH','action'=>['TripController@update', $trip->id], 'files' => true]) !!}
        @include('trips._form', ['submitButtonText' => trans('create.EditTrip') ])
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


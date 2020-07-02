@extends('layouts.main2')

@section('site_title', trans('auth.Register') )

@section('content')

    <link rel="stylesheet" href="{{ URL::asset('css/styleLogin.css') }}"/>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8" style="font-family:'Kanit',sans-serif; width: 70%; margin: 14% 15%;">
                <div class="card">
                    <h2 class="bottom-line text-center mt-60 mb-60"> {{ trans('auth.Register') }} </h2>

                    <div class="card-body">
                        {!! Form::open(['url' => 'register', 'method' => 'POST']) !!}
                        {{--<form method="POST" action="{{ route('register') }} ">--}}
                        @csrf

                        <div class="form-group row">
                            <label for="name"
                                   class="col-md-4 col-md-offset-1 col-form-label text-md-right">{{ trans('auth.Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" style="background-color: #fff;" type="text"
                                       class="form-control"
                                       name="name" required autofocus>

                                {{--@if ($errors->has('name'))--}}
                                {{--<span style="color: #a8000b;" class="invalid-feedback" role="alert">--}}
                                {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                {{--</span>--}}
                                {{--@endif--}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name"
                                   class="col-md-4 col-md-offset-1 col-form-label text-md-right">{{ trans('auth.Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" style="background-color: #fff;" type="text"
                                       class="form-control"
                                       name="username" required autofocus>

                                {{--@if ($errors->has('username'))--}}
                                {{--<span style="color: #a8000b;" class="invalid-feedback" role="alert">--}}
                                {{--<strong>{{ $errors->first('username') }}</strong>--}}
                                {{--</span>--}}
                                {{--@endif--}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                   class="col-md-4 col-md-offset-1 col-form-label text-md-right">{{ trans('auth.Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" style="background-color: #fff;" type="password"
                                       {{--class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"--}}
                                       name="password" required>

                                {{--@if ($errors->has('password'))--}}
                                {{--<span style="color: #a8000b;" class="invalid-feedback" role="alert">--}}
                                {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                {{--</span>--}}
                                {{--@endif--}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                   class="col-md-4 col-md-offset-1 col-form-label text-md-right mt-0">{{ trans('auth.CPassword') }}</label>

                            <div class="col-md-6 mt-0">
                                <input id="password-confirm" style="background-color: #fff;" type="password"
                                       class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                   class="col-md-4 col-md-offset-1 col-form-label text-md-right">{{ trans('auth.Gender') }}</label>

                            <div class="col-md-6">
                                <select id="gender" style="background-color: #fff;" type="text"
                                        {{--class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"--}}
                                        name="gender" required>
                                    <option value="male">{{ trans('auth.Male') }}</option>
                                    <option value="female">{{ trans('auth.Female') }}</option>
                                </select>
                            </div>
                        </div>

                        {{--<div class="form-group row" style="color: #0c4cb2;">--}}
                        {{--<label for="image"--}}
                        {{--class="col-md-4 col-md-offset-1 col-form-label text-md-right mt-10">{{ trans('auth.Image') }}</label>--}}

                        {{--<div class="col-md-6  mb-20 mt-10">--}}
                        {{--<input id="image" type="file"--}}
                        {{--class="{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image"--}}
                        {{--value="{{ old('image') }}">--}}

                        {{--@if ($errors->has('image'))--}}
                        {{--<span style="color: #a8000b;" class="invalid-feedback" role="alert">--}}
                        {{--<strong>{{ $errors->first('image') }}</strong>--}}
                        {{--</span>--}}
                        {{--@endif--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-group row">
                            <label for="email"
                                   class="col-md-4 col-md-offset-1 col-form-label text-md-right mt-10">{{ trans('auth.Email') }}</label>

                            <div class="col-md-6 mt-10">
                                <input id="email" style="background-color: #fff;" type="email"
                                       class="form-control"
                                       name="email" required>

                                {{--@if ($errors->has('email'))--}}
                                {{--<span style="color: #a8000b;" class="invalid-feedback" role="alert">--}}
                                {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                {{--</span>--}}
                                {{--@endif--}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tel"
                                   class="col-md-4 col-md-offset-1 col-form-label text-md-right mt-10">{{ trans('auth.Tel') }}</label>

                            <div class="col-md-6 mt-10">
                                <input id="tel" style="background-color: #fff;" type="tel" class="form-control"
                                       name="tel" required>

                                {{--@if ($errors->has('tel'))--}}
                                {{--<span style="color: #a8000b;" class="invalid-feedback" role="alert">--}}
                                {{--<strong>{{ $errors->first('tel') }}</strong>--}}
                                {{--</span>--}}
                                {{--@endif--}}
                            </div>
                        </div>

                        <div class="form-group row mb-0 mt-40">
                            <div class="col-md-6 col-md-offset-5">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ trans('auth.Register') }}
                                </button>
                            </div>
                        </div>
                        {{--</form>--}}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- bg -->
    <ul class="bg-pulse" style="z-index: -20000;">
        <li style="bottom:-550px;"></li>
        <li style="bottom:-550px;"></li>
        <li style="bottom:-550px;"></li>
        <li style="bottom:-550px;"></li>
        <li style="bottom:-550px;"></li>
        <li style="bottom:-550px;"></li>
        <li style="bottom:-550px;"></li>
        <li style="bottom:-550px;"></li>
        <li style="bottom:-550px;"></li>
        <li style="bottom:-550px;"></li>
    </ul>

    <script>
        document.getElementById("register_menu").style.color = "#11afff";
    </script>

@endsection

@section('response')
    @if($errors->any())
        <ul class="alert alert-danger"
            style="margin-bottom: 0%; background: rgba(155,2,0,0.82); text-align: center; font-size: 16px; max-heiht: 100%; vertical-align: middle;">
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

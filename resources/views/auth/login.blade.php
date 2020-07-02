@extends('layouts.main2')

@section('site_title', trans('auth.Login') )

@section('content')

<link rel="stylesheet" href="{{ URL::asset('css/styleLogin.css') }}" />

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12" style="font-family:'Kanit',sans-serif; width: 76%; margin: 14% 11% 11% 11%;">

            <div class="card">
                <h2 class=" bottom-line text-center mt-60 mb-60" >{{ trans('auth.Login') }}</h2>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-12 col-md-4 col-md-offset-2 text-md-right">{{ trans('auth.EorU') }}</label>

                            <div class="col-md-4">
                                <input id="email" style="background-color: #fff;" type="text" class="form-control" name="email" value="{{ old('username') }}" required autofocus>

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong style="color: #a8000b;">{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-12 col-md-4 col-md-offset-2  col-form-label text-md-right">{{ trans('auth.Password') }}</label>

                            <div class="col-md-4">
                                <input id="password" style="background-color: #fff;" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong style="color: #a8000b;">{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 col-md-offset-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="color: #0c4cb2;">
                                        {{ trans('auth.RememberMe') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 mt-40">
                            <div class="col-md-6 col-md-offset-6">
                                <button id="login" type="submit" class="btn btn-primary">
                                    {{ trans('auth.Login') }}
                                </button>
                                &nbsp;
                                <label class="form-check-label" style="font-size: 15px;">
                                    <a class="" href="{{ route('password.request') }}">
                                        {{ trans('auth.ForgotYourPassword') }}
                                    </a>
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- bg -->
    <ul class="bg-pulse" style="z-index: -20000;">
        <li style="bottom:-200px;"></li>
        <li style="bottom:-200px;"></li>
        <li style="bottom:-200px;"></li>
        <li style="bottom:-200px;"></li>
        <li style="bottom:-200px;"></li>
        <li style="bottom:-200px;"></li>
        <li style="bottom:-200px;"></li>
        <li style="bottom:-200px;"></li>
        <li style="bottom:-200px;"></li>
        <li style="bottom:-200px;"></li>
    </ul>

<script>
    document.getElementById("login_menu").style.color = "#11afff";
</script>

@endsection

@section('response')
    @if(Session::has('flash_message_logout'))
        {{ $temp = '' }}
        <ul class="alert alert-warning" style="margin-bottom: 0%; background: rgba(12, 76, 178,0.9); text-align: center; font-size: 16px; height: 82px; max-heiht: 100%; vertical-align: middle;">
            <li style="margin-top: 15px;z-index: 0">
                <i class="icon icon-Flag"></i>
                <em> {!! session('flash_message_logout') !!} </em>
            </li>
        </ul>
    @endif
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



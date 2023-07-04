<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div style="width: 100%; height: 100%; position: relative; background: white">
            <img style="width: 720px; height: 633px; left: 0px; top: 0px; position: absolute" src="{{ Vite::asset('resources/img/Rectangle 7.svg') }}" />
            <div style="width: 720px; height: 633px; left: 0px; top: 0px; position: absolute; background: rgba(32, 66, 131, 0.90)"></div>
            <div style="width: 133px; height: 50px; left: 61px; top: 37px; position: absolute">
                <div style="width: 133px; height: 50px; left: 0px; top: 0px; position: absolute">
                    <img src="{{ Vite::asset('resources/img/Frame.svg') }}" alt="">
                </div>
            </div>
            <div style="left: 91px; top: 243px; position: absolute; color: white; font-size: 40px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Selamat Datang!</div>
            <div style="width: 576px; left: 91px; top: 325px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>Vestibulum commodo est massa, in condimentum odio dignissim </div>
            <div style="left: 813px; top: 107px; position: absolute; color: #204283; font-size: 32px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Log in</div>
            <div style="height: 91px; left: 813px; top: 217px; position: absolute">
                <p style="left: 0px; top: 0px; position: absolute; color: black; font-size: 17px; font-family: Poppins; font-weight: 400; word-wrap: break-word">EmailAddress</p>
                {{-- <div style="width: 453px; height: 52px; left: 0px; top: 39px; position: absolute; border-radius: 10px; border-left: 0.50px #909090 solid; border-top: 0.50px #909090 solid; border-right: 0.50px #909090 solid; border-bottom: 0.50px #909090 solid"></div> --}}
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" style="width: 453px; height: 52px; left: 0px; top: 39px; position: absolute; border-radius: 10px; border-left: 0.50px #909090 solid; border-top: 0.50px #909090 solid; border-right: 0.50px #909090 solid; border-bottom: 0.50px #909090 solid" required autocomplete="email" autofocus>
    
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div style="height: 91px; left: 813px; top: 330px; position: absolute">
                <div style="left: 0px; top: 0px; position: absolute; color: black; font-size: 17px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Password</div>
                {{-- <div style="width: 453px; height: 52px; left: 0px; top: 39px; position: absolute; border-radius: 10px; border-left: 0.50px #909090 solid; border-top: 0.50px #909090 solid; border-right: 0.50px #909090 solid; border-bottom: 0.50px #909090 solid"></div> --}}
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" style="width: 453px; height: 52px; left: 0px; top: 39px; position: absolute; border-radius: 10px; border-left: 0.50px #909090 solid; border-top: 0.50px #909090 solid; border-right: 0.50px #909090 solid; border-bottom: 0.50px #909090 solid" required autocomplete="current-password">
    
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div style="width: 453px; height: 26px; left: 813px; top: 437px; position: absolute">
                {{-- <div style="width: 20px; height: 20px; left: 0px; top: 3px; position: absolute; border-radius: 5px; border-left: 0.50px #A19E9E solid; border-top: 0.50px #A19E9E solid; border-right: 0.50px #A19E9E solid; border-bottom: 0.50px #A19E9E solid"></div>
                <div style="left: 38px; top: 0px; position: absolute; color: black; font-size: 17px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Ingat Saya</div> --}}
                <input style="width: 20px; height: 20px; left: 0px; top: 3px; position: absolute; border-radius: 5px; border-left: 0.50px #A19E9E solid; border-top: 0.50px #A19E9E solid; border-right: 0.50px #A19E9E solid; border-bottom: 0.50px #A19E9E solid" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                <label class="form-check-label" for="remember">
                    <p style="left: 38px; top: 0px; position: absolute; color: black; font-size: 17px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Ingat Saya</p>
                </label>
                {{-- <div style="left: 312px; top: 0px; position: absolute; text-align: right; color: #3E4FE5; font-size: 17px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Lupa Password ?</div> --}}
                @if (Route::has('password.request'))
                    <a class="btn btn-link" style="left: 312px; top: 0px; position: absolute; text-align: right; color: #3E4FE5; font-size: 17px; font-family: Poppins; font-weight: 400; word-wrap: break-word" href="{{ route('password.request') }}">
                        Lupa Password?
                    </a>
                @endif
            </div>
            {{-- <div style="width: 323px; height: 52px; left: 878px; top: 495px; position: absolute; background: #F79320; border-radius: 10px"></div>
            <div style="left: 1015px; top: 508px; position: absolute; color: white; font-size: 17px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Login</div> --}}
            <button type="submit" class="btn btn-primary" style="width: 323px; height: 52px; left: 878px; top: 495px; position: absolute; background: #F79320; border-radius: 10px">
                {{ __('Login') }}
            </button>
            <div style="left: 923px; top: 559px; position: absolute; text-align: center"><span style="color: #767575; font-size: 17px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Tidak memiliki akun? </span><span style="color: #3E4FE5; font-size: 17px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Daftar</span></div>
            <div style="left: 813px; top: 155px; position: absolute; color: #767575; font-size: 17px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Login sebagai Nelayan</div>
        </div>
    </form>
</body>
</html>

{{-- 
@extends('layouts.app')

@section('content') --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}







{{-- @endsection --}}

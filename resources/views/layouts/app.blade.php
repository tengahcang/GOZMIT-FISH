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
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ Vite::asset('resources/img/Logo.svg') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    {{-- <ul class="navbar-nav flex-row flex-wrap">
                        <li class="nav-item col-2 col-md-auto">Beranda</li>
                        <li class="nav-item col-2 col-md-auto">Toko</li>
                        <li class="nav-item col-2 col-md-auto">Blog</li>
                        <li class="nav-item col-2 col-md-auto">Komunitas</li>
                        <li class="nav-item col-2 col-md-auto">FAQ</li>

                    </ul> --}}
                    <ul class="navbar-nav flex-row flex-wrap">
                        <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link">Beranda</a></li>
                        <li class="nav-item col-2 col-md-auto"><a href="{{ route('toko.index') }}" class="nav-link">Toko</a></li>
                        <li class="nav-item col-2 col-md-auto"><a href="" class="nav-link">Blog</a></li>
                        <li class="nav-item col-2 col-md-auto"><a href="" class="nav-link">Komunitas</a></li>
                        <li class="nav-item col-2 col-md-auto"><a href="" class="nav-link">FAQ</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="bi-person-circle me-1"></i>
                                    {{ Auth::user()->name." (".$data->role.")" }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer>
            <div class="container py-5 px-4">
                <div style="width: 1440px; height: 626px; left: 0px; top: 3311px; position: absolute; background: #204283"></div>
    <div style="width: 1662px; height: 322px; left: -141px; top: 3647px; position: absolute; background: rgba(255, 255, 255, 0.05)"></div>
    <div style="width: 1452.50px; height: 382.36px; left: -2.50px; top: 3579.64px; position: absolute; background: rgba(255, 255, 255, 0.05)"></div>
    <div style="width: 134.12px; height: 50px; left: 122px; top: 3429px; position: absolute">
        <img src="{{ Vite::asset('resources/img/Frame.svg') }}" alt="">
    </div>
    <div style="width: 270px; left: 122px; top: 3543px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Lorem ipsum dolor sit amet consectetur diam ultricies leo etiam nibh tristique.</div>
    <div style="width: 270px; height: 315px; left: 608px; top: 3462px; position: absolute">
        <div style="width: 270px; left: 0px; top: 81px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Log Book</div>
        <div style="width: 270px; left: 0px; top: 122px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Toko</div>
        <div style="width: 270px; left: 0px; top: 163px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Hasil Penjualan</div>
        <div style="width: 270px; left: 0px; top: 204px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Lokasi</div>
        <div style="width: 270px; left: 0px; top: 245px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Komunitas</div>
        <div style="width: 270px; left: 0px; top: 288px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Pengaturan</div>
        <div style="width: 270px; left: 0px; top: 0px; position: absolute; color: white; font-size: 22px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Links</div>
    </div>
    <div style="width: 270px; left: 973px; top: 3462px; position: absolute; color: white; font-size: 22px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Contact</div>
    <div style="width: 270px; left: 973px; top: 3543px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Lorem ipsum dolor sit amet consectetur diam ultricies leo etiam nibh tristique.</div>
    <div style="width: 270px; left: 122px; top: 3650px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">odio feugiat vitae libero vestibu viverra elementum luctus.</div>
    <div style="width: 716px; left: 362px; top: 3871px; position: absolute; text-align: center"><span style="color: white; font-size: 18px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Copyright 2023 </span><span style="color: white; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">by GozmitTeam All Right Reserved.</span></div>
    <div style="width: 1196px; height: 0px; left: 122px; top: 3834px; position: absolute; border: 0.50px white solid"></div>
            </div>
        </footer>
    </div>
</body>
</html>

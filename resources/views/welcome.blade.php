<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BOOLPRESS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/admin') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">

                <div class="logo">
                    <img src="{{ asset('img/Boolpress-logo.png') }}">
                </div>
                <div class="title m-b-md"> 
                    Welcome to Boolpress
                </div>

                <div class="link-post">
                    <div class="text-center">
                        <a href="{{ route('public.index')}}">
                            <h4>Vai ai Posts</h4>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title')</title>
        
        <!-- Scripts -->
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        
        <!-- Styles -->
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <h1>Retro Game Reviews!</h1>
            <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                <div class="container">
                        <li>
                            <a class="navbar-brand" href="{{ url('/home') }}" >
                                Home
                            </a>
                            <a class="navbar-brand" href="{{ url('/admin/review/conf') }}">
                                Confirm My Reviews
                            </a>
                            <a class="navbar-brand" href="{{ url('/admin/review/create') }}" >
                                Create a Review
                            </a>
                            <a class="navbar-brand" href="{{ url('/admin/review/index') }}">
                                List of Reviews
                            </a>
                            <a class="navbar-brand" href="{{ url('/admin/profile/create') }}">
                                Create a Profile
                            </a>
                        </li>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div>
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                           
                        </ul>
                        
                        <!-- Right Side Of Navbar -->
                        <div>
                            <a class="navbar-brand" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                Logout
                            </a>
        
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>
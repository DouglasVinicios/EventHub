<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EventHub - @yield('title')</title>

        {{-- BOOTSTRAP CDN --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        {{-- FONT AWESOME CDN --}}
        <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.2-web/css/all.min.css') }}">
        {{-- STYLES --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @section('topbar')
            <x-navbar.topbar/>
        @show

        <div class="container-fluid">
            <div class="row flex-nowrap min-vh-100">
                @section('sidebar')
                    <x-navbar.sidebar/>
                @show
                <div class="col">
                    @yield('content')
                </div>
            </div>
        </div>

        @section('footer')
            <x-footer/>
        @show

        {{-- BOOTSTRAP CDN --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        {{-- FONT AWESOME CDN --}}
        <script src="{{ asset('fontawesome-free-6.5.2-web/js/all.min.js') }}"></script>
        {{-- SCRIPTS --}}
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

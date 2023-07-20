<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
    @include('partials.head')
    <title>One Dream </title>
    </head>
    <body>
        @include('partials.header')
        @yield('page')
        @include('partials.footer')
        @include('partials.script')
    
    </body>

</html>



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
    </head>
    <body>
        <!-- <div class="wtf-light"></div> -->

<!-- {*        include('includes.navbar') *} -->
        @yield('navbar')
        @yield('content')

        <!-- include('includes.footer') -->
        @yield('footer')

        <div class="my-5"></div>

        <script src="{{ mix('/js/app.js') }}"></script>

    </body>
</html>

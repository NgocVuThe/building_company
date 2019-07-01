<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/management.css') }}" type="text/css">
</head>
<body @yield('content_attribute') class="page_body" @yield('body_class')>
    <div class="wraper_page">
        <div class="row">
            <div class="menu_left col-md-2">
                @include('management.partials.menu_left')
            </div>
            <div class="menu_right col-md-10">
                @include('management.partials.menu_right')
            </div>
        </div>
    </div>
</body>
</html>
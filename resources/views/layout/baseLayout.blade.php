<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
    <header>
        @include('layout.baseHeader')
    </header>
    @yield('content')
    <footer>
        @include('layout.baseFooter')
    </footer>
</body>
</html>
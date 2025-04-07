<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'E-Com')</title>
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">
    @yield('style')
</head>
<body>
@include('includes.navbar')
@yield('content')
@include('includes.footer')
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
@yield('script')
</body>
</html>

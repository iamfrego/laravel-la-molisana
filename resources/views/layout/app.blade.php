<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Molisana | @yield('page-title', 'Pasta')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Custom.Css -->
    @yield('custom-css')
</head>

<body>
    @include('partials.header')
    <!-- /#site-header -->
    <main id="site-main">
        @yield('content')
    </main>
    <!-- /#site-main -->
    @include('partials.footer')
    <!-- /#site-footer -->
    <!-- Custom.Script -->
    @yield('custom-js')
</body>

</html>
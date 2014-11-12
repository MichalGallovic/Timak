<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>MakeIt3D InfoWeb</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}"/>
@yield('css')
</head>
<body>
    @include('_partials.header')
    @yield('content')
    @include('_partials.scripts')
    @yield('javascript')
</body>
</html>
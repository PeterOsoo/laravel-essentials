<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
    <h1>Mavitu Blog</h1>
    <a href="{{ route('home') }}">Home</a>
    @yield('content')
</body>

</html>
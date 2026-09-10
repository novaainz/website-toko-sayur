<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>

    <h1>Toko Sayur</h1>

    <a href="{{ route('categories.index') }}">Kategori</a>

    @yield('content')

</body>
</html>
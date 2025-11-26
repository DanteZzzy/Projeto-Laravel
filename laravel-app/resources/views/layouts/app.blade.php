<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Categorias')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">
    <h1>@yield('title')</h1>

    <div class="content">
        @yield('content')
    </div>
</div>

</body>
</html>

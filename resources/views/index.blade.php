

<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="/css/index.css"rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    
</head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/produto/listaprodutos') }}">Inicio</a>
            @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Registrar</a>
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
              Sistema Laravel
          </div>
          <div class="links">
            <a href="https://laravel.com/docs">Documentação</a>
            <a href="https://github.com/CardosoRoni/Sistema-OS_Laravel.git">GitHub</a>
        </div>
    </div>
</div>
</body>
</html>


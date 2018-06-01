<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso de laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <section class="header">

            {{-- @include('includes.header') --}}
            {{-- <div style="float:right;">
                @if(Auth::check())
                    Olá {{auth()->user()->name}}
                    <a href="/login/destroy" class="btn btn-danger">Logout</a>
                @else
                    Bem vindo visitante
                    <a href="/login" class="btn btn-danger">Login</a>


                @endif
            </div> --}}

        </section>

        @yield('content')

    </div>

    
</body>
</html>
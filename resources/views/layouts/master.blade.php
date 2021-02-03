<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mueses_David</title>
        <!--Carga Archivos css-->
        <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <body class="antialiased">
        @include('layouts.navbar')
        <div class="container">
            @yield('content')
        </div>

        <!--Carga Archivos javascript-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>


        <footer class="page-footer font-small black darken-3" >
            <div class="card text-white bg-primary mb-3" style="max-width: 90rem;">
                <div class="card-header" align="center">© 2020 Copyright: davidmueses0@gmail.com</div>
                <div class="card-body">
                    <h5 class="card-title" align="center"><strong>LIBRERIA LA JUANAPANA</strong></h5>
                    <p class="card-text" align="center">Los Mejores Libros a tu alcance</p>
                </div>
                <div class="card-header" align="right" style="background: black">Diseñado Por: David Mueses<br>Universidad De Nariño</div>
            </div>
        </footer>
    </body>
</html>

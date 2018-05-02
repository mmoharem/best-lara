<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Our New view</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
        <link rel="stylesheet" href="/css/app.css">
        
    </head>
    <body class="container">
        

            <div class="content">
                <div class="title m-b-md">
                {{-- <h1>{{$title}}</h1> --}}
                </div>
                @yield('content')
 
            </div>
        </div>
    </body>
</html>

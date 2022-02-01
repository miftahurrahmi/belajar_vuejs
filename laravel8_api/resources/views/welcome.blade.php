<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="url" content="{{ url('')}}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

           <!-- CSS only -->
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
            }

        </style>
    </head>
  
    <body>

      <div class="flex-center position-ref full-height">
            @include('layouts.navigation')
        </div>
         
        <div class="flex-center position-ref full-height">
        
            <div class="content">
                <div class="content">
                    <div id="app">
                        @yield('content')
                        
                    </div>
               </div>

           
            </div>
        </div>
        <!-- JavaScript Bundle with Popper -->
        
        <script src="{{ mix('js/app.js')}}"></script>
    </body>
</html>

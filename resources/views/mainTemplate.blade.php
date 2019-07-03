<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Ahmed Aldawoud</title>

        <!-- Fonts -->

        <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        
    <div id='app'>
        <nav-bar></nav-bar>
        <br>
        <br>
        <br>
        <social class='social'></social>
        <about-me ></about-me>
        <my-projects></my-projects>
        <my-cv></my-cv>
        <my-exp></my-exp>

        <div>
            <button href=''>
            
            </button>
        </div>
    </div>

    </body>

    <script src="{{asset('js/app.js')}}">
            
    </script>
    <style>
    .social{
        z-index: 2;
    }
    </style>

</html>

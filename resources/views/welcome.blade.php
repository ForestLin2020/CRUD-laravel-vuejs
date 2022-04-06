<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

        <title>CRUD-Laravel-VueJS</title>

        <!-- For Localhost -->
        <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
        <!-- <script src="{{ asset('js/app.js') }}" type="module" defer></script> -->
        
        <!-- For deployment on heroku -->
        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
        <script src="{{ secure_asset('js/app.js') }}" type="module" defer></script>

    </head>
    <body>
        <div id="app"></div>
    </body>
</html>

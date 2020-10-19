<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pit Stop Game</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>

    </head>
    <body>

        <div id="app">

            <h1 style="display:none;">Pit Stop Game</h1>

            <login-component @startplay="startplay=$event"></login-component>
            <pit-stop-component :startplay=startplay></pit-stop-component>

        </div>

        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>

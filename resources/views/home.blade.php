<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
       

    
    </head>
    <style>
        h1{
            text-transform: uppercase;
            text-align: center;
        }

        #text{
            text-transform: uppercase;
            font-size: 20px;
            color: blue;

            display: flex;
            flex-direction: column;
            align-items: center;

            margin-top: 35px;
        }

        span{
            color: red
        }
    </style>
    <body >
        <h1>Benvenuto in laravel</h1>
        <div id="text">
            <span>digita nella barra in altro:</span> /main se vuoi andare al main della prima pagina di laravel <br> <span>digita nella barra in alto:</span> /footer se vuoi andare al footer della prima pagina di laravel
        </div>
    </body>
</html>

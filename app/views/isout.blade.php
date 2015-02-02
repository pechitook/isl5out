<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="60">
        <title>Is Laravel 5 Out?</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/css/.css">
        <?php // I don't give a fuck :)
            $color = $isOut? 'rgb(53, 163, 80)' : 'rgb(179, 83, 83)';
        ?>
        <style>
            body{margin: 0;border:0;padding: 0;font-family: 'Ubuntu Condensed';text-align: center;}
            h1{
                color: {{$color}};
                font-size:70px;
            }
            p{
                color: #ddd;
            }
        </style>
    </head>
    <body>
        <h1>{{$text}}</h1>
        <p>This is updated every minute.</p>
    </body>
</html>
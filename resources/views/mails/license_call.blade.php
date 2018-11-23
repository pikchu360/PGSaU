<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <p>Hola! Señor(a) usuario {{ $assistanceCall->patient->lastname }} {{ $assistanceCall->patient->firstname }}.</p>
        <p>Datos del usuario:</p>
        <!--ul>
            <li>Nombre: {{ $assistanceCall->user->name }}</li>
            <li>Teléfono: {{ $assistanceCall->user->phone }}</li>
            <li>DNI: {{ $assistanceCall->user->dni }}</li>
        </ul>
        <p>Y esta es la posición reportada:</p>
        <ul>
            <li>Latitud: {{ $assistanceCall->lat }}</li>
            <li>Longitud: {{ $assistanceCall->lng }}</li>
            <li>
                <a href="https://www.google.com/maps/dir/{{ $assistanceCall->lat }},{{ $assistanceCall->lng }}">
                    Ver en Google Maps
                </a>
            </li>
        </ul-->
    </body>
</html>
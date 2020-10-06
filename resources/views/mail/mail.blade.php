<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Un nuevo mensaje</title>
</head>
<body>
    <p>Hola tiene un nuevo mensaje de tu página web.</p>
    <p>Estos son los datos :</p>
    <ul>
        <li>Nombre: {{ $nombre}}</li>
        <li>Teléfono: {{ $telefono }}</li>
        <li>Correo: {{ $correo }}</li>
    </ul>
    <p>Mensaje:</p> <br>
<p>{{$mensaje}}</p>
   
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvendia</title>
</head>
<body>
    <h1>Bienvenida</h1>
    <p>
        Hola! {{ $nombre }} {{ $apellido }} <!--enves de <?php //echo $nombre?>-->
        <br>
        Nombre completo: {{$nombre_completo}}
    </p>
        
</body>
</html>
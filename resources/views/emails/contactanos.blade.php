<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<h1>Formulario de contacto</h1>

<div class="row justify-content-center">
    <div class="col border border-dark shadow rounded p-3">
        <p><b>Asunto: </b> {{ $msg['asunto'] }} </p>
        <p><b>Descripcion: </b> {{ $msg['descripcion'] }} </p>
        <p><b>Correo: </b> {{ $msg['correo'] }} </p>
        <br><br>
        
        <p><b>Enviado por: </b> {{ $msg['nombre'] }} </p>
    </div>
</div>

</body>
</html>
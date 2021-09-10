<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
      h1{
          color: blue; 
      }
    </style>
</head>
<body>
    <h1>
        Recepcion de mensaje 
    </h1>
    <p>
        Mensaje Recibido de 
        <strong>{{$contacto['name']}}</strong> 
        Con correo        
        <strong> {{$contacto['correo']}}</strong> 
        Con el siguiente contenido 
        <strong>{{$contacto['mensaje']}}</strong>
    </p>    
</body>
</html>
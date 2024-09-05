<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de contacto</title>
</head>
<body>
    <h1>Formulario de contacto</h1>

    <form action="guardar-formulario" method="POST">
    @csrf

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" requiered>

    <label for="correo">Correo:</label>
    <input type="email" name="correo" id="correo" requiered>

    <label for="mensaje">Mensaje:</label>
    <textarea name="mensaje" id="mensaje" requiered></textarea>

    <input type="submit" value="Enviar"> 


</body>


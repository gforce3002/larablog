<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <a href="/contacto">Contacto</a>
    <!-- ruta con nombre 
        Es mejor usar la ruta con nombre ya que si se cambia el dato
    de la ruta es mas facil realizar un referenciado y no tener que cambiar todo
    el codigo del sistema 
    ejemplo "/contacto" => "/llamame"
    esta ruta se cambio en el archivo de rutas y seria cambiar en todo el sistema 
    
    Ahora con las rutas con nombre eso ya no pasaria se cambia la uri pero con el
    nombre de la ruta podemos acceder sin cambiar ni una linea de codigo
-->
    <a href="{{route('contacto')}}">Contacto (ruta con nombre)</a>
    <a href="{{route('prueba')}}">Test</a>

    </body>
</html>
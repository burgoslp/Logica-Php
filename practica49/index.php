<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio numero 49 de php Lógica de programación</title>
</head>
<body>
    <pre>
        Crear un programa para cargar imagenes al servidor 
        El estás imagenes deben guardarse en una carpeta en 
        especifico llamada "images" verificar que este creada de lo contrario
        crearla con el comando mkdir() de php;
    </pre>
    <form action="result.php" method="post" enctype="multipart/form-data">
        <input type="file" name="imagen"><br><br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
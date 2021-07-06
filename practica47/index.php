<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio de php numero 47 de php Lógica programación</title>
</head>
<body>
    <pre>
        Una actividad comun en un sitio es poder almacenar un archivo en el servidor, mas comunmente
        conocido como upload. Se necesita en muchas ocasiones este algoritmo, por ejemplo para subir fotos,
        documentos, programas, etc. Se requieren dos paginas, una de ellas, un formulario donde
        seleccionamos el archivo a enviar y otra pagina donde se graba el archivo en el servidor. 
    </pre>

    <form action="result.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="cargar archivo">
    </form>
</body>
</html>
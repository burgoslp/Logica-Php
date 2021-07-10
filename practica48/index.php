<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio de php numero 48 Lógica de programación</title>
</head>
<body>
    <pre>
        Confeccionar un programa que permita hacer multiples upload con una pagina (por ejemplo, que
        permita seleccionar hasta 3 archivos) y los almacene en una carpta llamada doc para esto 
        la carpeta tiene que estar creada
    </pre>

    <form action="result.php" method="post" enctype="multipart/form-data">
        Foto1
        <input type="file" name="archivo[]" ><br><br>
        foto2
        <input type="file" name="archivo[]" ><br><br>
        foto3
        <input type="file" name="archivo[]" ><br><br>
        <input type="submit" value="Guardar fotos">
    </form>
</body>
</html>
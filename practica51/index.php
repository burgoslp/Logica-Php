<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio numero 51 de php Lógica de programación</title>
</head>
<body>
    <pre>
        Crear un programa para almacenar archivos jpg,png,jpeg, cree y verifique
        que la carpeta images exista, ademas que muestre el tamaño total de los 
        archivos de la carpeta images y si alcanza el limite de 5mb no permita subir más 
        archivos 
    </pre>
    <p>
        capacidad en disco: 
        <?php 
            $dir=dir("images");
            $tamañoDir=10.00;
            $x=0;
            while(false != ($archivos=$dir->read())){

                $x+=filesize("images/".$archivos); 
            }
            echo $tamañoDir-number_format( $x/1048576,2) ." MB";
        ?>
    </p>
    <form action="result.php" method="post" enctype="multipart/form-data">
        <label for="">
            Imagenes:<br>
            <input type="file" name="imagen" >
        </label>

        <input type="submit" value="Guardar archivo">
    </form>
</body>
</html>
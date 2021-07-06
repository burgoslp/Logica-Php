<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio de php numero 43 Lógica de programación</title>
</head>
<body>
    <?php 
        echo "listado de la tabla ".$_REQUEST['tabla']."<br><br>";
        

        for($x=0;$x<=10;$x++){

            $producto=$x*$_REQUEST['tabla'];
            echo $x." * ".$_REQUEST['tabla']. "=  ".$producto."<br>";

        }
    ?>
</body>
</html>
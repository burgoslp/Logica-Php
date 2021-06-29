<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio numero 14 de php Lógica de programación</title>
</head>
<body>
    <p align="center">
        Saca el 20% de 120,4546 imprime el redondeo de solo dos decimales con round() y sprintf()
    </p>


    <?php

        //Declaramos las variable
        $producto=120.4546;
        $porcentaje= 0.2;

        //calculamos
        $resultado1= $producto*$porcentaje;


        //mostramos en pantalla
        echo round($resultado1,2);
        
    
        $resultado2= sprintf("%0.2f",$resultado1);
        echo "<br>".$resultado2;

    ?>
</body>
</html>
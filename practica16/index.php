<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio numero 16 de php lógica de programación</title>
</head>
<body>
    <pre align="center">
        Captura en una variable el día actual con la funcion date() y si es menor a los primeros 15 días imprime "sitio activo" 
        de lo contrario escribe "sitio en mantenimiento"
    </pre>

    <?php

        $Dia=date('d');


        if($Dia < 15){

            echo "sitio activo";

        }else{


            echo "sitio en mantenimiento";
        }
    ?>
</body>
</html>
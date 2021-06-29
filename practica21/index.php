<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio numero 21 de php Lógica de programación</title>
</head>
<body>
    <pre>
        Declara una variable tipo string con el valor "arriba" y utilizando el condicional switch 
        declaramos el primer caso como "arriba" y la salida es ""La variable contiene el valor de arriba"
        El segundo caso "abajo" y la salida es "La variable contiene el valor de abajo"
        por default colocamos como salida ""La variable contiene otro valor distinto arriba y abajo"
    </pre>


    <?php

        $string="arriba";

        switch($string){

            case "arriba":

                echo "la variable contiene el valor de arriba";
            break;

            case "abajo":

                echo "la variable contiene el valor de abajo";

            break;

            default:

                echo "la variable contiene otro tipo de valor diferente a arriba y abajo";
        }
    ?>
</body>
</html>
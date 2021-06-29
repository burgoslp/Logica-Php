<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio numero 19 de php Lógica de programación</title>
</head>
<body>
    <pre>
        Generar un valor aleatorio entre 1 y 5. Luego imprimir en castellano el numero (Ej. Si se genera el 3
        lugo mostrar en la pagina el string “tres”). Para ver si una variable es igual a cierto valor debemos
        plantear una condicion similar a:
        If ($valor==3)
        {
        //algorimo
        }
    </pre>


    <?php 

        $random=rand(1,5);

        if($random == 1){

            echo "Uno";
        }else if($random == 2){


            echo "Dos";
        }else if($random == 3){


            echo "Tres";
        }else if($random == 4){


            echo "Cuatro";
        }else if($random == 5){


            echo "Cinco";
        }

    ?>
</body>
</html>
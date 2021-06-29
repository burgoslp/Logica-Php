<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio numero 17 de php lógica de programación</title>
</head>
<body>
    
    <pre align="center">
        Sabiendo que la funcion RAND nos retorna un valor aleatorio entre un rango de dos enteros:
        $num = rand(1,100);
        En la variable $num se almacena un valor entero que la computadora genera en forma aleatoria entre
        1 y 100. Hacer un programa que lo muestre por pantalla al valor generado. Mostrar ademas si es
        menor o igual a 50 o si es mayor. Para imprimir el contenido de una variable tambien utilizamos el
        comando ECHO 
    </pre>

    <?php

    $num=rand(1,100);

    if($num <= 50){

        echo $num;

    }else{

        echo "es mayor el numero aleatorio a 50";

    }

    ?>
</body>
</html>
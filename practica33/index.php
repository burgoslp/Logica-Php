<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio numero 33 de php lógica de programación</title>
</head>
<body>
    <pre>
        En este ejercicio nos conectaremos a una base de datos con la función mysqli_connect(),
        Para esto deben crear una BD llamada php con anterioridad y la tabla a la que consultaremos
        mediante la función msqli_query() la tabla se llama personas y mostraremos en pantalla los nombres
        que contiene dicha tabla
        
    </pre>

    <?php

            $conexion=mysqli_connect('localhost','root','','php');//conectamos con la base de datos
            $sql="SELECT * FROM personas";//creamos la consulta con el lenguaje sql
            $resultados=mysqli_query($conexion,$sql);//ejecutamos la consulta

            while($registros=mysqli_fetch_assoc($resultados)){//almacenamos los posibles registros en la variable $registros

                echo $registros['nombre']."<br>";//mostramos todos los resultados del array asociativo, los indices del array corresponden a los nombres en la tabla personas de la base datos php
            }

            mysqli_close($conexion);//cerramos la conexion con la base datos
    ?>
</body>
</html>
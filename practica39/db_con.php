<?php
    $host="localhost";
    $user="root";
    $db="php";
    $password="";

    $conexion=mysqli_connect($host,$user,$password,$db) or die("fallo en la conexion con la base de datos: <br>".mysli_error($conexion));

?>
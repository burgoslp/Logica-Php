<?php 

    $host="localhost";
    $password="";
    $user="root";
    $db="php";

    $conexion=mysqli_connect($host,$user,$password,$db) or die("Error al establecer la conexion con la base de datos");
?>
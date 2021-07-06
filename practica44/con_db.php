<?php

    $host="localhost";
    $user="root";
    $password="";
    $db="php";

    $con=mysqli_connect($host,$user,$password,$db) or die("problemas con la conexion de la bd-->".mysqli_error($con));
?>
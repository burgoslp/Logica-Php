<?php

    $host="localhost";
    $user="root";
    $password="";
    $bd="php";

    $con=mysqli_connect($host,$user,$password,$bd) or die("problemas con la conexion a la bd--->".mysqli_error($con));
?>
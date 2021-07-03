<?php 
    $host="localhost";
    $user="root";
    $password="";
    $db="php";

    $con=mysqli_connect($host,$user,$password,$db) or die("error de conexio->".mysli_error($con));

?>
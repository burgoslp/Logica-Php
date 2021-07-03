<?php 
    include("db_con.php");
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $cedula=$_POST['cedula'];
    $fech_nacimiento=$_POST['fech_nac'];

    $sql="UPDATE personas SET nombre='$nombre',apellido='$apellido',cedula='$cedula',fech_nac='$fech_nacimiento'  where id=$id";
    $query=mysqli_query($conexion,$sql) or die("fallo la consulta por la siguiente razon --->".mysqli_error($conexion));

    mysqli_close($conexion);
    header('location:index.php');
?>  
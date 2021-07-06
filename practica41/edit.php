<?php include("con_db.php");

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $cedula=$_POST['cedula'];
    $cursos_id=$_POST['cursos'];
    $alumnos_id=$_POST['alumnos_id'];

    
    $sql="UPDATE alumnos SET nombre='$nombre', apellido='$apellido', cedula='$cedula', cursos_id='$cursos_id' WHERE id='$alumnos_id'";
    $query=mysqli_query($con,$sql) or die('problema con la consulta');

    if($query){

        header('location:index.php');
    }else{
        echo "ha ocurrido algun problema";
    }   
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio numero 44 de php Lógica de programación</title>
</head>
<body>
    <?php include("con_db.php");

       $sql="SELECT * FROM alumnos WHERE cursos_id=".$_REQUEST['cursos'];
       $query=mysqli_query($con,$sql) or die("problemas con la consulta-->".mysqli_error($con));
    ?>
    <table border="1">
        <tr> 
            <td colspan="3" align="center">Tabla de alumnos de <?php echo $_REQUEST['nombre'] ?></td>
        </tr>
        <tr>
            <td>NOMBRE</td>
            <td>APELLIDO</td>
            <td>CEDULA</td>
        </tr>
        <?php while($reg=mysqli_fetch_assoc($query)): ?>
        <tr>
                <td><?php echo $reg['nombre']?></td>
                <td><?php echo $reg['apellido']?></td>
                <td><?php echo $reg['cedula']?></td>
                
        </tr>    
        <?php endwhile;if($query->num_rows ==0):?>
        <tr>
            <td colspan="3">
                NO EXISTEN ALUMNOS REGISTRADOS
            </td>
        </tr>
        <?php endif?>
    </table>
</body>
</html>
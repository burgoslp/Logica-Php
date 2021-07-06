<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio numero 41 de php Lógica de programación</title>
</head>
<body>
    <pre>
        update a 2 tablas

        Supongamos que un alumno desea cambiarse de curso, es decir, se inscribio en uno y quiere borrarse de
        ese e inscribirse en otro diferente. Debemos mostrar en un “select” el curso actual en el que esta
        inscrito y los otros cursos disponibles en la tabla CURSOS. Para resolver este problema tenemos que
        plantear tres paginas, una donde ingresemos el mail del alumno, la segunda donde se pueda cambiar el
        curso y por ultima una que permita modificar la tabla ALUMNOS con el nuevo curso seleccionado.
    </pre>
    <?php include('con_db.php');

        $id=$_GET['modificar'];
        $sql="SELECT alumnos.id,alumnos.nombre,alumnos.apellido,alumnos.cedula,cursos.descripcion FROM alumnos INNER JOIN cursos ON alumnos.cursos_id=cursos.id WHERE alumnos.id='$id'";
        $query=mysqli_query($con,$sql);
        
    ?>
    <table border="1">
        <tr>
            <td>NOMBRE</td>
            <td>APELLIDO</td>
            <td>CEDULA</td>
            <td>CURSO</td>
            <td>ACCIÓN</td>
        </tr>
        <?php $registros=mysqli_fetch_assoc($query)?>
        <tr>
            <form action="edit.php" method="post">
                <td><input type="text" name="nombre" value="<?php echo $registros['nombre']?>"></td>
                <td><input type="text" name="apellido" value="<?php echo $registros['apellido']?>"></td>
                <td><input type="text" name="cedula" value="<?php echo $registros['cedula']?>"></td>
                <td>
                    <select name="cursos">
                    <?php 
                        $sql1="SELECT * FROM cursos ";
                        $query=mysqli_query($con,$sql1);
                        while($cursos=mysqli_fetch_assoc($query)){
                            if($registros['descripcion']==$cursos['descripcion']){

                                echo "<option value=".$cursos['id']." selected>".$cursos['descripcion']."</option>";
                            }else{

                                echo "<option value=".$cursos['id']."  >".$cursos['descripcion']."</option>";
                            }
                        }
                    ?>
                    </select>
                </td>
                <td><input type="text" name="modificar" value="<?php echo $registros['id']?>" hidden><input type="text" name="alumnos_id" value="<?php echo $registros['id']?>" hidden><input type="submit" value="actualizar"></td>
            </form>
        </tr>
    </table>
</body>
</html>
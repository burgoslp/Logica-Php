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
    
        $sql="SELECT alumnos.id,alumnos.nombre, alumnos.apellido, alumnos.cedula, cursos.descripcion FROM alumnos INNER JOIN cursos  ON  alumnos.cursos_id=cursos.id";
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
        <?php while($registros=mysqli_fetch_assoc($query)):?>
        <tr>
            <td><?php echo $registros['nombre']?></td>
            <td><?php echo $registros['apellido']?></td>
            <td><?php echo $registros['cedula']?></td>
            <td><?php echo $registros['descripcion']?></td>
            <td>
                <form action="show.php" method="get">
                    <input type="text" name="modificar" value="<?php echo $registros['id']?>" hidden><input type="submit" value="modificar">
                </form>
            </td>
        </tr>
        <?php endwhile;?>
    </table>
</body>
</html>
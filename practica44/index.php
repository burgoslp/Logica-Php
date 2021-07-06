<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        Confeccionar un programa que muestre una pagina con todos los nombres de la tabla CURSOS. Los
        nombres deben aparecer como hipervinculos a otra pagina que debera mostrar todos los alumnos
        inscritos a dicho curso. Como parametro en el hipervinculo, pasar el codigo del curso.
    </pre>

    <?php include("con_db.php");

        $sql="SELECT cursos.id,cursos.descripcion FROM cursos";
        $query=mysqli_query($con,$sql) or die("problemas con la consulta-->".mysqli_error($con));
    ?>
    <table border="1">
        <tr>
            <td>Cursos disponibles</td>
        </tr>
        <?php while($reg=mysqli_fetch_assoc($query)):?>
        <tr>
            <td><a href="cursos.php?cursos=<?php echo $reg['id']?>&nombre=<?php echo $reg['descripcion']?>"><?php echo $reg['descripcion']?></a></td>
        </tr>   
        <?php endwhile;?>
   </table>
</body>
</html>
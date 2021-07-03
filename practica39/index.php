<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio numero 39 de php Lógica de programación</title>
</head>
<body>
    <pre>
        Ahora empezaremos a ver las relaciones entre las tablas y como 
        primer ejercicio haremos un select mostrando campos en ambas tablas
        utilizando la sentencia  inner join de sql
    </pre>
    <?php include("db_con.php");
        $sql="SELECT personas.nombre, personas.apellido, personas.cedula, personas.fech_nac, datos.correo FROM personas INNER JOIN datos ON personas.id=datos.personas_id";
        $query=mysqli_query($conexion,$sql) or die("problemas con la consulta: <br>".mysqli_error($conexion));
    ?>

    <table border="1">
        <tr>
            <td>NOMBRE</td>
            <td>APELLIDO</td>
            <td>CEDULA</td>
            <td>FECHA DE NACIMIENTO</td>
            <td>EMAIL</td>
        </tr>
        <?php while($registros=mysqli_fetch_assoc($query)):?>

            <td><?php echo $registros['nombre']?></td>
            <td><?php echo $registros['apellido']?></td>
            <td><?php echo $registros['cedula']?></td>
            <td><?php echo $registros['fech_nac']?></td>
            <td><?php echo $registros['correo']?></td>
        <?php endwhile;?>
    </table>
</body>
</html>
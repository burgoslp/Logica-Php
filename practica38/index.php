<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio numero 38 de php de Lógica de programación</title>
    <style>
        .p1{
            padding:5px;
        }
        .p2{
            padding:10px;
        }
    </style>
</head>
<body>
    <pre>
        De las actividades con tablas, esta es la mas larga. Vamos a resolverlo implementando tres
        paginas. La primera un formulario de consulta del mail de un alumno, la segunda otro formulario que
        nos permita cargar su mail modificado y la ultima registrara el cambio en la tabla.
    </pre>
    <?php include("db_con.php");
        $sql="SELECT * FROM personas";
        $query=mysqli_query($conexion,$sql) or die("Ocurrio algun problema con la consulta");
    ?>
    <table BORDER="1">
        <tr>
            <td class="p1">NOMBRE</td>
            <td class="p1">APELLIDO</td>
            <td class="p1">CEDULA</td>
            <td class="p1">FECHA DE NACIMIENTO</td>
            <td class="p1">ACCIÓN</td>
        </tr>
        <?php while($registros=mysqli_fetch_assoc($query)):?>
        <tr>
            <td class="p1"><?php echo $registros['nombre']?></td>
            <td class="p1"><?php echo $registros['apellido']?></td>
            <td class="p1"><?php echo $registros['cedula']?></td>
            <td class="p1"><?php echo $registros['fech_nac']?></td>
            <td class="p1">
                <form action="show.php" method="get">
                    <input type="text" name="borrar" value="<?php echo $registros['id']?>" hidden><input type="submit" value="Modificar">
                </form>
            </td>
        </tr>
        <?php endwhile;?>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio numero 34 de php Lógica de programación</title>
</head>
<body>
    <pre>
        Esta es una mejor version del ejercicio anterior, utilizando tablas
        mejoraremos la presentacion de los registros
    </pre>

    <?php
            $conexion=mysqli_connect('localhost','root','','php');
            $sql="SELECT * FROM personas";
            $query=mysqli_query($conexion,$sql);

            
    ?>

            <table border="1">
                    <tr>
                        <td>NOMBRE</td>
                        <td>APELLIDO</td>
                        <td>EDAD</td>
                    </tr>
                    <?php while($registros=mysqli_fetch_assoc($query)):?>
                    <tr>
                        <td><?php echo $registros['nombre']?></td>
                        <td><?php echo $registros['apellido']?></td>
                        <td><?php echo $registros['edad']?></td>
                    </tr>
                    <?php endwhile;?>
            </table>
</body>
</html>
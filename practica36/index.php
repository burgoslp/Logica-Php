<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio numero 36 de php lógica de programación</title>
    <style>
        .p-2{

            padding:10px;
        }

        .p-1{

            padding:5px;
        }
    </style>
</head>
<body>
    <pre>
        consulta a la base de datos "php" mediante un formulario
        esta vez usaremos or die para capturar las exepciones en caso 
        de alguna mala conexion o consulta, todo tiene que hacerse en 
        un solo documento
    </pre>
    <?php include('con_db.php');//Para incluir la conexion de la base de datos

        if(isset($_POST['busqueda'])){
            $cedula="v-";
            $cedula.=$_POST['busqueda'];
            $sql="SELECT * FROM personas WHERE cedula='$cedula'";
            $query=mysqli_query($conexion,$sql) or die('Problemas con la consulta');
            mysqli_close($conexion);

        }else{
            
            $sql="SELECT * FROM personas";
            $query=mysqli_query($conexion,$sql) or die('Problemas con la consulta');
            mysqli_close($conexion);
        }
    ?>

   <table border="1">
        <tr>
            <td colspan="4" align="right" style="padding:10px">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <input type="text" name="busqueda" placeholder="Ingrese cedula"><input type="submit" value="Buscar" >
                </form>
            </td>
        </tr>
        <tr>
            <td class="p-2">Nombre</td>
            <td class="p-2">Apellido</td>
            <td class="p-2">cedula</td>
            <td class="p-2">fecha de nacimiento</td>
        </tr>
        <?php while($registros=mysqli_fetch_assoc($query)):?>
            <tr>
                <td class="p-1"><?php echo $registros['nombre']?></td>
                <td class="p-1"><?php echo $registros['apellido']?></td>
                <td class="p-1"><?php echo $registros['cedula']?></td>
                <td class="p-1"><?php echo $registros['fech_nac']?></td>
            </tr>
        <?php endwhile;?>
   </table>

</body>
</html>
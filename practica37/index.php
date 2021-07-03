<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio numero 37 de php Lógica de programación</title>
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
        En este ejercicio usaremos el uso de la sentencia sql
        Delete para borrar registros de nuestra tabla personas 
        recordando que la base de datos se llama "php"
    </pre>
    <?php include("con_db.php");
        if(isset($_POST['busqueda'])){
            $cedula="v-";
            $cedula.=$_POST['busqueda'];
            $sql="SELECT * FROM personas WHERE cedula='$cedula'";
            $query=mysqli_query($conexion,$sql);
        }else{

            $sql="SELECT * FROM personas";
            $query=mysqli_query($conexion,$sql); 
        } 
    ?>
    <table border="1">
        <tr>
            <td class="p2" colspan="5" align="right" >
               <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <input type="text" name="busqueda" placeholder="Ingrese cedula"><input type="submit" >
               </form>
            </td>
        </tr>
        <tr>
            <td class="p1">NOMBRE</td>
            <td class="p1">APELLIDO</td>
            <td class="p1">CEDULA</td>
            <td class="p1">FECHA DE NACIMIENTO</td>
            <td class="p1">ACCIÓN</td>
        </tr>
        <?php while($registros=mysqli_fetch_assoc($query)): ?>
        <tr>
            <td class="p1"><?php echo $registros['nombre']; ?></td>
            <td class="p1"><?php echo $registros['apellido']; ?></td>
            <td class="p1"><?php echo $registros['cedula']; ?></td>
            <td class="p1"><?php echo $registros['fech_nac']; ?></td>
            <td class="p1">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                    <input type="text" name="borrar" value="<?php echo $registros['id'] ?>" hidden>
                    <input type="submit" value="borrar">
                </form>
            </td>
        </tr>
        <?php endwhile;?>
    </table>
    <?php include('delete.php');  ?>
</body>
</html>
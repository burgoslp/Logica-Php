<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio numero 35 de php lógica de programación</title>
</head>
<body>
    <pre>
        Aquí tenemos un programa para introducir datos (Altas) a la base de datos mediante un
        formulario y las instrucciones basica de conexión MySQL y otras funciones de php ya vistas. Ademas se
        incluye otro archivo (con INCLUDE) que es quien realiza la conexión a la BD. 
    </pre>
    <?php include('con_db.php');
    

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <input type="text" name="apellido" placeholder="Ingrese nombre"><br><br>
        <input type="text" name="nombre" placeholder="Ingrese apellido"><br><br>
        <input type="text" name="edad" placeholder="Ingrese edad"><br><br>
        <input type="submit" value="registrar">
    </form>


    <?php 
        if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['edad'])){
            if($_POST['nombre'] != "" && $_POST['apellido'] != "" && $_POST['edad'] != ""){

                $nombre=$_POST['nombre'];
                $apellido=$_POST['apellido'];
                $edad=$_POST['edad'];

                $sql="INSERT INTO personas(nombre,apellido,edad) VALUES('$nombre','$apellido','$edad')";
                $query=mysqli_query($conexion,$sql);
                if($query){
                    
                    echo "<br>se ha registrado correctamente";
                }else{

                    echo "<br>ha ocurrido algun error con el registro";
                }
            }else{

                echo "<br> Rellene todos los campos";
            }
        }
    ?>
</body>
</html>
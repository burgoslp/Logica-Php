<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio numero 27 de php Lógica de programación</title>
    <?php

        if(isset($_POST['clave'])){

            $clave=$_POST['clave'];
            if($clave == "leopoldo1"){

                header('location:direccion1.php');

            }else if($clave == "leopoldo2"){

                header('location:direccion2.php');

            }else{

                header('location:sorry.html');
            }
        }
    ?>
</head>
<body>
    <pre>
        para poner password a archivos html. El primer archivo lleva codigo php
        con el password puesto en el encabezado antes de iniciar el codigo html, para redirigir a los archivos
        correctos o incorrectos.Luego viene el formulario que pide el password, de acuerdo al password dado,
        se dirige a direccion1.php o direccion2.php según sea el caso. Si no se sabe el password correcto se va a un
        tercer archivo llamado sorry. 
    </pre>


    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <input type="password" name="clave" placeholder="Ingrese contraseña">
        <input type="submit">
    </form>
</body>
</html>
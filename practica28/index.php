<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio numero 28 de php Lógica de programación</title>
</head>
<body>
    <pre>

        Realiza un formulario que envie un correo atravez de la funcion mail()
        en un solo archivo utilizando la variable global $_SERVER['PHP_SELF']


        para este caso debemos configurar el archivo php/php.ini y el archivo sendmail/sendmail.ini

    </pre>
    <h1>Enviame un correo</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

        <input name="correo" type="text" placeholder="Ingresa tu correo ">
        <p>Tu mensaje aquí:</p>
        <textarea name="mensaje" id="mensaje" cols="30" rows="10">


        </textarea><br>
        <input type="submit">
    </form>


    <?php
        if(isset($_POST['correo']) && isset($_POST['mensaje'])){

            $correo=$_POST['correo'];
            $mensaje=$_POST['mensaje'];
            $correoDestino="pinedo.burgoslp3@gmail.com";
            if(mail($correoDestino, "tienes un nuevo correo", $mensaje, "From: $correo")){

                echo "Tu mensaje fue enviado";
            }else{

                echo "Tu mensaje no se pudo enviar";
            }
        }
    ?>
</body>
</html>
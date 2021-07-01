<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio numero 30 de php Lógica de programación</title>
</head>
<body>
    <pre>

        Libro de visitas basado en php. Es necesario crear un archivo de texto llamado guestbook.txt
        para almacenar los comentarios de los visitantes.
        El codigo es bastante largo y contiene varios comentarios para facilitar la lectura del mismo. 
    </pre>

    <h1>
        Escribe un comentario para  nosotros
    </h1>
    <form action="<?php  echo $_SERVER['PHP_SELF'];?>" method="POST">
        <input type="text" name="email" placeholder="Ingresa tu correo"><br><br>
        <input type="text" name="name" placeholder="Inregresa tu nombre"><br><br>
        <textarea name="comment" id="" cols="30" rows="10"></textarea><br><br>
        <input type="submit" value="Guardar comentario">
    </form>


    <?php
        if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['comment']) )
        {
            $email=$_POST['email'];
            $name=$_POST['name'];
            $comment=$_POST['comment'];
            if($email != "" && $name != "" && $comment != "")
            {
                $archivo="libro.txt";
                $conexion=fopen($archivo,'r+');//conexion hacia el archivo
                $viejo=fread($conexion,filesize($archivo));//leemos si hay un comentario dentro del archivo para colocar el nuevo por encima de este
                $email = "<a href=\mailto:$email\">$email</a>";//El formato del correo
                $fecha = date ("y-n-j");//la fecha actual del comentario
                $comment = htmlspecialchars($comment);//quitamos caracteres especiales
               
                $entry="<p><b>$name</b> ($email) wrote on <i>$fecha</i>;<br>$comment</p>\n"; //creamos la entrada completa con los datos del formulario
                rewind($conexion);//colocalmos el pentero al inicio del texto  
                fputs($conexion, "$entry \n $viejo");//Esta funcion es un alias de fwrite 
                fclose($conexion); //cerramso la conexion con el fichero

                echo "<br> Su comentario fue guardado con exito, gracias por escribirnos...";

            }else{
                echo "<br>los campos estan vacios...";
            }
        }else{

            echo "<br>esperamos por su comentario...";
        }
    ?>
</body>
</html>
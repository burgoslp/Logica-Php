<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio numero 31 de php Lógica de programación</title>
</head>
<body>
    <pre>
        Hacer un script para una ENCUESTA que según la decision de los usuarios seleccionen de
        un tema. Se necesita un archivo de texto llamado RESULTS.TXT para almacenar lo que responden los
        usuarios.
    </pre>
    <h1>¿Que opinas de mís practicas?</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <select name="voto" id="voto">
            <option value="0">Muy buenas practicas</option>
            <option value="1">buenas practicas</option>
            <option value="2">Pueden ser mejores</option>
        </select>

        <?php if(!isset($_POST['voto'])):?>
            <input type="submit" value="Enviar puntuación">
        <?php else:
            

            $archivo="result.txt";//almacenamos el nombre del archivo
            $conexion=fopen($archivo,"r+");//Aquí creamos la conexion con el fichero de texto y lo colocamos en modo r+ para lectura y edición
            $votos=fread($conexion,filesize($archivo));//leemos si tenemos algun voto en el archivo
            $array_de_votos = explode("," , $votos);//los resultados los separamos por , y los metemos en un array
            $voto=$_POST['voto'];//el voto actual capturado por el formulario 0, 1 o 2
            $array_de_votos[$voto]++;
            $votos= implode(",", $array_de_votos);
            rewind($conexion);
            fputs($conexion, $votos);
            fclose($conexion);
            echo "Gracias por tu voto";
        endif;
        ?>

    </form>


    <p>
[ <a href="results.php" target="_blank">ver resultados de la encuesta</a>]
</p>
</body>
</html>
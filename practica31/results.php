<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio numero 31 de php lógica de programación</title>
</head>
<body>
    <pre>
        Hacer un script para una ENCUESTA que según la decision de los usuarios seleccionen de
        un tema. Se necesita un archivo de texto llamado RESULTS.TXT para almacenar lo que responden los
        usuarios.
    </pre>
    <?php
        
        $archivo="result.txt";
        $conexion=fopen($archivo,'r+');
        $votos=explode(",",fread($conexion,filesize($archivo)));
    ?>

    <table border="1">
        <tr>
            <td>opcion1</td>
            <td>opcion2</td>
            <td>opcion3</td>
        </tr>
        <tr>
            <?php foreach($votos as $voto):?>
            <td><?php echo $voto?></td>
            <?php endforeach;?>
        </tr>
    </table>

</body>
</html>
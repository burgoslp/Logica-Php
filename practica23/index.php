<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio numero 23 de php lógica de programación</title>
</head>
<body>
    <pre>

        Está es una variación del <a href="../practica22/">ejercicio 22</a>  
        La diferencia es que le daremos color a cara renglon par e impar
    </pre>


    <?php 

        function verifica($integer,$renglon){

            if($renglon % 2){

                $fondo="background-color:black;";
            }else{

                $fondo="background-color:white;";
            }


            if($integer < 0.5){

                $color="color:red;";

                echo "<td style=".$color.$fondo.">$integer</td>";

            }else{

                $color="color:blue;";
                echo "<td style=".$color.$fondo.">$integer</td>";

            }

        }
    ?>

    <table border="1">
        <tr>
            <td>
                seno
            </td>
            <td>
                coseno
            </td>
        </tr>

        <?php
            $renglon=0;
            for($x=0;$x < 2; $x+=0.01):
            $renglon++
        ?>

        <tr>
            <?php verifica(sin($x),$renglon)?>
            <?php verifica(cos($x),$renglon)?>
        </tr>

        <?php
            endfor;
        ?>
    </table>
</body>
</html>
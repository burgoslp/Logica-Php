<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <pre>

        crear una tabla de valores de seno y coseno de 0 a 2
        en incrementos de 0.01. Los valores negativos que resulten los queremos
        mostrar en rojo, y los valores positivos en azul

        Para esto usaremos las funciones sin() y cos()


        En primer lugar vamos a crear una funcion con las condicionales 
        Aqui estamos usando la sentencion de FUNCTION al que le pasamos un valor
        dependiendo de este valor, ejecutamos una condicion IF..ELSE...
        y asignamos un color al tipo de letra para generar la tabla 
    </pre>


    <?php

        function muestra($integer){

            if($integer < 0.5){

                $estilo="color:red;";
               
                echo "<td style=".$estilo.">$integer</td>\n";
            }else{

                $estilo="color:blue;";
               
                echo "<td style=".$estilo.">$integer</td>\n"; 
            }

        }

    ?>


    <table border="1">
        <tr>
            <td>coseno</td>
            <td>seno</td>
        </tr>
        <?php for($x=0;$x < 2; $x+=0.01): ?>
        <tr>
            <?php muestra(cos($x))?>
            <?php muestra(sin($x))?>
        </tr>
        <?php endfor; ?>
    </table>
</body>
</html>
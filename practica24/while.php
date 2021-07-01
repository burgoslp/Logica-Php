<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio numero 24 de php Lógica de programación</title>
</head>
<body>
    <pre>
        Esta practica utilizaremos los formularios para utilizar la entrada del teclado,
        crea un formulario con un input que envie un valor numerico para recirbirlo en 
        otra pagina con un bucle while el limite de este bucle sera el valor numerico enviado
        en el formulario
    </pre>


    <?php 

        if(isset($_POST["integer"])){

            $num=$_POST["integer"];
            $x=0;
            while($x <= $num){

                echo $x."<br>";

                $x++;
            }

        }else{

            echo "no ha ingresado el numero para el bucle <a href='index.php'>regresa al formulario</a>";
        }
    ?>
</body>
</html>
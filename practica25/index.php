<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejericcio numero 25 de php Lógica de programación</title>
</head>
<body>
    <pre>
        Variacion sobre el script anterior, pero usando un solo archivo para poner juntos el formulario y
        el codigo php
    </pre>

    <form action="index.php" method="POST">
    
        <input type="text" name="integer">
        <input type="submit">
    </form>

    <?php
        if(isset($_POST['integer'])){

            $num=$_POST["integer"];
            $x=0;
            while($x <= $num){

                echo $x."<br>";

                $x++;
            }
        }else{

            echo "Aqui va la respuesta del bucle";
        }
    ?>
</body>
</html>
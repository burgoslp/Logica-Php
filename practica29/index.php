<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio numero 29 de php Lógica de programación</title>
</head>
<body>
    <pre>

        Creando un contador de visitas
    </pre>

    <?php 

        $fp = fopen("counter.txt", "r+");
        $counter = fgets($fp, 7);
        echo $counter;
        $counter++;
        rewind($fp);
        
        if($counter==false){
            fputs($fp, 0);
        }else{
            fputs($fp, $counter);
        }
       
        fclose($fp); 


    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicios numero 40 de php Lógica de programación</title>
</head>
<body>
    <pre>
        Cuando necesitamos saber la cantidad de registros que cumplen una condicion podemos utilizar
        la funcion COUNT(), por ejemplo, si deseamos conocer la cantidad de alumnos que hay en la tabla
        personas. 
    </pre>
    <?php include('db_con.php');
        $sql="SELECT count(*) FROM personas";
        $query=mysqli_query($con,$sql);
        $reg=mysqli_fetch_array($query);
        echo "la cantidad de registros son ---> ".$reg[0];
    ?>  
</body>
</html>
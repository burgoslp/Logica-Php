<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio de php 42 de lógica de programación</title>
</head>
<body>
    <pre>
        Entre las muchas posibilidades que nos brinda SQL, una es agrupar registros y obtener
        informacion resumida de tablas. En nuestro problema, un listado interesante seria mostrar “la cantidad
        de alumnos inscritos por cursos”. Para resolver de una manera sencilla esta situacion, SQL nos permite
        agrupar los registros de la tabla “alumnos” por la columna cursos_id y contar la cantidad de
        registros que hay por cada codigo de curso igual
    </pre>
    <?php include("con_db.php");
        
        $sql="SELECT count(alu.id) as cantidad,cur.descripcion FROM alumnos as alu INNER JOIN cursos as cur on cur.id=alu.cursos_id GROUP BY alu.cursos_id";
        
        $query=mysqli_query($con,$sql) or die("problemas con la consulta");

        while($reg=mysqli_fetch_assoc($query)){

            echo "Nombre del curso:".$reg['descripcion']."<br>";
            echo "Cantidad de inscriptos:".$reg['cantidad']."<br>";
            echo "<hr>";
        }
    ?>
</body>
</html>
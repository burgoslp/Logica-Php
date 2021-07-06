<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio numero 45 de php Lógica de programación</title>
</head>
<body>
    <pre>
        En situaciones en las cuales una consulta retorna muchos datos, en vez de enviarlos todos al
        navegador, se puede enviar un conjunto limitado de registros. Luego, mediante hipervinculos, ver el
        resto de los datos. Por ejemplo, cuando hacemos busquedas con el Servidor Google, generalmente no
        nos retorna todas las direcciones donde se encuentran los resultados buscados, nos retorna paginas
        con 10 enlaces por pagina (pensemos el tiempo de transferencia si nos retornara 1,000,000 de enlaces).
    </pre>

    <?php include("con_db.php");
            if (isset($_REQUEST['pagina'])){
                $inicio=$_REQUEST['pagina'];
            }else{
                $inicio=0;
            }
            $sql="select alu.id as id,nombre,apellido,cursos_id,cur.descripcion 
                  from alumnos as alu
                  inner join cursos as cur 
                  on cur.id=alu.cursos_id
                  limit $inicio,2";
            $query=mysqli_query($con,$sql) or die("problemas con la consulta-->".mysqli_error($con));
            $impresos=0;
            while($reg=mysqli_fetch_assoc($query)){
                $impresos++;
                echo"Codigo:".$reg['id']."<br>";
                echo "Nombre:".$reg['nombre']."<br>";
                echo "Apellido:".$reg['apellido']."<br>";
                echo "Curso:".$reg['descripcion']."<br>";
                echo "<hr>";
            }
            if($inicio == 0){

                echo "anteriores ";
            }else
            {
             $anterior=$inicio-2;
             echo "<a href=\"index.php?pagina=$anterior\">Anteriores </a>";
            }
            if ($impresos==2)
            {
             $proximo=$inicio+2;
             echo "<a href=\"index.php?pagina=$proximo\">Siguientes</a>";
            }
            else
             echo "siguientes"; 
    ?>
</body>
</html>
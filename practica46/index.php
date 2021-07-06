<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio numero 46 de php Lógica de programación</title>
</head>
<body>
    <pre>
        Confeccionar un programa que muestre los registros de la tabla CURSOS con paginas de 3 registros
    </pre>
    <?php include("con_db.php");

        if(isset($_REQUEST['pagina'])){

            $ini=$_REQUEST['pagina'];
        }else{

            $ini=0;
        }
        $sql="select cur.descripcion from cursos as cur limit $ini,3";
        $query=mysqli_query($con,$sql) or die("problemas con la consulta-->".mysqli_error($con));
        $cont=0;
       
    ?>
        <table border="1">
            <tr>
                <td>
                    CURSOS DISPONIBLES
                </td>
            </tr>
            <tr>
                <td>DESCRIPCION</td>
            </tr>
            <?php  while($reg=mysqli_fetch_assoc($query)):
                   $cont++
            ?>
            <tr>
                <td><?php echo $reg['descripcion']?></td>
            </tr>
            <?php endwhile?>
        </table>



        <?php 
        
            if($ini==0){

                echo "<br>Anterior  --- ";
            }else{
                $ini-=2;
                echo "<br><a href='index.php?pagina=$ini'>Anterior</a> --- ";
            }
            if($cont==3){
                $ini+=2;
                echo "<a href='index.php?pagina=$ini'>siguiente</a>";
            }else{

                echo " --- Siguiente";
            }
        ?>
</body>
</html>
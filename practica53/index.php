<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio numero 53 de php Lógica de programación</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{

            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
        }
        .w-100{
            width:100%;
        }
        .p-1{
            padding:10px;
        }

        .d-flex{
            display:flex;
        }
        .justify-content-right{

            justify-content:flex-end;
        }
    </style>
</head>
<body>
    
    <?php include('con_db.php');
        $date=date('d/m/Y');
        $sql="SELECT * FROM palabras WHERE  fecha='$date'";
        $query=mysqli_query($con,$sql);
    ?>
        <div  class="w-100 p-1 d-flex justify-content-right">
                <table border="1">
                    <tr>
                        <td>
                                <form action="insert.php" method="POST" id="insert">
                                    <label for="">
                                        
                                        <input type="text" name="palabra" placeholder="Ingresar palabra">
                                    </label>
                                </form>
                        </td>
                        <td>
                            <input type="submit" form="insert" name="submit" value="Guardar">
                        </td>
                    </tr>
                </table> 
            </div>
        <div>
        
        <table border="1"> 
                <tr>
                    <td>#</td>
                    <td>PALABRA</td>
                    <td>CLASIFICACIÓN</td>
                    <td>TIEMPO</td>
                    <td>FECHA</td>
                </tr>
                <?php 
                    $x=1;
                    while($reg=mysqli_fetch_assoc($query)):
                ?>
                <tr>
                    <td><?php echo $x?></td>
                    <td><?php echo $reg['nombre']?></td>
                    <td><?php echo $reg['clasificacion']?></td>
                    <td><?php echo $reg['tiempo']?></td>
                    <td><?php echo ($reg['fecha'] == date('d/m/Y'))?"Hoy": $reg['fecha'];?></td>
                </tr>
                <?php
                    $x++;
                    endwhile;
                ?>
        </table>
    </div> 
</body>
</html>
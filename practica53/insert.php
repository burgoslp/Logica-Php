<?php
    if(isset($_REQUEST['submit'])){
        include('con_db.php');
        if($_POST['clasificacion'] != "" && $_POST['tiempo'] != "" && $_POST['palabra'] !=""){

            $palabra=$_POST['palabra'];
            $tiempo=$_POST['tiempo'];
            $clasificacion=$_POST['clasificacion'];
            $date=date("d/m/Y");
            $sql="INSERT INTO palabras(nombre,tiempo,clasificacion,fecha) VALUES('$palabra','$tiempo','$clasificacion','$date')";
            $query=mysqli_query($con,$sql) or die('problemas con la consulta ->'.mysqli_error($con));
            if($query){

             header('location:index.php');
            }else{

                echo "Hubo problemas para guardar la palabra";
            }
        }else{

            echo "rellene todos los campos";
        }          
    }else{

        echo "ingrese una palabra porfavor <a href='/php/practica53/'>Regresar</a>";
    }
?>
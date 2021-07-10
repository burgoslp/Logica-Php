<?php 
    if(isset($_FILES['imagen'])){
        $carpeta="images";//almacenamos el nombre de la carpeta
        if(!file_exists($carpeta)){//corroboramos que exista
            mkdir($carpeta);//si no existe la creamos con este comando
        }
        $nombreTemporal=$_FILES['imagen']['tmp_name'];
        $nombreOriginal=$_FILES['imagen']['name'];

        $carpeta.="/".$nombreOriginal;
        copy($nombreTemporal,$carpeta);
        if(file_exists($carpeta)){
            echo "imagen guarda con exito";
        }
    }else{

        echo "Por favor ingrese una imagen para guardarla <a href='index.php'>Regresar</a>";
    }

?>
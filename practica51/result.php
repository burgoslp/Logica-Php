<?php

    if(isset($_FILES['imagen'])){
        $dir="images";//almaceno el nombre de la carpeta
        if(!file_exists($dir)){
            mkdir($dir);//creo la carpeta si esta no existe
        }
        
        $nombreTmp=$_FILES['imagen']['tmp_name'];//almaceno el nombre temporal
        $nombreOriginal=$_FILES['imagen']['name'];//almaceno el nombre original
        $tamañoImagen=$_FILES['imagen']['size'];//almaceno el tamaño de la imagen

        if($tamañoImagen >= 5242880){

            echo "La imagen que subio supera los 5 MB, eliga una imagen con menor tamaño <a href='index.php'>Regresar</a>";
        }else{
            $tamañoDir=10.00;
            $verificar=dir('images');
            $x=0;
            while(false !==($archivos = $verificar->read())){
                
                $x+=filesize($dir."/".$archivos); 
            }
            if(($x/1048576) <= $tamañoDir){

                copy($nombreTmp,$dir."/".$nombreOriginal);
                echo "Se ha guardado la imagen con exito <a href='index.php'>Regresar</a>";
            }else{

                $espacioRest=$tamañoDir-(number_format($x/1048576,2));
                echo "Se ha agotado el espacio de almacenamiento, borre archivos del servidor a usted le quedan $espacioRest MB <a href='index.php'>Regresar</a>";
            }
        }
        
    }else{

        echo "Porfavor ingrese una foto para guardarla <a href='index.php'>Regresar</a>";
    }
?>
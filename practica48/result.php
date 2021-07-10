<?php

   //Como el elemento es un arreglos utilizamos foreach para extraer todos los valores
	foreach($_FILES["archivo"]['tmp_name'] as $key => $tmp_name)
	{
		if($_FILES['archivo']['name'][$key]){//validamos que el archivo o archivos existan

            $file=$_FILES['archivo']['name'][$key];//guardamos el nombre del archivo
            copy($_FILES['archivo']['tmp_name'][$key],"doc/".$file);//almacenamos las fotos

            echo "se ha cargado la imagen ".$file."<br>";    
        }
	}
?>
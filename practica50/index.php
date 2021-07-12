<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio numero 50 de php Lógica de programación</title>
</head>
<body>
    <pre>
        Crear un programa que lea los archivos de la carpeta doc, sume y calcule el tamaño total 
        de todos los archivos si se acerca a los 2mb mandar un mensaje de tamaño limite alcanzado
    </pre>

    <?php  
        function obtenerFormato($bytes)
        {
            if ($bytes >= 1073741824)
            {
                $bytes = number_format($bytes / 1073741824, 2) . ' GB';
            }
            elseif ($bytes >= 1048576)
            {
                $bytes = number_format($bytes / 1048576, 2) . ' MB';
            }
            elseif ($bytes >= 1024)
            {
                $bytes = number_format($bytes / 1024, 2) . ' KB';
            }
            elseif ($bytes > 1)
            {
                $bytes = $bytes . ' bytes';
            }
            elseif ($bytes == 1)
            {
                $bytes = $bytes . ' byte';
            }
            else
            {
                $bytes = '0 bytes';
            }

            return $bytes;
        }

        $dir=dir('doc');//almacenamos el directorio
        $array=array();
        $x=0;
        while(false !==($archivos = $dir->read())){//
            if(strpos($archivos,"jpg") !== false or strpos($archivos,"jpeg") !== false or strpos($archivos,"png") !== false){
                $array[$x]=$archivos;
                $x++;
            }
        }
        //$dir->close();
        $total=0;
        foreach($array as $ima){
           
            $total+= filesize("doc/".$ima);//sumamos los archivos en bytes
            
        }
        $pesoTotal=obtenerFormato($total);//gracias a la funcion tranformamos los byte en KB O MB O GB
        
        if($pesoTotal < "2 MB" or $pesoTotal > "1.5 MB"){

            $numPeso=str_replace(" MB",'',$pesoTotal);
            $numPeso=(double)$numPeso;
            $capacidad=2.0 - $numPeso;
            echo "Quedan ".$capacidad." MB de 2.0 MB libera espacio en la carpeta doc" ;
        }else{

            
        }
    ?>
</body>
</html>
<?php 

    $host="localhost";
    $user="root";
    $password="";
    $db="php";

    $con=mysqli_connect($host,$user,$password,$db) or die("problemas con la conexion de la base de datos--> ".mysqli_error());



    function acentuacion($palabra){

        $palabra=$palabra;
        $vocalesAcentuadas=['á','é','í','ó','ú'];
        if($silabas=explode("á",$palabra)){

            echo "a";

        }else if($silabas=explode("á",$palabra)){

            echo "e";

        }else if($silabas=explode("é",$palabra)){

            echo "i";

        }else if($silabas=explode("í",$palabra)){

            echo "o";
            
        }else if($silabas=explode("ó",$palabra)){

            echo "u";
        }
    }  

    acentuacion("árbol");
?>
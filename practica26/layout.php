<?php

        function cabezera($fondo="none",$color="none"){

            $fondo="background-color:".$fondo.";";
            $color="color:".$color.";";
            echo "<header style=".$fondo.$color.">
                        Uso de funciones para crear cabezera y pie de pagina
                  </header>";
    
        }



        function piePagina($fondo="none",$color="none"){

            $fondo="background-color:".$fondo.";";
            $color="color:".$color.";";
            echo "<footer style=".$fondo.$color.">
                       este es el pie de pagina
                  </footer>";
    
        }
?>
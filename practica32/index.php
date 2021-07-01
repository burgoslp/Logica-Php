<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio numero 32 de php Lógica de programación</title>
    <style>
        .contrato{

            display:flex;
            justify-content:center;
            

        }

        .texto{
            border:1px solid black;
            padding:30px;
            display: inline-block;
            font-family:arial;
        }
    </style>
</head>
<body>
    <pre align="center" style="border:1px solid gray; padding:10px;">
        Confeccionar una pagina que muestre un contrato dentro de un textarea, disponer puntos suspensivos
        donde el operador debe ingresar un texto. La pagina que procesa el formulario solo debe mostrar el
        contrato con las modificaciones que hizo el operador.
    </pre>
    <?php
        if(isset($_POST['ciudad']) && isset($_POST['nombre']) && isset($_POST['direccion'])){
            if($_POST['ciudad'] != "" && $_POST['nombre'] != "" && $_POST['direccion'] != ""){

                $nombre=$_POST['nombre'];
                $ciudad=$_POST['ciudad'];
                $direccion=$_POST['direccion'];
                $empresa="LOGITEC";
                $reclutador="Alvaro felix";
            }else{
                echo "<br><br>Rellene todos los campos porfavor";
            }
        }
    ?>

    <div class="contrato">
            <div class="texto">
                En la ciudad de <?php echo isset($_POST['ciudad'])?$ciudad:"[……..]"; ?>, 
                se acuerda entre la Empresa <?php echo isset($empresa)?$empresa:"[……..]"; ?> 
                representada por el Sr. <?php echo isset($reclutador)?$reclutador:"[……..]";?> en su carácter <br>
                de Apoderado, con domicilio en la calle <?php echo isset($_POST['direccion'])?$direccion:"[……..]";?> y el Sr. <?php echo isset($_POST['nombre'])?$nombre:"[……..]";?>
                , futuro empleado con domicilio en <?php echo isset($_POST['direccion'])?$direccion:"[……..]";?>, <br>
                celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los articulos 90, 92, 93, <br>
                94, 95 y concordantes de la Ley de Contrato de Trabajo No. 20744.
            </div>
    </div>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">

        <input type="text" name="ciudad" placeholder="Ingrese la ciudad actual"><br><br>
        <input type="text" name="nombre" placeholder="Ingrese su nombre"><br><br>
        <input type="text" name="direccion" placeholder="Ingrese su direccion"><br><br>
        <input type="Submit" value="registrar datos">
    </form>


    
</body>
</html>
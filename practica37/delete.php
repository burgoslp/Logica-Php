<?php
    if(isset($_POST['borrar'])){
        $id=$_POST['borrar'];
        $sql="DELETE FROM personas WHERE id='$id'";
        $query=mysqli_query($conexion,$sql) or die('hubo problemas para ejercutar la sentencia DELETE');
        mysqli_close($conexion);
    }

?>
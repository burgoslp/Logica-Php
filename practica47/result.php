<?php
    copy($_FILES['file']['tmp_name'],$_FILES['file']['name']);
    echo "La foto se registro en el servidor.<br>";
    $nom=$_FILES['file']['name'];
    echo "<img src=\"$nom\">";
?> 
<?php
    
    $conexion = mysqli_connect("localhost",'root',"admin","proyecto_ulatina") or die (mysqli_error($conexion));
    mysqli_select_db($conexion,'proyecto_ulatina') or die (mysqli_error($conexion));
    mysqli_set_charset($conexion,'utf8');
    mysqli_query($conexion, "SET time_zone = '-6:00';");


?>
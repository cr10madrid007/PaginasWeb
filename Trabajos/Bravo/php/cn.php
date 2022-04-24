<?php
$conexion = mysqli_connect("localhost", "root", "", "dbbravo");
mysqli_set_charset($conexion, "utf8");
if(!$conexion){
    die("No hay conexión: ".mysqli_connect_error());
}


?>
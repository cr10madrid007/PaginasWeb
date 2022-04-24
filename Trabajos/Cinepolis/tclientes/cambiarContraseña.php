<?php
 include_once '../conexion.php';
     
    $correo=$_POST['correo'];
    $pass=$_POST['codigo'];
    
    try {
        
    } catch (\Throwable $th) {
        echo "Error: $th";
    }
    
?>
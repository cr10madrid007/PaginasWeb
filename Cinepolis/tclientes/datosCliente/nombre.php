<?php
include_once '../../conexion.php';

$correo= $_POST["correo"];

try {
    
    

    
    $sentencia_select=$con->prepare("SELECT * FROM tclientes WHERE correo='$correo'");
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();
    
    foreach($resultado as $fila):
        echo $fila['nombre'];
        
    endforeach;

    } catch (\Throwable $th) {
        echo "Error: $th";
}
?>
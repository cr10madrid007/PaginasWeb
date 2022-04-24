<?php
include_once '../conexion.php';

$id= $_POST["id"];
$hora= $_POST["hora"];

try {
    
    

    
    $sentencia_select=$con->prepare("SELECT * FROM tHorario WHERE idHora='$id' && Hora='$hora'");
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();
    
    foreach($resultado as $fila):
        echo "si";
        
    endforeach;

    } catch (\Throwable $th) {
        echo "Error: $th";
}
?>
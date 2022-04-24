<?php
include_once '../conexion.php';

$idPelicula= $_POST["id"];
$nSilla= $_POST["nSilla"];
$hora= $_POST["hora"];
try {
    
    

    
    $sentencia_select=$con->prepare("SELECT * FROM tSilla WHERE idPelicula='$idPelicula' && Hora='$hora' && nSilla='$nSilla' && fecha=CURDATE()");
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();
    
    foreach($resultado as $fila):
        echo "si";
        return 0;
    endforeach;
        echo "no";
        return 0;

    } catch (\Throwable $th) {
        echo "Error: $th";
}
?>
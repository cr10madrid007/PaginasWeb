<?php
include_once '../conexion.php';
$correo= $_POST["correo"];
$pass= $_POST["contra"];



try {
    
    $consulta_update=$con->prepare(' UPDATE tclientes SET  
					pass=:pass
					WHERE correo=:correo;'
				);
				$consulta_update->execute(array(
					':pass' =>$pass,
					':correo' =>$correo
					
				));


} catch (\Throwable $th) {
    echo "Error: $th";
}

?>
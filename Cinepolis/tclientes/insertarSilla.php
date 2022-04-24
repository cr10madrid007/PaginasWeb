<?php
include_once '../conexion.php';
$nSilla=$_POST['nSilla'];
$idPelicula=$_POST['idPelicula'];
$correo=$_POST['correo'];
$hora=$_POST['hora'];

try {
    $consulta_insert=$con->prepare('INSERT INTO tSilla(idPelicula,nSilla,correo, hora, fecha) VALUES(:idPelicula,:nSilla,:correo,:hora, CURDATE())');
				$consulta_insert->execute(array(
					':idPelicula' =>$idPelicula,
					':nSilla' =>$nSilla,
					':correo' =>$correo,
					':hora' =>$hora,
					

					
                    
				));
} catch (\Throwable $th) {
     echo $th;
}
?>
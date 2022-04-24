<?php
include_once '../conexion.php';

$llave=$_POST['llave'];


$correoComprador=$_POST['correoComprador'];
$idPelicula=$_POST['idPelicula'];
$tarjeta=$_POST['tarjeta'];


try {
    $consulta_insert=$con->prepare('INSERT INTO tLlave(llave) VALUES(:llave)');
				$consulta_insert->execute(array(
					':llave' =>$llave,
				));

                

} catch (\Throwable $th) {
     echo $th;
}
?>
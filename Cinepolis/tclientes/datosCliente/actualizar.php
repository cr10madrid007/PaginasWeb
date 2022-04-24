<?php
try {
include_once '../../conexion.php';
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$ubicacion=$_POST['ubicacion'];
$tarjeta=$_POST['tarjeta'];
$nombreT=$_POST['nombreT'];
$fecha=$_POST['fecha'];
$codigo=$_POST['codigo'];
$correo=$_POST['correo'];

$consulta_update=$con->prepare(' UPDATE tclientes SET  
					nombre=:nombre,
					apellidos=:apellidos,
					ubicacion=:ubicacion,
					nombreT=:nombreT,
					numeroT=:numeroT,
                    fechaE=:fechaE,
					codigo=:codigo
					WHERE correo=:correo;'
				);
				$consulta_update->execute(array(
					':nombre' =>$nombre,
					':apellidos' =>$apellido,
					':ubicacion' =>$ubicacion,
					':nombreT' =>$nombreT,
					':numeroT' =>$tarjeta,
                    ':fechaE' =>$fecha,
					':codigo' =>$codigo,
					':correo' =>$correo
                    
				));
                echo "ok";
} catch (\Throwable $th) {
   
    echo $th;
}
?>
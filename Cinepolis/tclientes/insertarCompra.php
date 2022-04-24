<?php
include_once '../conexion.php';

$descripcion=$_POST['descripcion'];
$tap=$_POST['tap'];
$lugar=$_POST['lugar'];

$correoComprador=$_POST['correoComprador'];
$idPelicula=$_POST['idPelicula'];
$tarjeta=$_POST['tarjeta'];


try {
    $consulta_insert=$con->prepare('INSERT INTO tCompra(tap,descripcion,lugar, correoComprador, idPelicula, tarjeta,fecha) VALUES(:tap,:descripcion,:lugar, :correoComprador, :idPelicula, :tarjeta,CURDATE())');
				$consulta_insert->execute(array(
					':tap' =>$tap,
					':descripcion' =>$descripcion,
					':lugar' =>$lugar,
                    ':correoComprador' =>$correoComprador,
					':idPelicula' =>$idPelicula,
                    ':tarjeta' =>$tarjeta,
				));

                $sentencia_select=$con->prepare("SELECT  MAX(idCompra) FROM tCompra ");
                        
                $sentencia_select->execute();
                   $nr=$sentencia_select->rowCount();
                $resultado=$sentencia_select->fetchAll();
                foreach($resultado as $fila):
            
                    
                        $id = $fila['MAX(idCompra)'];
                        echo $id;
                endforeach;


} catch (\Throwable $th) {
     echo $th;
}
?>
<?php 
	include_once '../conexion.php';
	
	
		
		$correo=$_POST['correo'];
       
    $sentencia_select=$con->prepare('SELECT *FROM tclientes WHERE correo="cristofermadrid2010@hotmail.com"');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();

	// metodo buscar
	if($sentencia_select->execute()){


	}	else {

		echo "Error";
	}	
	


?>
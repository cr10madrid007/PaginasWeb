<?php 
	include_once '../conexion.php';
	
	/*
	
		
		$nombre="David";
		$apellidos="Paz";
		
		$ubicacion="Tegucigalpa";
		$correo="cr10madrid2010@gmail.com";
        $pass="0000";
		$nombreT="DAVID PAZ";
		$numeroT="0000000001";
		$fechaE="11/25";
		$codigo="0004";
	*/	
		$nombre=$_POST['nombre'];
		$apellidos=$_POST['apellidos'];
		
		$ubicacion=$_POST['ubicacion'];
		$correo=$_POST['correo'];
        $pass=$_POST['pass'];
		$nombreT=$_POST['nombreT'];
		$numeroT=$_POST['numeroT'];
		$fechaE=$_POST['fechaT'];
		$codigo=$_POST['codigo'];
		
		

		
				$consulta_insert=$con->prepare('INSERT INTO tclientes(nombre,apellidos,correo, pass,ubicacion, nombret,numerot,fechaE,codigo) VALUES(:nombre,:apellidos,:correo,:pass,:ubicacion, :nombreT, :numeroT, :fechaE, :codigo)');
				$consulta_insert->execute(array(
					':nombre' =>$nombre,
					':apellidos' =>$apellidos,
					':correo' =>$correo,
					':pass' =>$pass,
					':ubicacion' =>$ubicacion,
					':nombreT' =>$nombreT,
					':numeroT' =>$numeroT,
					':fechaE' =>$fechaE,
					':codigo' =>$codigo,
					

					
                    
				));
				
			
	





?>
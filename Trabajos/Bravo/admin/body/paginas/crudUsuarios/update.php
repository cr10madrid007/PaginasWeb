<?php

session_start();
if(isset($_SESSION['nombredelusuario'])){
    $nombredelusuario=$_SESSION['nombredelusuario'];
   // echo "<script>    alert('Bienvenido: $nombredelusuario'); </script>";
}else{
    header("location:../../../index.php");
}

?>

<?php
	include_once '../../conexion.php';
    
	if(isset($_GET['correo'])){
		$correo=(String) $_GET['correo'];

		$buscar_id=$con->prepare('SELECT * FROM tlogin WHERE correo=:correo LIMIT 1');
		$buscar_id->execute(array(
			':correo'=>$correo
		));
		$resultado=$buscar_id->fetch();
	}else{
        //echo "<script> alert('error aqui');</script>";
		header('Location: ../../index.php');
	}


	if(isset($_POST['guardar'])){
		$nombre=$_POST['nombre'];
		$estado=$_POST['estado'];
		$nivel=$_POST['nivel'];
		$correo=(String) $_GET['correo'];

       
	
			
				$consulta_update=$con->prepare(' UPDATE tlogin SET  
					nombre=:nombre,
					estado=:estado,
					nivel=:nivel
					WHERE correo=:correo;');
                
				$consulta_update->execute(array(
					':nombre' =>$nombre,
					':estado' =>$estado,
					':nivel' =>$nivel,
					':correo' =>$correo
					
				));
				header('Location: ../../index.php');
			
		
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar Cliente</title>
	<link rel="stylesheet" href="../../dist/estiloTabla.css">
</head>
<body>
	<div class="contenedor">
		<h2>Update Users</h2>
		<form action="" method="POST">
			<div class="form-group">
                <label for="">Name</label>
				<input type="text" name="nombre" value="<?php if($resultado) echo $resultado['nombre']; ?>" class="input__text">
				
			</div>
			<div class="form-group">
                <label for="">State</label>
				<input type="number" name="estado" value="<?php if($resultado) echo $resultado['estado']; ?>" class="input__text">
				
			</div>
            <div class="form-group">
                <label for="">Level</label>
				<input type="number" name="nivel" value="<?php if($resultado) echo $resultado['nivel']; ?>" class="input__text">
			</div>
			
			<div class="btn__group">
				<a href="../../index.php" class="btn btn__danger">Cancel</a>
				<input type="submit" name="guardar" value="Save" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>

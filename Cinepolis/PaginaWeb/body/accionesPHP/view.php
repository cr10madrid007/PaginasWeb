<?php
include '../../../conexion.php';
$id=$_GET['id'];
$sentencia_select=$con->prepare("SELECT *FROM vPeliculasTodas WHERE idPelicula='$id'");
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    
    <link rel="stylesheet" href="../../css/dist/estiloTabla.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="../../css/css.css">
    <title>CINEPOLIS</title>
</head>
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
</script>
<body>
                      
            <form action="./insertClass.php"  method="POST" enctype='multipart/form-data' class="formulario" name="enviar">
                <fieldset>
                    <legend>San Pedro Sula</legend>
                    <div class="contenedor-campos">
                        
                    <?php foreach($resultado as $fila):?>

                            <div class="campo">
                                <label  for="Teléfono">Id de la pelicula: <?php echo $fila['idPelicula']; ?> </label> 
                            </div>
                            <div class="campo">
                                <label  for="Teléfono">Nombre de la pelicula: <?php echo $fila['nombre']; ?> </label> 
                            </div>

                            <div class="campo">
                                <label  for="Teléfono">Synopsis de la pelicula: <?php echo $fila['synopsis']; ?> </label> 
                            </div>

                            <div class="campo">
                                <label  for="Teléfono">Año: <?php echo $fila['anio']; ?></label> 
                            </div>
                            
                            <div class="campo">
                                <label  for="Clasificación">Clasificación: <?php echo $fila['clasificacion']; ?></label> 
                            </div>
                            
                            <div class="campo">
                                <label  for="Teléfono">Genero: <?php echo $fila['genero']; ?></label> 
                            </div>

                            <div class="campo">
                                <label  for="Teléfono">Director: <?php echo $fila['director']; ?></label> 
                            </div>

                            <div class="campo">
                                <label  for="Teléfono">Duración: <?php echo $fila['duracion']; ?></label> 
                            </div>

                           

                            <a href=<?php echo $fila['banner']; ?> target="_blank" class="btn__update">Banner</a></td>
                            <a href=<?php echo $fila['video']; ?>  target="_blank" class="btn__update">Video</a></td>

                            <?php endforeach; ?>
                           
                            
                    </div> <!--Este es el contenedor de los campos-->
                    
                    
                </fieldset>
            </form>

</body>


</html>
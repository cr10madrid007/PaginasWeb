<?php
include '../../../conexion.php';
$id=$_GET['id'];
$sentencia_select=$con->prepare("SELECT *FROM tCompra WHERE idCompra='$id'");
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
                    <legend>Compra en cinepolis</legend>
                    <div class="contenedor-campos">
                        
                    <?php foreach($resultado as $fila):?>

                            <div class="campo">
                                <label  for="Teléfono">Codigo de la compra: <?php echo $fila['idCompra']; ?> </label> 
                            </div>

                            <div class="campo">
                                <label  for="Teléfono">Fecha: <?php echo $fila['fecha']; ?></label> 
                            </div>

                            <div class="campo">
                                <label  for="Teléfono">Descripción de la compra: <?php echo $fila['descripcion']; ?></label> 
                            </div>

                            <div class="campo">
                                <label  for="Teléfono">Total pagado: <?php echo $fila['tap']; ?></label> 
                            </div>

                            <div class="campo">
                                <label  for="Teléfono">Lugar: <?php echo $fila['lugar']; ?></label> 
                            </div>

                            <div class="campo">
                                <label  for="Teléfono">Correo del comprador: <?php echo $fila['correoComprador']; ?></label> 
                            </div>

                            <div class="campo">
                                <label  for="Teléfono">Codigo de pelicula: <?php echo $fila['idPelicula']; ?></label> 
                            </div>



                            <?php endforeach; ?>
                           
                            
                    </div> <!--Este es el contenedor de los campos-->
                    
                    
                </fieldset>
            </form>

</body>


</html>
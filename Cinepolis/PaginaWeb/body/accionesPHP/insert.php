<?php
include '../../../conexion.php';
session_start();
    if(isset($_SESSION['nombredelusuario'])){
        $nombredelusuario=$_SESSION['nombredelusuario'];

    }else{
        header("location:../../logIn.php");
    }

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
                    <legend>Llene todos los campos para agregar una nueva pelicula</legend>
                    <div class="contenedor-campos">
                        
                        <div class="campo"> <input type="text" name="txtNombre" placeholder="Nombre de la pelicula" class="input-text"> </div>
                           
                           <div class="campo">  <input type="text" name="txtAnio" placeholder="Año de la pelicula" class="input-text"> </div>
                              
                           <div class="campo">
                               <label for="Teléfono">Synopsis de la pelicula</label> 
                               <textarea type="text" name="txtSynopsis"  class="input-text"> </textarea> 
                            </div>
                              
                           <div class="campo">  <input type="text" name="txtGenero" placeholder="Genero de la pelicula" class="input-text"> </div>
                           
                           <div class="campo">  <input type="text" name="txtDuracion" placeholder="Duración de la pelicula" class="input-text"> </div>
                              
                           <div class="campo">  <input type="text" name="txtClasificacion" placeholder="Clasificación de la pelicula" class="input-text"> </div>
                              
                           <div class="campo">  <input type="text" name="txtDirector" placeholder="Director de la pelicula" class="input-text"> </div>   

                           <div class="campo"> <label for="Teléfono">Cargar Banner</label>  </div>
                           <div class="alinear-derecha flex">
                               
                                <input type="file" class="btn" name="btn_fFoto" value="Cargar Foto">
                            </div> 
                            <div class="campo"> <label for="Teléfono">Cargar Video</label> </div>
                            <div class="alinear-derecha flex">
                                  <input type="file" class="btn" name="btn_fVideo" value="Cargar Video">
                            </div>
                            
                            <div class="campo">
                                <label for="Teléfono">Fecha de estreno</label>  
                                <input type="date" name="txtEstreno"  class="input-text">   
                            </div>
                            
                            <div class="campo">
                                <label for="Teléfono">Fecha de cierre</label>  
                                <input type="date" name="txtCierre"  class="input-text">   
                            </div> 

                            <div class="campo">
                                <label for="Teléfono">Horarios</label> 
                            </div>
                            <div class="lblEspecial">
                                <label for="">3:00 PM</label>
                                <input type="checkbox"  name="tres" value="tres">

                                <label for="">5:00 PM</label>
                                <input type="checkbox"  name="cinco" value="cinco">

                                <label for="">7:00 PM</label>
                                <input type="checkbox"  name="siete" value="siete">
                            </div>
                            <div class="campo">
                                <label for="Teléfono">Sucursales</label> 
                            </div>
                            <div class="lblEspecial">
                                <label for="">San Pedro Sula</label>
                                <input type="checkbox"  name="sps" value="sps">

                                <label for="">Tegucigalpa</label>
                                <input type="checkbox"  name="teg" value="teg">
                            </div>



                           
                            
                    </div> <!--Este es el contenedor de los campos-->
                    <div class="alinear-derecha flex">
                        <input type="submit" value="Guardar" name="enviar" id="" class="boton w-sm-100">
                    </div>
                    
                </fieldset>
            </form>

</body>


</html>
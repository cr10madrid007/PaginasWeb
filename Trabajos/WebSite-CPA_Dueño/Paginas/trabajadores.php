<?php
   // error_reporting(2);
    include("../php/cn.php");
    $empleados = "SELECT * FROM templeados";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CPA Painting</title>
    <link rel="stylesheet" type="text/css" href="../../alertas/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="../../alertas/alertifyjs/css/themes/semantic.css">
	<link rel="stylesheet" type="text/css" href="../../alertas/alertifyjs/css/themes/default.css">
	
	<script src="../../alertas/jquery.js"></script>
	<script src="../../alertas/alertifyjs/alertify.js"></script>


    <link rel="shortcut icon" href="../Imagenes/icono.png">
    <link rel="preload" href="../css/normalice.css" as="style">
    <link rel="stylesheet" href="../css/normalice.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preload" href="../css/css.css" as="style">
    <link rel="stylesheet" href="../css/css.css">

  

    <script src="../../alertas/jquery.js"></script>
    <script language="JavaScript" type="text/javascript" src="../js/js.js">  </script>
</head>
<body>
   
    
    <header>
        <div class="titCont">
            <section>
                <img src="../Imagenes/icono.png" alt="">
            </section>

            <section>
                <h1 class="titulo">CPA Painting</h1>
            </section>
        </div>
        
    </header>  
    <div class="nav-bg">
        <nav class="navegacion-principal contenedor">
            <a href="../index.html">Inicio</a>
            <a href="ntrabajos.php">Nuestros Trabajos</a>
            <a href="trabajadores.php">Nuestro Personal</a>
            <a href="contacto.php">Contacto</a>
        </nav>
    </div>
   
    <section class="hero"> 
        <div class="contenido-hero">
            <h2 class="titulo">Services and More</h2>
            <div class="ubicacion">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="88" height="88" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffc107" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="12" cy="11" r="3" />
                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                </svg> 
                <p>Wilmington NC, Estados Unidos</p>
            </div>  
           
        </div>
    </section>    
    
    

    <main class="contenedor sombra">
        <h2>Empleados</h2>
        
        <p class="conSet">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffc107" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                  <circle cx="12" cy="12" r="3" />
                </svg>
        </p>
         
       
        <div class="cruz">
            <input type="button" value="Agregar" name="Agregar" onclick="trabajadores('add');" id="" class="boton w-sm-100">
            <input type="button" value="Eliminar" name="Eliminar" onclick="trabajadores('del');" id="" class="boton w-sm-100">
        </div>

       
        
        <div id="contTrabajadores">

        </div>

                 
        <section>
            <div class='contenedorTabla'>
                <div class='table_h'>ID</div>
                <div class='table_h'>Nombre</div>
                <div class='table_h'>Foto</div>
                <div class='table_h'>Estado</div>
                <?php 
                    $resultado = mysqli_query($conexion, $empleados); while($row= mysqli_fetch_assoc($resultado))  { 
                ?> 
                <div class='table_i'>  
                    <?php  echo $row['idtEmpleados'];  ?>   
                </div>
                <div class='table_i'>  
                    <?php  echo $row['nombre'];  ?>   
                </div>

                <div class='table_i'>  
                    <img class="imgURL" src="../../imagenes/empleados/<?php echo $row['imgUrl'];?>" alt="">   
                </div>
                <div class='table_i'>  
                    <?php  if($row['estado']=='1'){echo 'Activo';} else {echo 'Desactivado';}  ?>   
                </div>
                <?php 
                    } 
                ?> 
            </div> 
        </section>


  

        
    </main>
    <footer>
        <p>TODOS LOS DERECHOS RESERVADOS.&copy 2021 </p>
    </footer>    
</body>
</html>



<script type="text/javascript">


    function add(){       
     var parametros= new FormData($("#frmajax")[0]);

     $.ajax({
         data: parametros,
         type:"POST",
         url:"../php/trabajadoresAdd.php",
         contentType: false,
         processData: false,
         beforesend: function() {
            alertify.error('Error al guardar');
         },
         success: function(response){
            //setTimeout("location.href='trabajadores.php'",500) ;
            alertify.success('Guardado<br>Actualizar para ver los cambios.');
            
         }
     });



    }


    function alerta(){
        alertify.success('Guardado<br>Actualizar para ver los cambios.');
    }
</script>

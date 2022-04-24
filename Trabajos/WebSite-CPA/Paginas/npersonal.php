<?php
    error_reporting(2);
    include("../php/cn.php");
    $empleados = "SELECT * FROM templeados WHERE estado = '1'";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CPA Painting -Nuestro Equipo</title>
    <link rel="shortcut icon" href="../Imagenes/icono.png">
    <link rel="preload" href="../css/normalize.css" as="style">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preload" href="../css/css.css" as="style">
    <link rel="stylesheet" href="../css/css.css">
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
            <a href="ntrabajos.html">Nuestros Trabajos</a>
            <a href="npersonal.php">Nuestro Personal</a>
            <a href="contacto.html">Contacto</a>
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

        <section>
            <h2>Nuestro equipo</h2>
            <div class="contenedorTabla1">
                                <div class="table_h">Nombre</div>
                                <div class="table_h">Foto</div>
                    <?php
                        $resultado = mysqli_query($conexion, $empleados);
                        
                        while($row= mysqli_fetch_assoc($resultado))  {

                    ?>      
                                <div class="table_i">  <?php  echo $row["nombre"];  ?>   </div>
                                <div class="table_i">  <img  src="data:image/jpg;base64, <?php echo base64_encode($row['foto']); ?>" class="fotoTabla">  </div>
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
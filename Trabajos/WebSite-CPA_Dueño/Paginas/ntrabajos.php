<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CPA Painting -Contacto</title>
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
            <a href="ntrabajos.php">Nuestros Trabajos</a>    
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

        <section>
            <h2>Contacto</h2>

            <form action="../php/añadirTrabajos.php"  method="POST" class="formulario" name="enviar" enctype='multipart/form-data'>
                <fieldset>
                    <legend>LLene todos los campos para insertar una publicación</legend>
                    <div class="contenedor-campos">
                        <div class="campo"> 
                            <label for="Nombre"></label>
                            <input class="input-text" type="text" placeholder="Titulo" name="titulo" id="" required>
                        </div>
                        
                     
                        
                        <div class="campo"> 
                            <label for="Mensaje"></label>
                            <textarea class="input-text" placeholder="Escriba una descripción" name="descripcion" id="" cols="30" rows="10" required></textarea>
                        </div>


                        <div class="campo"> 
                            <label for="Mensaje">Imagen Principal</label>
                            <input type="file" name="pimagen">
                        </div>
                    </div> <!--Este es el contenedor de los campos-->
                    <div class="alinear-derecha flex">
                        <input type="submit" value="Enviar" name="enviar" id="" class="boton w-sm-100">
                    </div>
                    
                </fieldset>
            </form>
        </section>    
        

        <section>
            <div class="contacto">
                <a target="_blank" href="https://www.facebook.com/camilo.pazarriaga.9">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                    </svg>
                </a>
                
                <a href="tel:+19105234217">
                Nuestro teléfono: +1 (910) 523-4217
                </a>


                <a target="_blank" href="https://api.whatsapp.com/send?phone=+19105234217">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7bc62d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                        <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
                    </svg>
                </a>
           </div>
        </section>

        
    </main>
    <footer>
        <p>TODOS LOS DERECHOS RESERVADOS.&copy 2021 </p>
    </footer>   
</body>
</html>
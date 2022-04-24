<?php

try {
    //code...
include '../../conexion.php';

session_start();
if(isset($_SESSION['nombredelusuario'])){
    $nombredelusuario=$_SESSION['nombredelusuario'];
   // echo "<script>    alert('Bienvenido: $nombredelusuario'); </script>";
}else{
    header("location:../logIn.php");
}
// <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a></li>
if(isset($_POST['btnCerrar'])){
    session_destroy();
    header("location:../logIn.php");
}
?>
<?php
    
	$sentencia_select=$con->prepare('SELECT * FROM tCompra ');
	$sentencia_select->execute();
    $nr=$sentencia_select->rowCount();
	$resultado=$sentencia_select->fetchAll();

	// metodo buscar
	if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$con->prepare('
			SELECT * FROM tCompra WHERE correoComprador LIKE :campo OR idPelicula LIKE :campo;'
		);

		$select_buscar->execute(array(
			':campo' =>"%".$buscar_text."%"
		));

		$resultado=$select_buscar->fetchAll();

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
    <link rel="stylesheet" href="../css/dist/styles.css">
    <link rel="stylesheet" href="../css/dist/all.css">
    <link rel="stylesheet" href="../css/dist/estiloTabla.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>CINEPOLIS</title>
</head>
<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous">
</script>
<body>
<!--Container -->
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                    <h1 class="text-white p-2">Cinepolis</h1>
                    

                </div>
                <div class="p-1 flex flex-row items-center">
                    


                    <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full" src="../img/logo.jpg" alt="">
                    <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block"><?php echo $nombredelusuario ?></a>
                    <div id="ProfileDropDown" class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                        <ul class="list-reset">
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">My account</a></li>
                          
                          <li><hr class="border-t mx-2 border-grey-ligght"></li>
                          
                          <li><form method="POST"> <input class="no-underline px-4 py-2 block text-black hover:bg-grey-light" type="submit" value="Logout" name="btnCerrar">  </form></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!--/Header-->

        <div class="flex flex-1">
            <!--Sidebar-->
            <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

                <ul class="list-reset flex flex-col">
                    <li class=" w-full h-full py-3 px-2 border-b border-light-border ">
                        <a href="index.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-users float-left mx-2"></i>
                            Peliculas
                            <span><i class="fas fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border" >
                        <a href="registro.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fab fa-wpforms float-left mx-2"></i>
                            Registro de Venta
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border  bg-white">
                        <a href="info.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-grip-horizontal float-left mx-2"></i>
                            Información
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                   
                    
                    
                   
                </ul>

            </aside>
            <!--/Sidebar-->
            <!--Main-->
            <main class="bg-white-300 flex-1 p-3 overflow-hidden">

                <div class="flex flex-col">
                    <!-- Stats Row Starts Here -->
                   

                            <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                                <div class="px-6 py-2 border-b border-light-grey">
                                    <div class="font-bold text-xl">Cinepolis fue creado por:</div>
                                    <div class="font-bold text-x3">Cristofer David Madrid Paz</div>
                                    <div class="font-bold text-x3">Heydi Lisbeth Pineda Hernandez</div>
                                

                   
                                </div>
                            </div>
                </div>
            </main>
            <!--/Main-->
        </div>
        <!--Footer-->
        <footer class="bg-grey-darkest text-white p-2">
           
        </footer>
        <!--/footer-->

    </div>

</div>
<script src="../js/main.js"></script>
<script src="../js/dateTime.js"></script>
</body>

</html>


<?php

} catch (\Throwable $th) {
    echo $th;
}
?>
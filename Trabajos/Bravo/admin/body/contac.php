<?php
include_once 'conexion.php';
session_start();
if(isset($_SESSION['nombredelusuario'])){
    $nombredelusuario=$_SESSION['nombredelusuario'];
   // echo "<script>    alert('Bienvenido: $nombredelusuario'); </script>";
}else{
    header("location:../index.php");
}
// <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a></li>
if(isset($_POST['btnCerrar'])){
    session_destroy();
    header("location:../index.php");
}
?>

<?php
	
    
	
	

		$buscar_id=$con->prepare("SELECT * FROM tcontacto WHERE id='1' ");
		$buscar_id->execute(array());
		$resultado=$buscar_id->fetch();
	


	if(isset($_POST['guardar'])){
		$direccion=$_POST['direccion'];
		$telefono=$_POST['telefono'];
		$correo=$_POST['correo'];
		$facebook=$_POST['facebook'];
		$whatsapp=$_POST['whatsapp'];
		$codigoMapa=$_POST['codigoMapa'];
		$textoWhatsapp=$_POST['textoWhatsapp'];
	

       
	
			
				$consulta_update=$con->prepare(" UPDATE tcontacto SET  
					direccion=:direccion,
					telefono=:telefono,
					correo=:correo,
					facebook=:facebook,
					whatsapp=:whatsapp,
					codigoMapa=:codigoMapa,
					textoWhatsapp=:textoWhatsapp
					WHERE id='1'");
                
				$consulta_update->execute(array(
					':direccion' =>$direccion,
					':telefono' =>$telefono,
					':correo' =>$correo,
					':facebook' =>$facebook,
					':whatsapp' =>$whatsapp,
					':codigoMapa' =>$codigoMapa,
					':textoWhatsapp' =>$textoWhatsapp
					
				));
				header('Location: contac.php');
			
		
	}


    if(isset($_POST['cargar'])){
        $imagen= $_FILES['archivo']['name'];
       
        if(isset($imagen)&& $imagen != ""){
            $tipo = $_FILES['archivo']['type'];
            $temp = $_FILES['archivo']['tmp_name'];

            if(!(( strpos($tipo,'jpeg') ))){
                echo "<script> alert('Solo se permiten los archivos de formato jpeg') </script>";
                header('location: contac.php');
            }else{               
                    move_uploaded_file($temp,'../../img/pg/bannerContacto.jpg');                      
                        
                }
            }
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
    <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet" href="./dist/all.css">
    <link rel="stylesheet" href="./dist/estiloTabla.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>BRAVO AUTOSELL</title>
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
                    <h1 class="text-white p-2">BRAVO AUTOSELL</h1>
                    

                </div>
                <div class="p-1 flex flex-row items-center">
                    


                    <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full" src="../../img/login/bravo.jpg" alt="">
                    <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block"><?php echo $nombredelusuario ?>     </a>
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
                        <a href="index.html"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-users float-left mx-2"></i>
                            Users
                            <span><i class="fas fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="home.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fab fa-wpforms float-left mx-2"></i>
                            Home
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border  bg-white">
                        <a href="contac.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-grip-horizontal float-left mx-2"></i>
                            Contact
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="cars.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-table float-left mx-2"></i>
                            Cars
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
                                            <div class="font-bold text-xl">Contact</div>
                                            <div class="barra__buscador">
                                    <!-- -->
                                             </div>
                                            <form action="" method="POST" enctype='multipart/form-data'>
                                                <div class="form-group">
                                                    <label for="">Address</label>
                                                    <input type="text" name="direccion" value="<?php if($resultado) echo $resultado['direccion']; ?>" class="input__text">
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Phone</label>
                                                    <input type="text" name="telefono" value="<?php if($resultado) echo $resultado['telefono']; ?>" class="input__text">
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Email</label>
                                                    <input type="email" name="correo" value="<?php if($resultado) echo $resultado['correo']; ?>" class="input__text">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Facebook</label>
                                                    <input type="text" name="facebook" value="<?php if($resultado) echo $resultado['facebook']; ?>" class="input__text">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">WhatsApp</label>
                                                    <input type="number" name="whatsapp" value="<?php if($resultado) echo $resultado['whatsapp']; ?>" class="input__text">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Maps</label>
                                                    <input type="text" name="codigoMapa" value="<?php if($resultado) echo $resultado['codigoMapa']; ?>" class="input__text">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">WhatsApp Text</label>
                                                    <input type="text" name="textoWhatsapp" value="<?php if($resultado) echo $resultado['textoWhatsapp']; ?>" class="input__text">
                                                </div>
                                                
                                                <div class="btn__group">
                                                    
                                                    <input type="submit" name="guardar" value="Save" class="btn btn__primary">
                                                </div>
                                                <div class="form-group">
                                                        <label for="">Edit Banner Photo</label>
                                                        <input type="file"  name='archivo' class="input__text"> 
                                                </div>
                                                    <div class="btn__group">
                                                        
                                                        <input type="submit" name="cargar" value="Upload" class="btn btn__primary">
                                                </div>
                                               
                                            </form>

                                           
                  
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
<script src="./main.js"></script>
<script src="./dateTime.js"></script>
</body>

</html>
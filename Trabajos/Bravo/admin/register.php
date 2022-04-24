<?php
include("body/conexion.php");

if(isset($_POST["guardar"])){
    
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $pass=$_POST['pass'];
    $pass1=$_POST['pass1'];
    

    if(!empty($nombre) && !empty($correo) && !empty($pass) && !empty($pass1) && ($pass == $pass1)){
        
            $consulta_insert=$con->prepare("INSERT INTO tlogin (nombre,correo,pass,estado,nivel) VALUES(:nombre,:correo,:pass,'0','0')");
            $consulta_insert->execute(array(
                ':nombre' =>$nombre,
                ':correo' =>$correo,
                ':pass' =>$pass
            ));
            header('Location: index.php');
        
    }else{
        echo "<script> alert('Error');</script>";
    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./body/dist/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
          crossorigin="anonymous">
    <style>
        .login{
            background: url('../img/login/bravo.jpg')
            
        }
    </style>
    <title>Register</title>
</head>
<body class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
    <div class="w-full max-w-lg">
        <div class="leading-loose">
            <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" method="post">
                <p class="text-gray-800 font-medium">Register</p>
                <div class="">
                    <label class="block text-sm text-gray-00" for="cus_name">Name</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="nombre" type="text" required="" placeholder="Your Name" aria-label="Name">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_email">Email</label>
                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="cus_email" name="correo" type="email" required="" placeholder="Your Email" aria-label="Email">
                </div>
                <div class="mt-2">
                    <label class=" block text-sm text-gray-600" for="cus_email">Password</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="pass" type="password" required="" placeholder="Your Password" aria-label="Email">
                </div>
                <div class="mt-2">
                    <label class="hidden text-sm block text-gray-600" for="cus_email">Confirm Password</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="pass1" type="password" required="" placeholder="Confirm Your Password" aria-label="Email">
                </div>
               

                <div class="mt-4">
                    <button type="submit" class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" name="guardar" >Register</button>
                </div>
                <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="index.php">
                    Already have an account ?
                </a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
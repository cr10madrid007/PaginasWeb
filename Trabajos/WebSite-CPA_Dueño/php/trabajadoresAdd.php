<?php
include('cn.php');

    
    $nombre= $_POST['nombre'];
    $imagen= $_FILES['archivo']['name'];
    if(isset($imagen)&& $imagen != ""){
        $tipo = $_FILES['archivo']['type'];
        $temp = $_FILES['archivo']['tmp_name'];
        
        if(!((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo, 'webp')))){
            echo "<script> alert('Solo se permiten los archivos de formato jpeg, gif, webp') </script>";
            header('location:../Paginas/trabajadores.php');
        }else{
            $query = "INSERT INTO templeados (nombre, imgUrl, estado)VALUES('$nombre','$imagen','1')";
            $resultado=  mysqli_query($conexion,$query);
            
            
            if($resultado){
                move_uploaded_file($temp,'../../imagenes/empleados/bannerContacto.jpg');
               // header('location:../Paginas/trabajadores.php');
               // echo "<script language='JavaScript' type='text/javascript' src='../Paginas/trabajadores.php'> </script>";
              //  echo "<script> alertaGuardar(); </script>";
                
            }else{
                
               // echo "<script> alert('Error en el servidor') </script>";
                //header('location:../Paginas/trabajadores.php');
                
            }
        }
    }

?>
<?php
include('cn.php');

    
    $nombre= $_POST['titulo'];
    $descripcion= $_POST['descripcion'];
    $nPublicaciones = "SELECT * FROM tpublicaciones where idPublicaciones = ( SELECT MAX(idPublicaciones) FROM tpublicaciones)";
    $consulta = mysqli_query($conexion, $nPublicaciones); 
                    while($row= mysqli_fetch_assoc($consulta))  { 
                        $n=$row['idPublicaciones'];
                    }
    $n=$n+1;
   
    
    $imagen= $_FILES['pimagen']['name'];
    if(isset($imagen)&& $imagen != ""){
        $tipo = $_FILES['pimagen']['type'];
        $temp = $_FILES['pimagen']['tmp_name'];
        
        if(!((strpos($tipo,'png') || strpos($tipo,'jpeg') || strpos($tipo, 'webp')))){
            echo "<script> alert('Solo se permiten los archivos de formato jpeg, png, webp') </script>";
            header('location:../Paginas/trabajadores.php');
        }else{
            $query = "INSERT INTO tpublicaciones (titulo, descripcion,ruta, imgPrincipal)VALUES('$nombre','$descripcion','$n','$imagen')";
            $resultado=  mysqli_query($conexion,$query);
                    $dir = '../Imagenes/trabajos/'.$n;
                    mkdir($dir, 0777);
            
            if($resultado){
                
                move_uploaded_file($temp,'../Imagenes/trabajos/'.$n.'/'.$imagen);
                
               // echo "<script language='JavaScript' type='text/javascript' src='../Paginas/trabajadores.php'> </script>";
              //  echo "<script> alertaGuardar(); </script>";
                
            }else{
                header('location:../Paginas/ntrabajos.php');
               // echo "<script> alert('Error en el servidor') </script>";
                //header('location:../Paginas/trabajadores.php');
                
            }
        }
    }





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPA PAINTING</title>
</head>
<body>
    <form action="" metho="POST" enctype="multipart/form-data">
        <label for="">Seleccione Todas las imagenes que desee subir</label> <br>
        <input type="file" name="archivo[]" id="archivo[]" miltiple=""> <br>
        <button type="submit">Cargar</button>
    </form>
</body>
</html>
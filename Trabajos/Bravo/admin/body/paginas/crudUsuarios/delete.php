<?php
include_once '../../conexion.php';
session_start();
if(isset($_SESSION['nombredelusuario'])){
    $nombredelusuario=$_SESSION['nombredelusuario'];
   // echo "<script>    alert('Bienvenido: $nombredelusuario'); </script>";
}else{
    header("location:../../../index.php");
}







if(isset($_GET['correo'])){
    $correo=(String) $_GET['correo'];
    $delete=$con->prepare('DELETE FROM tlogin WHERE correo=:correo');
    $delete->execute(array(
        ':correo'=>$correo
    ));
    header("location:../../index.php");
}else{
    header("location:../../index.php");
}
?>
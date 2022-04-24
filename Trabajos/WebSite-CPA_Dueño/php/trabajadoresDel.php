<?php
include('cn.php');

if(isset($_POST['Eliminar'])){
$id=$_POST['id'];

$query = "DELETE FROM templeados WHERE idtEmpleados = $id ";
$empleados = "SELECT * FROM templeados WHERE idtEmpleados = $id ";
$resultado = mysqli_query($conexion, $empleados);
$img='';
while($row= mysqli_fetch_assoc($resultado))  {
$img=$row['imgUrl'];
}

unlink('../../imagenes/empleados/'.$img);


mysqli_query($conexion, $query);

//echo "<script> alert('Eliminado Correctamente') </script>";
header('location:../Paginas/trabajadores.php');
}
?>
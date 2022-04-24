<?php
include_once '../../conexion.php';
$correo=$_GET['email'];   
try {
    //code...

    $sqlSitios = "SELECT * FROM tCompra WHERE correoComprador='$correo'";
    $sentencia_select=$con->prepare($sqlSitios);
    $sentencia_select->execute();
    $nr=$sentencia_select->rowCount();
    $resultado=$sentencia_select->fetchAll();


    $employeeArr = array();
    $employeeArr = array();
    foreach($resultado as $fila):
        
        $e = array(
            "idCompra" => $fila['idCompra'],
            "descripcion" => $fila['descripcion'],
            "fecha" => $fila['fecha'],
            "tap" => $fila['tap'],
            "lugar" => $fila['lugar'],
            "correoComprador" => $fila['correoComprador'],
            "idPelicula" => $fila['idPelicula'],
            "tarjeta" => $fila['tarjeta']
        );    
        array_push($employeeArr, $e);


    endforeach;

    echo json_encode($employeeArr);                    
} catch (\Throwable $th) {
    //throw $th;
    echo $th;
}




?>
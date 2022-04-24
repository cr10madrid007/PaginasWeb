<?php
include_once '../../conexion.php';
$sqlSitios = "SELECT * FROM vPeliculasHomeTegus";
$sentencia_select=$con->prepare($sqlSitios);
$sentencia_select->execute();
$nr=$sentencia_select->rowCount();
$resultado=$sentencia_select->fetchAll();


$employeeArr = array();
$employeeArr = array();
foreach($resultado as $fila):
    
    $e = array(
        "idPelicula" => $fila['idPelicula'],
        "nombre" => $fila['nombre'],
        "synopsis" => $fila['synopsis'],
        "anio" => $fila['anio'],
        "clasificacion" => $fila['clasificacion'],
        "genero" => $fila['genero'],
        "director" => $fila['director'],
        "duracion" => $fila['duracion'],
        "video" => $fila['video'],
        "banner" => $fila['banner']
    );    
    array_push($employeeArr, $e);


endforeach;

echo json_encode($employeeArr);                    
?>
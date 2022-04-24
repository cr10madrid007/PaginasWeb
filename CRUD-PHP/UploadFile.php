<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once 'Database.php';
include_once 'Fotografias.php';

$database = new Database();
$db = $database->getConnection();

$item = new Fotografias($db);

$data = $_POST["imagen"]; 
//$data = json_decode(file_get_contents("php://input"));

 //$item->imagen = $data->imagen;
$item->imagen = $data;

    if($item->StoreImage()){  
        echo json_encode(
        array("message" => "Imagen subida"));
    } else{
        echo json_encode(
            array("message" => "Imagen no creada"));
    }

?>
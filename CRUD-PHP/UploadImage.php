<?php


include_once 'Database.php';
include_once 'Fotografias.php';

$database = new Database();
$db = $database->getConnection();

$item = new Fotografias($db);

$isGood = false;

try
{

	$uploaddir = 'uploads/';
	$fileName = basename($_FILES['IMAGEN']['name']);
	$uploadfile = $uploaddir . basename($_FILES['IMAGEN']['name']);

	//CHECK IF ITS AN IMAGE OR NOT
	$allowed_types = array ('image/jpeg', 'image/png', 'image/bmp', 'image/gif' );
	
  
	if (move_uploaded_file($_FILES['IMAGEN']['tmp_name'], $uploadfile)) 
	{
		
		echo '{"status" : "Success", "reason" "'. $fileName .'"}';
		$isGood = true;
	} 
	else 
	{
		//echo "Possible file upload attack!\n";
		echo '{"status" : "Bad", "reason" : "Unable to Upload Profile Image"}';
	}


	$path = $uploadfile;
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $datax = file_get_contents($uploadfile);
    $base64 = base64_encode($datax);

     echo json_encode(
        array("message" => $base64));

    
    $item->imagen = $base64;

    if($item->StoreImage()){  
        echo json_encode(
        array("message" => "Imagen subida"));
    } else{
        echo json_encode(
            array("message" => "Imagen no creada"));
    }

}
catch(Exception $e) 
{
	echo '{"status" : "Bad", "reason" : "'.$e->getMessage().'"}';
}

?>
<?php 
include '../../../conexion.php';
function pushNotification($pTitle, $pSubtitle, $pTokens, $pCustomData, $pServerKey)
{
	/*Valores requeridos para firebase*/
	$dataNotification = array(
	    'notiTitle' => $pTitle, 
		'notiBody' => $pSubtitle, 
		
	    'notiVisible' => "1",
	    'notiDateTime'=>date('Y-m-d H:i:s'),
	    'notiLink' => '', 
	    'notiData'=>json_encode($pCustomData) 
	);

	$fieldsFirebase = array(
		'registration_ids' => $pTokens, 
		// 'notification'=> array notification
	    'data' => $dataNotification,
	    'priority'=> 'high'
	);

	$headers = array('Content-Type: application/json',
    'Authorization:key='.$pServerKey
	);

	// Ejecutar Api de Firebase
	$url = 'https://fcm.googleapis.com/fcm/send';
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fieldsFirebase));
	$result = curl_exec($ch);

	if ($result == FALSE){
		echo '<h1>Error</h1>'; 
		
	    die('Curl failed: ' . curl_error($ch));
	}else{
		//echo '<h1>Correcto</h1>';
		header('Location: ../index.php');
	}

	curl_close($ch);
}




if(isset($_POST['guardar'])){
	$serverKey='AAAAWe5OFuY:APA91bH3D0WlEogzVkxydagXmT8j-xbynhnKkXa7Nso0x-sEuQsOnU3ADxa6pvlNCNdpw82vQWnm-Ghu570j0urgKy1aMOLkj22OkuWFBGCQ0EyuyJJKkDUfVIiMLehVVP62dv2NYHEN';
	$tokens = array("e4seSU7CsHs:APA91bHjay7WeGFMOZJRpyPT1AyQ8BKsF9fdi__DXR77C5OMzVLqXl9JqmO9CUA6ocY8wTDfNWnQKccs4dC5fpbHZJl9XRkpCnvsmTSUgFHXOsb9Ov5F1YrNdib2DdCHZECFluC_HI_g");
	$titulo= $_POST['txtTitulo'];
	$subtitulo= $_POST["txtDescricion"];
try {
	//code...

				$sentencia_select=$con->prepare("SELECT * FROM tLlave");
                        
                $sentencia_select->execute();
                $resultado=$sentencia_select->fetchAll();
                foreach($resultado as $fila):
            
                    	$tokens = array($fila['llave']);
                        
                        $customData = array( 'Nombre' => 'Fonsus', 'Apellido'=>'Proguer' );

						pushNotification($titulo, $subtitulo, $tokens, $customData, $serverKey);
                endforeach;

			} catch (\Throwable $th) {
				echo $th;
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
    
    <link rel="stylesheet" href="../../css/dist/estiloTabla.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="../../css/css.css">
    <title>CINEPOLIS</title>
</head>
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
</script>
<body>
                      
            <form action=""  method="POST"  class="formulario" name="enviar">
                <fieldset>
                    <legend>Llene todos los campos para Enviar la notificación</legend>
                    <div class="contenedor-campos">
                        
                        <div class="campo"> <input type="text" name="txtTitulo" placeholder="Titulo de la notificación" class="input-text"> </div>
                           
                        <div class="campo">  <input type="text" name="txtDescricion" placeholder="Descripción" class="input-text"> </div>
                             
                    </div> <!--Este es el contenedor de los campos-->
                    <div class="alinear-derecha flex">
                        <input type="submit" value="Guardar" name="guardar" id="" class="boton w-sm-100">
                    </div>
                    
                </fieldset>
            </form>

</body>


</html>
<?php




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);


$correo_= $_POST['correo_'];
$codigo_= $_POST['codigo_'];


try {
    //Variables Post
    


    $destinatario= $correo_;
    $mensaje= "Este es el codigo de acceso que nuestro cine le proporciona: $codigo_"; 
    $encabezado="Verificación de cuenta --  CINEPOLIS";
    date_default_timezone_set('America/Los_Angeles');
   
    
  

    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'cinepolisuth@gmail.com';                     //SMTP username
    $mail->Password   = 'Cinepolis@uth2022';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('cinepolisuth@gmail.com', 'Cinepolis@uth2022');
    $mail->addAddress($correo_);     //Add a recipient
    
    //Content
    
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $encabezado;
    $mail->Body    = $mensaje;
    $mail->CharSet = 'UTF-8';

    $mail->send();
    
    echo "<script> alert('Correo enviado exitosamente') </script>";    
} catch (Exception $e) {
    //echo "<script> alert('Correo no enviado: {$mail->ErrorInfo}') </script>";
    echo "<script> alert('error') </script>";  
}

?>
<?php

include('cn.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Variables Post
    $correo="sinle.lainez@gmail.com";
    //$correo= $_POST['correo'];
    $sq="SELECT * FROM usuarios WHERE mail = '$correo'";
    $pass="";
    $resultado = mysqli_query($conexion, $sq);
        
        while($row= mysqli_fetch_assoc($resultado))  {
              $pass=$row['password'];
        }

    


    $destinatario= "cr10madrid2010@gmail.com";
    $mensaje= "El SUPERMERCADO EL ECONOMICO le saluda y le agradece por su fidelidad, recibimos una solicitud para recuperar la contraseña, por lo que a continuacion se le adjunta: ".$pass; 
    $encabezado="Recuperar Contraseña -- SUPERMERCADO EL ECONOMICO";
    date_default_timezone_set('America/Los_Angeles');
   
    
    mysqli_close($conexion);

    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'supermercadoeconomicoapp@gmail.com';                     //SMTP username
    $mail->Password   = 'economico2021';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('supermercadoeconomicoapp@gmail.com', 'SUPERMERCADO EL ECONOMICO');
    $mail->addAddress($correo);     //Add a recipient
    
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
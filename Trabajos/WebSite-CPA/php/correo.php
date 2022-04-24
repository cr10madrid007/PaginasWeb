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
    $name = $_POST['nombre'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    $destinatario= "cr10madrid2010@gmail.com";
    $mensaje= $msg . "<br>Att: ". $name . ",<br> Celular: ". $tel. ",<br> Correo: ". $email; 
    $encabezado="Correo enviado desde el Sitio Web";
    date_default_timezone_set('America/Los_Angeles');
    $fecha= new DateTime();
    $fecha = $fecha->format('Y,m,d');
    $insertar= "INSERT INTO tcorreos (nombre, correo, telefono, asunto, fecha) VALUES ('$name', '$email', '$tel', '$msg', '$fecha')";
    $resultado= mysqli_query($conexion, $insertar);
    
    mysqli_close($conexion);

    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'cr10madrid2010@gmail.com';                     //SMTP username
    $mail->Password   = 'tiempo007';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('cr10madrid2010@gmail.com', 'CPA Painting - Services and More');
    $mail->addAddress('cr10madrid2010@gmail.com');     //Add a recipient
    
    //Content
    
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $encabezado;
    $mail->Body    = $mensaje;
    $mail->CharSet = 'UTF-8';

    $mail->send();
    echo "<script> setTimeout(\"location.href='../index.html'\",500) </script>";
    echo "<script> alert('Correo enviado exitosamente') </script>";    
} catch (Exception $e) {
    //echo "<script> alert('Correo no enviado: {$mail->ErrorInfo}') </script>";
    echo "<script> setTimeout(\"location.href='../index.html'\",1000) </script>";
}

?>
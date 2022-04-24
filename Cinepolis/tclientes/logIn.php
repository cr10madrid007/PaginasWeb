<?php
$correo=$_POST['email'];
$pass=$_POST['pass'];

try {
    $sentencia_select=$con->prepare("SELECT * FROM tclientes WHERE correo =:correo AND pass =:pass");
    $sentencia_select->execute(array(
        ':correo' =>$correo,
        ':pass' =>$pass
    ));

    $nr=$sentencia_select->rowCount();

    if (nr=="1") {
        echo "ok";
    } else {
        echo "NO";
    }
} catch (\Throwable $th) {
    echo "Error: $th";
}





?>
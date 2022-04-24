<?php
    include("cn.php");
    $estado="activo";
    $empleados = "SELECT * FROM templeados WHERE estado = 'activo'";

    $resultado = mysqli_query($conexion, $empleados);
                        
                        while($row= mysqli_fetch_assoc($resultado))  {
                        echo $row["nombre" ] ."<br/>";
                        
                        }
?>
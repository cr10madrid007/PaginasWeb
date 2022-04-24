<?php
include '../../../conexion.php';
session_start();
    if(isset($_SESSION['nombredelusuario'])){
        $nombredelusuario=$_SESSION['nombredelusuario'];

}else{
        header("location:../../logIn.php");
}

// Datos
if(isset($_POST['enviar'])){
                $id="";
                $nombre = $_POST['txtNombre'];
                $anio = $_POST['txtAnio'];
                $synopsis = $_POST['txtSynopsis'];
                $genero = $_POST['txtGenero'];
                $clasificacion = $_POST['txtClasificacion'];
                $duracion=$_POST['txtDuracion'];
                $director = $_POST['txtDirector'];
                $estreno = $_POST['txtEstreno']; 
                $cierre = $_POST['txtCierre']; 
                $hTres = $_POST['tres'];
                $hCinco = $_POST['cinco'];
                $hSiete = $_POST['siete'];
                $tegus = $_POST['teg'];
                $sps = $_POST['sps'];
                
                $imagen= $_FILES['btn_fFoto']['name'];
                $tipoImg = $_FILES['btn_fFoto']['type'];
                $tempImg = $_FILES['btn_fFoto']['tmp_name'];

                $video= $_FILES['btn_fVideo']['name'];
                $tipoVideo = $_FILES['btn_fVideo']['type'];
                $tempVideo = $_FILES['btn_fVideo']['tmp_name'];
   

                
                
                if(!((strpos($tipoImg,'png') || strpos($tipoImg,'jpeg') || strpos($tipoImg, 'webp')))){
                        echo "<script> alert('Solo se permiten los archivos de formato jpeg, png, webp') </script>";
                        
                }else if(!((strpos($tipoVideo,'mp4') || strpos($tipoVideo,'mov') || strpos($tipoVideo, 'wmv')))){
                        echo "<script> alert('Solo se permiten los archivos de formato MOV, MOV, WMV') </script>";
                        
                }else{
                        
                      
                     
                        try {
                                
                                $consulta_insert=$con->prepare('INSERT INTO tPelicula( nombre, anio, duracion, synopsis, genero, clasificacion, director) 
                                VALUES( :nombre, :anio, :duracion, :synopsis, :genero, :clasificacion, :director)');
				$consulta_insert->execute(array(
					':nombre' =>$nombre,
					':anio' =>$anio,
                                        ':duracion' =>$duracion,
					':synopsis' =>$synopsis,
					':genero' =>$genero,
					':clasificacion' =>$clasificacion,
					':director' =>$director
				));
                                
                                $sentencia_select=$con->prepare("SELECT  MAX(idPelicula) FROM tPelicula ");
                        
                        	$sentencia_select->execute();
                       		$nr=$sentencia_select->rowCount();
                        	$resultado=$sentencia_select->fetchAll();
                        	foreach($resultado as $fila):
                        
                                
                                	$id = $fila['MAX(idPelicula)'];

                        	endforeach;

                                move_uploaded_file($tempImg,"../../../multimedia/banner/banner$id.jpg");
                                move_uploaded_file($tempVideo,"../../../multimedia/video/video$id.mp4");

                                $consulta_insert=$con->prepare('INSERT INTO tmultimedia (idPelicula,banner,video) VALUES(:idPelicula,:banner,:video)');
				$consulta_insert->execute(array(
					':idPelicula' =>$id,
					':banner' =>"banner$id.jpg",
                                        ':video' =>"video$id.mp4"
				));
                                $consulta_insert=$con->prepare('INSERT INTO tFecha (idPelicula,fechaInicio,fechaFinal) VALUES(:idPelicula,:fechaInicio,:fechaFinal)');
				$consulta_insert->execute(array(
					':idPelicula' =>$id,
					':fechaInicio' =>$estreno,
                                        ':fechaFinal' =>$cierre
				));
                              
                                
                               
                                
                                         
                                if($hTres =='tres'){
                                        $consulta_insert=$con->prepare('INSERT INTO tHorario (idHora,Hora) VALUES(:idHora,:Hora)');
                                        $consulta_insert->execute(array(
                                                ':idHora' =>$id,
                                                ':Hora' =>"15:00"
                                        ));
                                }
                                
                                
                                if($hCinco=='cinco'){
                                        $consulta_insert=$con->prepare('INSERT INTO tHorario (idHora,Hora) VALUES(:idHora,:Hora)');
                                        $consulta_insert->execute(array(
                                                ':idHora' =>$id,
                                                ':Hora' =>"17:00"
                                        ));
                                }
                                
                                if($hSiete =='siete'){
                                        $consulta_insert=$con->prepare('INSERT INTO tHorario (idHora,Hora) VALUES(:idHora,:Hora)');
                                        $consulta_insert->execute(array(
                                                ':idHora' =>$id,
                                                ':Hora' =>"19:00"
                                        ));
                                }
                                
                                if($sps  =='sps'){
                                        $consulta_insert=$con->prepare('INSERT INTO tLugar (idLugar,lugar) VALUES(:idLugar,:lugar)');
                                        $consulta_insert->execute(array(
                                                ':idLugar' =>$id,
                                                ':lugar' =>"San Pedro Sula"
                                        ));
                                }
                                
                                if($tegus =='teg'){
                                        $consulta_insert=$con->prepare('INSERT INTO tLugar (idLugar,lugar) VALUES(:idLugar,:lugar)');
                                        $consulta_insert->execute(array(
                                                ':idLugar' =>$id,
                                                ':lugar' =>"Tegucigalpa"
                                        ));
                                }

                                header('location:../index.php');
        
                        } catch (Exception $ex) {
                                echo "Error: $ex";
                        }

                
                
                }
            

               
                




               
}

?>
<?php
	$database="sql5476194";
	$user='sql5476194';
	$password='Ea9CigRPsK';


try {
	
	$con=new PDO('mysql:host=sql5.freemysqlhosting.net:3306;dbname='.$database,$user,$password);
	
} catch (PDOException $e) {
	echo "Error".$e->getMessage();
}

?>
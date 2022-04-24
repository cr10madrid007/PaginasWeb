<?php
	$database="u601131939_cinepolis";
	$user='u601131939_root';
	$password='T[q9vxMbkD';
	$host='sql734.main-hosting.eu:3306';
	

try {
	
	$con=new PDO('mysql:host='.$host.';dbname='.$database,$user,$password);
	
} catch (PDOException $e) {
	echo "Error: ".$e->getMessage();
}

?>
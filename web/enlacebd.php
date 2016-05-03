<?php
	$host = 'ec2-54-225-102-235.compute-1.amazonaws.com';
 $dbname = 'db0iq2atr12u3q';
 $username = 'nxlaeioyrwqiqr';
 $password = 'Mv3CDNF4Eu3pHQdToGFZJl3Q6S';
  try {
$conn = new PDO('mysql:host='.$host .';dbname='.$dbname.'', $username, $password );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){

    echo "ERROR: " . $e->getMessage();

}

    



 $conexion = mysql_connect($host, $username, $password);
 mysql_select_db($dbname);
 mysql_query("SET NAMES 'utf8'");
?>
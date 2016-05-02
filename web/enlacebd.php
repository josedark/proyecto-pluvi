<?php
	$host = 'localhost';
 $dbname = 'precipitacion';
 $username = 'root';
 $password = '';
 $conexion = mysql_connect($host, $username, $password);
 mysql_select_db($dbname);
 mysql_query("SET NAMES 'utf8'");
?>
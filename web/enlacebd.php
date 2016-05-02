<?php
$host = 'mysql.hostinger.mx';
 $dbname = 'u310280763_p';
 $username = 'u310280763_root';
 $password = '123456789';
 $conexion = mysql_connect($host, $username, $password);
 mysql_select_db($dbname);
 mysql_query("SET NAMES 'utf8'");
?>
<?php
    
    
   	include("enlacebd.php");
    
	

  
    //$result = mysql_query("SELECT * FROM `mediciones`INNER JOIN municipios on mediciones.IdMuni=municipios.IdMuni
      //                     INNER  JOIN departamentos on mediciones.IdDepto=departamentos.IdDepto",$conexion);
   
 $stmt=$conn->prepare("SELECT * FROM mediciones ");
 $stmt->execute();

$i=0;
 phpinfo();



    
?>

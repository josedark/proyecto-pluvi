<?php
    
    
   	include("enlacebd.php");
    
	

  
    //$result = mysql_query("SELECT * FROM `mediciones`INNER JOIN municipios on mediciones.IdMuni=municipios.IdMuni
      //                     INNER  JOIN departamentos on mediciones.IdDepto=departamentos.IdDepto",$conexion);
   
 

$i=0;
try {
$stmt=$conn->prepare("SELECT * FROM mediciones ");
 $stmt->execute();
 echo json_encode($stmt);

}catch(PDOException $e){

    echo "ERROR: " . $e->getMessage();

}





    
?>

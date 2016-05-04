<?php
    
    
   	include("enlacebd.php");
    
	

  
    //$result = mysql_query("SELECT * FROM `mediciones`INNER JOIN municipios on mediciones.IdMuni=municipios.IdMuni
      //                     INNER  JOIN departamentos on mediciones.IdDepto=departamentos.IdDepto",$conexion);
   
 

$i=0;
try {
$stmt=$conn->prepare("SELECT * FROM mediciones INNER JOIN municipios on (mediciones.Idmuni=municipios.Idmuni) INNER  JOIN departamentos on (mediciones.Iddepto = departamentos.Iddepto);
");
 $stmt->execute();
 
$respuesta=null;
 
 
 while($fila = $stmt->fetch()){
  $IdMediciones =$fila[0];
        $FecMediciones =$fila[1];
        $ValMediciones =$fila[2];
        $IdDepto =$fila[3];
        $Municip= $fila[4];
        $DesUbi =$fila[5];
        $Latitud =$fila[6];
        $Longitud =$fila[7];

        $munici=utf8_encode($Municip);
        
        

        $respuesta->rows[$i]['cell']=array($IdMediciones,$FecMediciones,$ValMediciones,$IdDepto,$munici,$DesUbi,$Latitud ,$Latitud );
        $i++;
}

echo json_encode($respuesta);



}catch(PDOException $e){

    echo "ERROR: " . $e->getMessage();

}





    
?>

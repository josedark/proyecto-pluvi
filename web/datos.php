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
  $IdMediciones =$fila['IdMediciones'];
        $FecMediciones =$fila['FecMediciones'];
        $ValMediciones =$fila['ValMediciones'];
        $IdDepto =$fila['Departamento'];
        $Municip= $fila['nombreMunicipio'];
        $DesUbi =$fila['DesUbi'];
        $Latitud =$fila['Latitud'];
        $Longitud =$fila['Longitud'];

        $munici=utf8_encode($Municip);
        
        

        $respuesta->rows[$i]['cell']=array($IdMediciones,$FecMediciones,$ValMediciones,$IdDepto,$munici,$DesUbi,$Latitud ,$Latitud );
        $i++;
}

echo json_encode($respuesta);



}catch(PDOException $e){

    echo "ERROR: " . $e->getMessage();

}





    
?>

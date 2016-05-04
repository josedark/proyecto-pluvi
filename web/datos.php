<?php
    
    
   	include("enlacebd.php");
    
	

  
    //$result = mysql_query("SELECT * FROM `mediciones`INNER JOIN municipios on mediciones.IdMuni=municipios.IdMuni
      //                     INNER  JOIN departamentos on mediciones.IdDepto=departamentos.IdDepto",$conexion);
   
 $stmt=$conn->prepare("SELECT * FROM mediciones ");
 $stmt->execute();

$i=0;
$respuesta=null;

 

 while( $fila = $stmt->fetch() )
 {
        $IdMediciones =$fila['IdMediciones'];
        $FecMediciones =$fila['FecMediciones'];
        $ValMediciones =$fila['ValMediciones'];
        $IdDepto = "hola";  //$fila['Departamento'];
        $Municip="hola";    //$fila['nombreMunicipio'];
        $DesUbi ="hola";//$fila['DesUbi'];
        $Latitud = "hola";   //$fila['Latitud'];
        $Longitud = "hola"; //$fila['Longitud'];

        $munici=utf8_encode($Municip);
        echo ="hola";
        
        

        $respuesta->rows[$i]['cell']=array($IdMediciones,$FecMediciones,$ValMediciones,$IdDepto,$munici,$DesUbi,$Latitud ,$Latitud );
        $i++;




 }

   
   // while ($fila =mysql_fetch_array($result)) {
     //   $IdMediciones =$fila['IdMediciones'];
       // $FecMediciones =$fila['FecMediciones'];
       // $ValMediciones =$fila['ValMediciones'];
       // $IdDepto =$fila['Departamento'];
        //$IdMuni =$fila['Municipio'];
       // $DesUbi =$fila['DesUbi'];
       // $Latitud =$fila['Latitud'];
        //$Longitud =$fila['Longitud'];
       
        
        


       
       // $respuesta->rows[$i]['cell']=array($fila['N']=$IdMediciones,$fila["Fecha"]=$FecMediciones,$fila["Medida (ml)"]=$ValMediciones,$fila["Departamento"]=$IdDepto,$fila["Municipio"]=$IdMuni,$fila["Ubicación"]=$DesUbi,$fila["Latitud"]=$Latitud,$fila["Longitud"]=$Longitud);
       // $i++;
        

         
   // }

   

      
     echo json_encode($respuesta);



    
?>

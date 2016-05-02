<?php
    
    
   	include("enlacebd.php");
    
	

  
    $result = mysql_query("SELECT * FROM `mediciones`INNER JOIN municipios on mediciones.IdMuni=municipios.IdMuni
                           INNER  JOIN departamentos on mediciones.IdDepto=departamentos.IdDepto",$conexion);
   $i=0;



   
    while ($fila =mysql_fetch_array($result)) {
        $IdMediciones =$fila['IdMediciones'];
        $FecMediciones =$fila['FecMediciones'];
        $ValMediciones =$fila['ValMediciones'];
        $IdDepto =$fila['Departamento'];
        $IdMuni =$fila['Municipio'];
        $DesUbi =$fila['DesUbi'];
        $Latitud =$fila['Latitud'];
        $Longitud =$fila['Longitud'];
       
        
        


       
        $respuesta->rows[$i]['cell']=array($fila['N']=$IdMediciones,$fila["Fecha"]=$FecMediciones,$fila["Medida (ml)"]=$ValMediciones,$fila["Departamento"]=$IdDepto,$fila["Municipio"]=$IdMuni,$fila["Ubicación"]=$DesUbi,$fila["Latitud"]=$Latitud,$fila["Longitud"]=$Longitud);
        $i++;
        

         
    }



      
     echo json_encode($respuesta);



    
?>
<?php
	include("enlacebd.php");
	
 
       
       if (isset($_POST['FecMedicion'])and isset($_POST['ValMedicion'])and isset($_POST['selectordepartamentos'])and isset($_POST['selectormunicipios'])and isset($_POST['UbiMedicion']) and isset($_POST['LatMedicion'])and isset($_POST['LonMedicion']))
       {
       	 echo $_POST['FecMedicion']."-";
    echo $_POST['ValMedicion']."-";
        $a=$_POST['selectordepartamentos'];
        $b=$_POST['selectormunicipios'];
        echo $_POST['UbiMedicion']."-";
         echo $_POST['LatMedicion']."-";
        echo $_POST['LonMedicion']."-";
       echo $a."-";
       echo $b."-";
       $FecMediciones =$_POST['FecMedicion'];
        $ValMediciones =$_POST['ValMedicion'];
       
        $D =$_POST['UbiMedicion'];
        $Latitud =$_POST['LatMedicion'];
        $Longitud =$_POST['LonMedicion'];
        
      
       
        try {
        	
        	ini_set('display_errors', 1);
        	error_reporting(E_ALL);
        	
ini_set('display_startup_errors', 1);
$stmt=$conn->prepare("SELECT * FROM mediciones INNER JOIN municipios on (mediciones.Idmuni=municipios.Idmuni) INNER  JOIN departamentos on (mediciones.Iddepto = departamentos.Iddepto);
$stmt->execute();
$fila = $stmt->fetch();
echo json_encode($fila);

        	// phpinfo();
       // $stmt=$conn->prepare(' INSERT INTO mediciones (fecmediciones, valmediciones, iddepto, idmuni, desubi, latitud, longitud, idusuarios) VALUES ('$FecMediciones','$ValMediciones', '$a','$b','$D','$Latitud', '$Longitud', 1)');

       
       
      
      


}catch(PDOException $e){

    echo "ERROR: " . $e->getMessage();

}
       
       
       
       
       
       
       
       	
       }

	
	

	

?>

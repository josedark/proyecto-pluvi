<?php
	include("enlacebd.php");
	
 
       
       if (isset($_POST['FecMedicion'])and isset($_POST['ValMedicion'])and isset($_POST['selectordepartamentos'])and isset($_POST['selectormunicipios'])and isset($_POST['UbiMedicion']) and isset($_POST['LatMedicion'])and isset($_POST['LonMedicion']))
       {
       	 echo $_POST['FecMedicion'];
    echo $_POST['ValMedicion'];
        $a=$_POST['selectordepartamentos'];
        $b=$_POST['selectormunicipios'];
        echo $_POST['UbiMedicion'];
         echo $_POST['LatMedicion'];
        echo $_POST['LonMedicion'];
       echo $a[0];
       echo $b[1];
       
       $stmt=$conn->prepare(' INSERT INTO mediciones (fecmediciones, valmediciones, iddepto, idmuni, desUbi, latitud, longitud, idusuarios) VALUES ("'.$FecMediciones.'", '.$ValMediciones.', '.$departamento.', '.$municipio.', '.$DesUbi.', '.$Latitud.', '.$Longitud.', 1)');

          $count=$stmt->execute();
       
       
       
       
       
       	
       }

	
	

	

?>

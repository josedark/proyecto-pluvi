<?php
	include("enlacebd.php");
	
   session_start();


	
	

	if (isset($_POST['FecMedicion'])and isset($_POST['ValMedicion'])and isset($_POST['selectordepartamentos'])and isset($_POST['selectormunicipios'])and isset($_POST['UbiMedicion']) and isset($_POST['LatMedicion'])and isset($_POST['LonMedicion']))
    {
		//echo "(NULL, '2015-11-03', '23', '08', '801', 'jose', '23', '34', '1')";

       
        $FecMediciones =$_POST['FecMedicion'];
        $ValMediciones =$_POST['ValMedicion'];
        $IdDepto =$_POST['selectordepartamentos'];
        $IdMuni =$_POST['selectormunicipios'];
        $DesUbi =$_POST['UbiMedicion'];
        $Latitud =$_POST['LatMedicion'];
        $Longitud =$_POST['LonMedicion'];

   
        $departamento= $IdDepto [0];
        $municipio=$IdMuni[0] ;


         $stmt=$conn->prepare(' INSERT INTO mediciones (idmediciones, fecmediciones, valMediciones, iddepto, idmuni, desUbi, latitud, longitud, idUsuarios) VALUES (NULL,"'.$FecMediciones.'", '.$ValMediciones.', '.$departamento.', '.$municipio.', '.$DesUbi.', '.$Latitud.', '.$Longitud.', 1)');

          $count=$stmt->execute();
          
		if ($count==1) {
			$_SESSION['r']=" el  proceso  fue exitosamnete .................................";
			header('Location: /index.php');

			
		

		} else {
			$_SESSION['r']= " error" ;
			header('Location: /index.php');
			
			
		
		}
		
      


	}
	else
	{
       
      $_SESSION['resultado']="error";
      header('Location: /index.php');
     
		
		
	}
	

?>

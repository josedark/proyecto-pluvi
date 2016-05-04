<?php
	include("enlacebd.php");
	
 echo $_POST['FecMedicion'];
    echo $_POST['ValMedicion'];
        $a=$_POST['selectordepartamentos'];
        $b=$_POST['selectormunicipios'];
        echo $_POST['UbiMedicion'];
         echo $_POST['LatMedicion'];
        echo $_POST['LonMedicion'];
       echo $a[0];
       echo $b[1];
       
       if (isset($_POST['FecMedicion']))
       {
       	 echo "aqio";
       	
       }

	
	

	

?>

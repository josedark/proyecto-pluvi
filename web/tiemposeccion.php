<?php

if (isset($_SESSION['usuario'])) {

	$fechaGuardada = $_SESSION["ultimoAcceso"];  
    $ahora = time();  
    $tiempo_transcurrido = $ahora-$fechaGuardada;
    $tiempo=61;
    if ($tiempo_transcurrido>=$tiempo) {

        unset($_SESSION["correoUsuario"]);
       	unset($_SESSION["usuario"]);
       	unset( $_SESSION["ultimoAcceso"]);
      	$_SESSION['t']="error por tiempo ";
    	header('Location: /index.php');
    	
    }
    else
    {
     
     $_SESSION["ultimoAcceso"]=time();
     echo $tiempo_transcurrido;



   

  




                                    

    }



	
}
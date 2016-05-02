<?php
include("enlacebd.php");	


if (Isset ($_POST['CorreoUsuario2']) &&
	Isset ($_POST['ContraseñaAnterior'])&& 
	Isset ($_POST['NuevaContrase']))
{
$correo= $_POST['CorreoUsuario2'];
$p1=sha1($_POST['ContraseñaAnterior']);
$PasAnt=crypt($_POST['ContraseñaAnterior'],$p1);
$p2=sha1($_POST['NuevaContrase']);
$PasNue=crypt($_POST['NuevaContrase'],$p2);

 $result = mysql_query("SELECT * FROM usuarios WHERE CorreoUsuarios = '$correo' AND PasUsuarios = '$PasAnt'",$conexion);
 if ($fila=mysql_fetch_array($result)) 
       {
       	  
       	 $actualizar = mysql_query("UPDATE usuarios SET PasUsuarios = '$PasNue' WHERE CorreoUsuarios = '$correo'",$conexion);
         $_SESSION['a']=" proceso  de cambio de contraseña completamente ";
         header('Location: /index.php');
     
       	 

       } else
       {
         
         $_SESSION['act']="contraseña incorrectamente...........";

         header('Location: /index.php');



       }


	
}

?>
<?php
include("enlacebd.php");

session_start();

If(Isset ($_POST['CorreoUsuario3'])&& !empty($_POST['CorreoUsuario3']) && Isset ($_POST['PasUsuario'])&& !empty($_POST['PasUsuario']))
	{
       $p1=sha1($_POST['PasUsuario']);
       $p2=crypt($_POST['PasUsuario'],$p1);
       $usuario = $_POST['CorreoUsuario3'];

       $result = mysql_query("SELECT * FROM usuarios WHERE CorreoUsuarios = '$usuario' AND PasUsuarios = '$p2'",$conexion);

       if ($fila=mysql_fetch_array($result)) 
       {
       	  
       	 $_SESSION['usuario']=$fila['NRUsuarios'];
         $_SESSION["correoUsuario"]=$usuario;
         $_SESSION["ultimoAcceso"]=time();
         $_SESSION['ru']=" bienvenido  al sistema ......... ";
         header('Location: /index.php');
     
       	 

       } else
       {
         unset($_SESSION["correoUsuario"]);
         unset($_SESSION["usuario"]);
         unset( $_SESSION["ultimoAcceso"]);
         $_SESSION['ru']="Error en la autentificacion".mysql_error();

         header('Location: /index.php');



       }


	}
	
	
	
?>
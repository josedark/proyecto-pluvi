<?php
	include("enlacebd.php");
	
	
	if (Isset ($_POST['NRUsuario'])&& !empty($_POST['NRUsuario']) &&
	Isset ($_POST['CorreoUsuario'])&& !empty($_POST['CorreoUsuario']) &&
	Isset ($_POST['PasUsuarioRegistro'])&& !empty($_POST['PasUsuarioRegistro']) &&
	Isset ($_POST['PasUsuarioRegistro_Confirm'])&& !empty($_POST['PasUsuarioRegistro_Confirm']))
	{
		$p1=sha1($_POST['PasUsuarioRegistro']);
		$p2=sha1($_POST['PasUsuarioRegistro_Confirm']);
		$p3=crypt($_POST['PasUsuarioRegistro'],$p1);
		$p4=crypt($_POST['PasUsuarioRegistro_Confirm'],$p2);
        $emp=$_POST['InstUsuario'];

		If($p3==$p4)
		{
		$tipoUsu=1;
		
		 
		mysql_query("INSERT INTO usuarios (NRUsuarios,CorreoUsuarios,PasUsuarios,InstUsuarios,IdTipos) VALUES('$_POST[NRUsuario]','$_POST[CorreoUsuario]','$p3','$emp','$tipoUsu')",$conexion);
		
		$_SESSION['re']="Usuario creado exitosamente... Ya puede iniciar sesión";
			header('Location: /index.php');

		} 
		else
		{
			
			$_SESSION['re']="Contraseñas no coinciden...";
			header('Location: /index.php');
	
		
            }	
	}
	else
	{
		

		$_SESSION['re']="Problemas al registrar al usuario..";
			header('Location: /index.php');
		}
	
          

?>
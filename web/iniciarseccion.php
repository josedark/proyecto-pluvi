<?php
include("enlacebd.php");

session_start();

If(Isset ($_POST['CorreoUsuario3'])&& !empty($_POST['CorreoUsuario3']) && Isset ($_POST['PasUsuario'])&& !empty($_POST['PasUsuario']))
	{
       $p1=sha1($_POST['PasUsuario']);
       $p2=crypt($_POST['PasUsuario'],$p1);
       $usuario = $_POST['CorreoUsuario3'];
       $st=$conn->prepare('SELECT * FROM usuarios WHERE CorreoUsuarios = "'.$usuario.'" AND PasUsuarios = "'.$p2.'"');

       $count=$st->execute();
      

       if ( !$row=$st->fetch()) 
        
       {   
       	  
       	 //$_SESSION['usuario']=$fila['NRUsuarios'];
         //$_SESSION["correoUsuario"]=$usuario;
         //$_SESSION["ultimoAcceso"]=time();
         $_SESSION['ru']=" bienvenido  al sistema ......... ".$row['NRUsuarios'];
         header('Location: /index.php');
     
       	 

       } else
       {
         unset($_SESSION["correoUsuario"]);
         unset($_SESSION["usuario"]);
         unset( $_SESSION["ultimoAcceso"]);
         $_SESSION['ru']="Error en la autentificacion";

         header('Location: /index.php');



       }


	}
	
	
	
?>
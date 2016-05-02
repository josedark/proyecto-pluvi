<?php 
     include("enlacebd.php");
   
    
if(isset($_POST["correo"]))
{


            $correo=$_POST["correo"];

            function contraseña($length = 8)
			{
            $contra = md5(uniqid(rand(), true));
 			if ($length != "") return substr($contra, 0, $length);
  			else return $contra;
			}
			$PasN=contraseña();
			$p1=sha1($PasN);
			$PasNue=crypt($PasN,$p1);

			$actualizar = mysql_query("UPDATE usuarios SET PasUsuarios = '$PasNue' WHERE CorreoUsuarios = '$correo'",$conexion);			
			
			
           // echo $correo;
			//echo '<label  style="color:green;" for="CorreoUsuario2" > El Correo de usuario existe --></label>';
			echo '<script type="text/javascript">
                                       $(document).ready(function() {

                                       	
                                       	$("#nuevoC").css("display", "block");
                                       	$("#cambiaC").css("display", "none");
                                        $( "#CorreoUsuario2" ).prop( "disabled", true );
                                       	$( "#ContraseñaAnterior" ).prop( "type", "text" );
                                       	$( "#ContraseñaAnterior" ).val("'.$PasNue.'") ;
                                       	$( "#ContraseñaAnterior" ).prop( "disabled", true );
                                       	$( "#NuevaContrase" ).prop( "type", "text" );
                                       	$( "#NuevaContrase" ).val("'.$PasNue.'") ;
                                       	$( "#NuevaContrase" ).prop( "disabled", true );

                                        });
                                      
                                       </script>



			';
			
			
  }




 ?>
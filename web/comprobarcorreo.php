<?php 

include("enlacebd.php");
$user = $_POST['b'];
if(!empty($user))

 {
            $result = mysql_query("SELECT * FROM usuarios WHERE CorreoUsuarios = '".$user."'",$conexion);
             
            if ($fila=mysql_fetch_array($result))
            	{

            		 //echo '<span style="font-weight:bold;color:green;">Disponible '.$user.'</span>';
            		echo '<div class ="info"><label  style="color:green;" for="CorreoUsuario2" > El Correo de usuario existe -->'.$user.' </label></div>
                        <script type="text/javascript">
                                       $(document).ready(function() {
                                       
                                        
                                      setTimeout(function() {
                                      $(".info").fadeOut(1500);

                                      },3000);
                                            });
                                       </script>';

                  
            	}else
            	{
                
                 //echo '<span style="font-weight:bold;color:red;">'.$user.'El nombre de usuario o  usuario no existe.</span>';
            		echo '<div class ="error"> <label   style="color:red;" for="CorreoUsuario2" > El Correo de usuario  no existe-->.'.$user.' </label></div>  <script type="text/javascript">
                                       $(document).ready(function() {

                                        $("#registrousuario" ).prop( "disabled", false );
                                      setTimeout(function() {
                                      $(".error").fadeOut(1500);
                                      },3000);
                                            });
                                       </script>'  ;


            	}
             
           
      }














 ?>
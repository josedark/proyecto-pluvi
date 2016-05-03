



<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>lluviaentegucigalpa</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/alert.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/mediaqueries.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" media="screen" href="css/flick/jquery-ui-1.8.16.custom.css" />
<link rel="stylesheet" type="text/css" media="screen" href="jqgrid/css/ui.jqgrid.css" />
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js" type="text/javascript"></script>     
<script src="jqgrid/js/i18n/grid.locale-es.js" type="text/javascript"></script>
<script src="jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>


<style type='text/css' title='geratedcsss'>
body{  background-image:url("img/body-bg.png"); background-color:rgb(225, 225, 225); color:rgb(106, 106, 106);}nav{background-color:rgba(0, 0, 0, 0);}#header{background-color:rgba(0, 0, 0, 0);}#footer{background-color:rgb(112, 116, 122);}#container{background-color:rgba(0, 0, 0, 0);}h2,h3,h4,h5{color:rgb(106, 98, 87);}#logo{
	color: rgb(88, 88, 88);
	font-family: Tinos, serif, Arial, Helvetica, sans-serif;
}
</style>
</head>
<body>





<div class="bg">
		<div class="pageWidth clearfix"><!-- Start Header-->
				<header id="header" class="clearfix">
						<h1 id="logo">Lluvia en Tegucigalpa</h1>
								<nav id="navigation" class="clearfix">


								<ul><li class="active"><a href="#page0" title="Inicio">Inicio</a></li><li class=""><a href="#page1" title="Consulta de datos">Consulta de datos</a></li><li class=""><a href="#page2" title="Ingreso de datos">Ingreso de datos</a></li><li class=""><a href="#page3" title="Inicio de sesión">Inicio de sesión</a></li><li class=""><a href="#page4" title="Actualidad">Actualidad</a></li>
                                <ul>
                                <li><label for="NomIniciado" class="Usuario" data-icon="u"> Iniciaste sesión como: </label>

                                <?php 
                                session_start();
                                include("tiemposeccion.php");
                                if (isset($_SESSION['usuario']))
                                {
                                   echo '<input id="Valido" name="Valido" required type="text" value="'.$_SESSION['usuario'].'" readonly  disabled="">';
                                }
                                else
                                {
                                    echo '<input id="Valido" name="Valido" required type="text" value="$Log " readonly  disabled="">';

                                }


                                 ?>
                                




                                </li>
                                </ul> 
                                </ul>
						</nav>
						
				</header>
				
				
				<div class="contantArea">


						<section id="container">

                               <div id="banner"><ul><li><img src="img/banner-img.jpg" alt=""></li></ul></div>

								<article class="pageControl"><div class="pageContainer" id="home" style="display: block;">


                             <?php 

                             
                             if (isset($_SESSION['r']))

                             {
                                 echo '<script type="text/javascript">
                                       $(document).ready(function() {
                                      setTimeout(function() {
                                      $(".success").fadeOut(1500);
                                      },3000);
                                            });
                                       </script>';
                                       echo ' <div class="success">'.$_SESSION['r'].'</div>';
                                    unset($_SESSION['r']);

                             }

                              if (isset($_SESSION['ru']))

                             {
                                 echo '<script type="text/javascript">
                                       $(document).ready(function() {
                                      setTimeout(function() {
                                      $(".success").fadeOut(1500);
                                      },3000);
                                            });
                                       </script>';
                                       echo ' <div class="success">'.$_SESSION['ru'].'</div>';
                                    unset($_SESSION['ru']);

                             }

                             if (isset($_SESSION['t']))

                             {
                                 echo '<script type="text/javascript">
                                       $(document).ready(function() {
                                      setTimeout(function() {
                                      $(".success").fadeOut(1500);
                                      },3000);
                                            });
                                       </script>';
                                       echo ' <div class="success">'.$_SESSION['t'].'</div>';
                                    unset($_SESSION['t']);

                             }


                              if (isset($_SESSION['a']))

                             {
                                 echo '<script type="text/javascript">
                                       $(document).ready(function() {
                                      setTimeout(function() {
                                      $(".success").fadeOut(1500);
                                      },3000);
                                            });
                                       </script>';
                                       echo ' <div class="success">'.$_SESSION['a'].'</div>';
                                    unset($_SESSION['a']);

                             }

                              if (isset($_SESSION['re']))

                             {
                                 echo '<script type="text/javascript">
                                       $(document).ready(function() {
                                      setTimeout(function() {
                                      $(".success").fadeOut(1500);
                                      },3000);
                                            });
                                       </script>';
                                       echo ' <div class="success">'.$_SESSION['re'].'</div>';
                                    unset($_SESSION['re']);

                             }
                            


                              ?>

                               
                             

                                
                                <h2>Acerca del proyecto</h2>
<p>Honduras en general es un país en el que la información es un privilegio al que no todas las personas pueden acceder, ya sea porque no cuenta con la colaboración de las personas adecuadas o no tiene la capacidad económica para pagar los precios que se cobran en las instituciones públicas por dicha información.
En el caso específico de la precipitación de agua lluvia en la ciudad de Tegucigalpa, esta información es manejada por dos instituciones, Copeco y Meteorología, en el caso de Copeco tiene una dependencia directa de la última, y la cual vende dicha información a cualquier civil que intente tener acceso a ella, y en Copeco menciona la persona encargada de dicha información que tienen que esperar en ocasiones hasta 20 días para poder suministrarla a las personas que la solicitan, dependiendo de la carga laboral que estos tengan según la época del año.
Es por esa razón que un portal web que le permita a los civiles tener acceso a esta información de forma gratuita y actualizada, facilitaría el trabajo de muchas personas como ser ingenieros civiles, arquitectos, agricultores, estudiantes y personas en general, y a su vez podría disminuir las horas de trabajo y los gastos innecesarios en los proyectos.
Con lo anterior profesionales como ingenieros civiles y arquitectos podrán emplear tanto tiempo como dinero en otros aspectos de sus proyectos, estudiantes realizarían sus proyectos sin necesidad de invertir en documentos que solo emplearan en pocas ocasiones, los agricultores de las zonas cercanas podrán consultar las fechas promedio de mayor precipitación para realizar sus cultivos, y las personas en general podrán determinar zonas donde poner cosechadoras de agua, que minimicen la necesidad de este vital líquido.
</p></div>
		




<!--consultar  datos ............................................................................................................ -->



        <div class="pageContainer" style="display: none;"><h2>Consulta de datos recopilados</h2>
<p>Puedes consultar la información almacenada, y recopilada por los cooperantes</p>
 
 

 <script type="text/javascript">
     $(document).ready(function(){

           
           jQuery("#medicion").jqGrid({
                    url:'datos.php',
                    datatype: 'json',
                    mtype: 'POST',
                    colNames:['N','Fecha', 'Medida (ml)','Departamento','Municipio','DesUbi','Latitud','Longitud'],
                    colModel:[
                        {name:'N', index:'IdMediciones', width:50, resizable:false, align:"center"},
                        {name:'Fecha', index:'FecMediciones', width:100,resizable:false, sortable:true},
                        {name:'Medida (ml)', index:'ValMediciones', width:100,},
                        {name:'Departamento', index:'Departamento', width:150,sortable:true},
						{name:'Municipio', index:'Municipio', width:150,sortable:true},
						{name:'Ubicación', index:'DesUbi', width:170},
                        {name:'Latitud', index:'Latitud', width:120},
						{name:'Longitud', index:'Longitud', width:120}
                    ],
                    pager: '#paginacion',
                    rowNum:10,
                    rowList:[10,15,20,35,40,100,500,1000,2000],
                    sortname: 'idMediciones',
                    sortorder: 'asc',
                    viewrecords: true,
                    caption: 'Precipitaciones'
                }); 
            


                
            });

        
         
        
        </script>




<table id="medicion"></table>
<div id="paginacion"> </div>
</p>
</div>

 <?php 

 include_once("enlacebd.php") 

 ?>
<!--............ ................................................................................................................-->
<!--Ingreso  de datos .......................................................................................................-->

<div class="pageContainer" style="display: none; font-family: Arial, Helvetica, sans-serif;"><h2>Ingresar datos recopilados</h2>
<p>Favor ingresar los valores en mililitros.
</p>
<script type="text/javascript">
function validar()
{
indicede = document.getElementById("de").selectedIndex;
indicemuni = document.getElementById("muni").selectedIndex;
if( indicede == null || indicede == 0 ) {

    alert("seleccion un Departamento");
  return false;
}
if( indicemuni == null || indicemuni == 0 ) {

    alert("seleccion un Municipio");
  return false;
}

}


</script>
 




<form action="insertarMedicion.php" method="post" onsubmit="return validar()" >
<table width="600" border ="0">
<tr>
<td><label for="FecMedicion" class="fecha-dato" data-icon="r">Fecha en que se recopiló la información:</label></td>
<td><input id="FecMedicion" name="FecMedicion" required type="date"  ></td>
</tr>
<tr>
<td><label for="ValMedicion" class="valor" data-icon="v">Valor obtenido de la medición(ml):</label></td>
<td><input id="ValMedicion" name="ValMedicion" required type="number" step="any" min="0" placeholder="Ejemplo:100.00"></td>
</tr>
<tr>
<td><label for="DepMedicion" class="depto" data-icon="d">Departamento donde se obtuvo la medición:</label></td>
<td>
<SELECT name="selectordepartamentos[]" required  id="de"  >
<option selected value="-1">Seleccione una Opción...</option>
<?php
 $stmt=$conn->prepare( "SELECT * FROM departamentos");
 $stmt->execute();

while( $row = $stmt->fetch())
{
echo'<OPTION VALUE="'.$row['IdDepto'].'">'.$row['Departamento'].'</OPTION>';
} 
?>
</SELECT>
</td>
</tr>
<tr>
<td><label for="MunMedicion" class="valor" data-icon="m">Municipio donde se obtuvo la medición:</label></td>
<td>
 <SELECT name="selectormunicipios[]" id="muni"  required >
<option selected value="-1">Seleccione una Opción...</option>
<?php
 $stmt=$conn->prepare( "SELECT * FROM municipios ");
 $stmt->execute();

while($row = $stmt->fetch())
{
echo'<OPTION VALUE="'.$row['IdMuni'].'">'.utf8_encode($row['nombreMunicipio']).'</OPTION>';
} 
?>
</SELECT>





</td>
</tr>
<tr>
<td><label for="UbiMedicion" class="Ubicacion" data-icon="u">Ubicación del pluviómetro:</label></td>
<td><input id="UbiMedicion" name="UbiMedicion" required type="text" placeholder="Ejemplo:Barrio Villa Adela"></td>
</tr>
<tr>
<td><label for="LatMedicion" class="Latitud" data-icon="l">Latitud:</label></td>
<td><input id="LatMedicion" name="LatMedicion" required type="number" step="any" min="-90" max="90" placeholder="Ejemplo:14.0000"></td>
</tr>
<tr>
<td><label for="LonMedicion" class="Longitud" data-icon="x">Longitud:</label></td>
<td><input id="LonMedicion" name="LonMedicion" required type="number" step="any" min="-90" max="90"placeholder="Ejemplo:-87.0000"></td>
</tr>
<td>


<input name="enviar" type="submit" value="Registrar Datos" ></td>
</tr>
</table>
</form>
</div>

<!--............ ................................................................................................................-->

<!--............ ................................................................................................................-->




<div href="#page3" class="pageContainer" style="display: none;"><h2>Inicio de Sesión</h2>
<p>
<form action="iniciarseccion.php" method="post" name="validar-form" class="noAutoComplete">
<label for="CorreoUsuario3" class="correo" data-icon="c"> Correo Electronico </label> 
<input id="CorreoUsuario3" class="noAutoComplete" name="CorreoUsuario3" required type="email" placeholder="Ejemplo: JIlorante@gmail.com">
<label for="PasUsuario" class="Password" data-icon="p"> Contraseña </label>
<input id="PasUsuario" class="noAutoComplete" name="PasUsuario" required type="password" placeholder="Ejemplo: X8df!90EO">


<input type="submit" value="Ingresar">

</form>
</p>
<h2>Recuperar o Cambiar Contraseña</h2>
<p>

<script type="text/javascript">

$(document).ready(function(){
                         
      var consulta;
             
      //hacemos focus
      $("#CorreoUsuario2").focus();
                                                 
      
      $("#CorreoUsuario2").keyup(function(e){ 
             consulta = $("#CorreoUsuario2").val();
             $("#resultado").delay(1000).queue(function(n) {      
                                           
                  $("#resultado").html('<img src="ajax-loader.gif" />');
                                           
                        $.ajax({
                              type: "POST",
                              url: "comprobar.php",
                              data: "b="+consulta,
                              dataType: "html",
                              error: function(){
                                    alert("error petición ajax");
                              },
                              success: function(data){                                                      
                                    $("#resultado").html(data);
                                    n();
                              }
                  });
                                           
             });
                                
      });
                          
});


</script>
<script type="text/javascript">

$(document).ready(function(){
                         
      var consulta;
             
     
      $("#CorreoUsuario").focus();
                                                 
      
      $("#CorreoUsuario").keyup(function(e){ 
             consulta = $("#CorreoUsuario").val();
             $("#resultado3").delay(1000).queue(function(n) {      
                                           
                  $("#resultado3").html('<img src="ajax-loader.gif" />');
                                           
                        $.ajax({
                              type: "POST",
                              url: "comprobarcorreo.php",
                              data: "b="+consulta,
                              dataType: "html",
                              error: function(){
                                    alert("error petición ajax");
                              },
                              success: function(data){                                                      
                                    $("#resultado3").html(data);
                                    n();
                              }
                  });
                                           
             });
                                
      });
                          
});


</script>






















<script type="text/javascript">

$(document).ready(function(){
                         
      var consulta;

       consulta = $("#CorreoUsuario2").val();
       $('.noAutoComplete').attr('autocomplete', 'off');

  


             
  $( "#recuperar" ).click(function() {
  
  consulta = $("#CorreoUsuario2").val();

    $.ajax({
                              type: "POST",
                              url: "recuperar.php",
                              data: "correo="+consulta,
                              dataType: "html",
                              error: function(){
                                    alert("error petición ajax");
                              },
                              success: function(data){                                                      
                                    $("#resultado2").html(data);
                                   
                                        
                                   
                              }
                  });





   });




   $( "#nuevoC" ).click(function() {
  
    $("#CorreoUsuario2").val("");
    $("#nuevoC").css("display", " none");
    $("#cambiaC").css("display", "block");
    $( "#CorreoUsuario2" ).prop( "disabled", false );
    $( "#ContraseñaAnterior" ).prop( "type", "password" );
    $( "#ContraseñaAnterior" ).val("") ;
    $( "#ContraseñaAnterior" ).prop( "disabled", false );
    $( "#NuevaContrase" ).prop( "type", "password" );
    $( "#NuevaContrase" ).val("") ;
    $( "#NuevaContrase" ).prop( "disabled", false );

   





   });
      
                                           
                       
                                           
             });
                                
      


</script>



<form action="Cambiar.php" method="post" name="cambiar-form" autocomplete="off">

<table width="400" border ="0">

<tr>
  <div id="resultado"></div> 
  <div id="resultado2"></div> 


</tr>
<tr>
  <td> <label for="CorreoUsuario2" class="correo" data-icon="c"> Correo electronico </label> </td>
  <td>  <input id="CorreoUsuario2"  class="noAutoComplete" name="CorreoUsuario2" required type="email" placeholder="Ejemplo: JIlorante@gmail.com" autocomplete="off"  ></td>
     <td> <input type="button" value="recuperar "  id="recuperar" disabled > </input></td>
</tr>
 <tr>
   <td> <label for="ContraseñaAnterior" class="Password" data-icon="p"     >Constraseña Actual</label></td>
   <td><input id="ContraseñaAnterior" class="noAutoComplete llenar " name="ContraseñaAnterior" required type="password" placeholder="Ejemplo: X8df!90EO"   autocomplete="off" >   </td>

 </tr>
          
<tr>
<td><label for="NuevaContraseña" class="Password" data-icon="p"    >Nueva Contraseña </label></td>
<td><input id="NuevaContrase" class="noAutoComplete llenar" name="NuevaContrase" required type="password" placeholder="Ejemplo: X8df!90EO" autocomplete="off"   ></td>

<td> <input    style='display:none;' type="button" value="Nuevo  correo  "  id="nuevoC"  > </input></td>
</tr>
 <tr>
   
   <td> <input   style='display:block;' type="submit" value="Cambiar contraseña" id="cambiaC" disabled > </td>
   
  

 </tr>
                   
</table>
</form>


<h2>Registrar un nuevo usuario</h2>
<p>
<form action="registro.php" method="post" name="registro-form">
<table width="400" border ="0">
<tr>
  
  <div id="resultado3"></div> 


</tr>

<tr>
<td><label for="NRUsuario" class="RealUsuario" data-icon="r">Nombre Completo</label></td>
<td><input id="NRUsuario"  class="noAutoComplete "  name="NRUsuario" required type="text" placeholder="Ejemplo: Juan Manuel Ilorante Mejia"></td>
</tr>
<tr>
<td><label for="CorreoUsuario" class="correo" data-icon="c">Correo electronico</label></td>
<td><input id="CorreoUsuario"  class="noAutoComplete " name="CorreoUsuario" required type="email" placeholder="JIlorante@gmail.com"></td>
</tr>
<tr>
<td><label for="PasUsuarioRegistro" class="Password" data-icon="p">Constraseña </label></td>
<td><input id="PasUsuarioRegistro" class="noAutoComplete " name="PasUsuarioRegistro" required type="password" placeholder="Ejemplo: X8df!90EO"></td>
</tr>
<tr>
<td><label for="PasUsuarioRegistro_Confirm" class="Password" data-icon="p">Confirmar la Contraseña </label></td>
<td><input id="PasUsuarioRegistro_Confirm" class="noAutoComplete " name="PasUsuarioRegistro_Confirm" required type="password" placeholder="Ejemplo: X8df!90EO"></td>
</tr>
<tr>
<td><label for="InstUsuario" class="Institucion" data-icon="i">Institución que representa</label></td>
<td><input id="InstUsuario" class="noAutoComplete " name="InstUsuario" type="text" placeholder="Ejemplo: UJCV"></td>
</tr>
<tr>
<td><input id ="registrousuario" type="submit" value="Registrar" disabled ></td>
</tr>
</table>
</form>
</p></div
><div id="page4" class="pageContainer" style="display: none;"><h2>Sitios de las instituciones a fines</h2>
<p>
<table>
<tr>
<td><a href="http://www.smn.gob.hn/" target="_blank">Servicio de Metereologia Nacional (SMN)</a><td>
</tr>
<tr>
<td><a href="http://copeco.gob.hn/" target="_blank">Comite Permanente de Contingencias (Copeco)</a></td>
</tr>
<tr>
<td><a href="http://cambioclimaticohn.org/" target="_blank">Dirección Nacional de Cambio Climatico</a></td>
</tr>
</table>
</p>

<h2>Actualidad ambiental</h2>
<p>
Noticias sobre la actualidad del clima en Tegucigalpa, sobre el medio ambiente en general, curiosidades y trucos
</p>
<p>
<iframe class="youtube-player" type="text/html" width="480" height="360" src="http://www.youtube.com/embed/AWhXZIuuMHg" frameborder="0"></iframe>
</p></div></article>
						</section>
				</div>
				
				<!-- Start Footer-->
				<footer id="footer">
             <?php 
              if (isset($_SESSION['usuario']))
                                {
                                   echo '<a href="index.php" title="Inicio">  tu  cuenta es ('.$_SESSION["correoUsuario"].')</a>';
                                }


              ?>
						<div class="copyRight">© Copyright 2015</div>
				</footer>
				<!-- END Footer--> 
		</div>
</div>
</body>
</html>

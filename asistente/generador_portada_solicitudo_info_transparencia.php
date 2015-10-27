<?php

require_once "common.php";

html_header("Generador portada Solicitud de Informaci&oacute;n Ley de Transparencia");

/*
* FUNCION MENUFORMULARIO($STRING,$ARRAY)
* ESTA FUNCION CREA FORMULARIOS CON UN TITULO $STRING
* Y OPCIONES SEGUN UN INDICE ASOCIATIVO $ARRAY.
* $ARRAY TIENE LA FORMA OPCION=>URL.
*/

function menuFormulario($titulo,$opciones) {
$opc=array();
$url=array();
if ($opciones!=array()) foreach($opciones as $k => $v) {$opc[]=$k; $url[]=$v;}
for($i=0;$i<6;$i++) {$opc[]=""; $url[]="";}
echo "<table class='tabla'>
<tr>
 <th>T&iacute;tulo:</th> <th colspan=3><input type='text' name='titulo[]' value='$titulo' size='60'/></th>
</tr>
<tr>
 <td>Opci&oacute;n 1:</td> <td><input type='text' name='opcion1[]' value='".$opc[0]."' size='30'/></td>
 <td>Enlace:</td> <td><input type='text' name='url1[]' value='".$url[0]."' size='30'/></td>
</tr>
<tr>
 <td>Opci&oacute;n 2:</td> <td><input type='text' name='opcion2[]' value='".$opc[1]."' size='30'/></td>
 <td>Enlace:</td> <td><input type='text' name='url2[]' value='".$url[1]."' size='30'/></td>
</tr>
<tr>
 <td>Opci&oacute;n 3:</td> <td><input type='text' name='opcion3[]' value='".$opc[2]."' size='30'/></td>
 <td>Enlace:</td> <td><input type='text' name='url3[]' value='".$url[2]."' size='30'/></td>
</tr>
<tr>
 <td>Opci&oacute;n 4:</td> <td><input type='text' name='opcion4[]' value='".$opc[3]."' size='30'/></td>
 <td>Enlace:</td> <td><input type='text' name='url4[]' value='".$url[3]."' size='30'/></td>
</tr>
<tr>
 <td>Opci&oacute;n 5:</td> <td><input type='text' name='opcion5[]' value='".$opc[4]."' size='30'/></td>
 <td>Enlace:</td> <td><input type='text' name='url5[]' value='".$url[4]."' size='30'/></td>
</tr>
<tr>
 <td>Opci&oacute;n 6:</td> <td><input type='text' name='opcion6[]' value='".$opc[5]."' size='30'/></td>
 <td>Enlace:</td> <td><input type='text' name='url6[]' value='".$url[5]."' size='30'/></td>
</tr>
</table>   <br/><br/>
";
}

/* Los checkbox anterior
foreach($_POST as $x => $y) {
  echo "<input type='hidden' name='$x' value='$y' />\n";
}*/


if ($para_mes<10) $para_mes="0$para_mes";


?>


<table border=0>
<tr>
 <td valign="middle">
		La siguiente planilla permite elaborar un sub  sitio que dispondr&aacute; de informaci&oacute;n necesaria 
		para realizar una Solicitud  de Acceso a la Informaci&oacute;n P&uacute;blica, debiendo contener los formularios 
		para realizar solicitudes de acceso a la informaci&oacute;n, por v&iacute;a electr&oacute;nica o material 
		(formulario descargable); asimismo deber&aacute; publicar informaci&oacute;n sobre los canales o v&iacute;as formales 
		de ingreso y recepci&oacute;n de solicitudes de acceso a la informaci&oacute;n las cuales deber&aacute;n ser definidas 
		por la propia instituci&oacute;n; y publicar tutoriales sobre el Derecho de Acceso a la Informaci&oacute;n P&uacute;blica 
		sea este diseñado por la propia instituci&oacute;n o enlazando al pre definido, consistente en la p&aacute;gina de 
		Educa Transparencia del Consejo para la Transparencia. Como una forma de asegurar la presentaci&oacute;n 
		electr&oacute;nica de solicitudes  ante dificultades t&eacute;cnicas u operacionales as&iacute; como tambi&eacute;n informar los 
		problemas de funcionamiento del sitio web, se ha habilitado un &iacute;tem “Dificultades t&eacute;cnicas”. 
		Con esto se da cumplimiento a los puntos 1.1 y 12 de la Instrucci&oacute;n General N° 10 . Para mayor 
		informaci&oacute;n revise el <a href="oficios/anexotecnico_cpyt.pdf">Anexo T&eacute;cnico</a> de la Comisi&oacute;n de Probidad y Transparencia.
	</td>
 <td valign="middle" align="center"><img alt="" src="generar-caja.png" /></td>
</tr>
</table>
<br/>

<form action="generar_portada_solicitud.php" method="post">

<!-- BOTONES DE ACCION -->
<input type="submit" value="Generar" />
<br/><br/>




<!-- LOS MENUS REALES -->

<?php


//COLUMNA 1
echo "<h2>COLUMNA 1</h2>\n";



//Solicitud de Acceso a Informaci&oacute;n P&uacute;blica
$arr=array();
$arr['V&iacute;a electr&oacute;nica: Formulario online/Sistema electr&oacute;nico']=(isset($_SESSION['url_solicitudes']))?$_SESSION['url_solicitudes']:"";
$arr['V&iacute;a material: Formulario descargable']=(isset($_SESSION['formulario_descargable']))?$_SESSION['formulario_descargable']:"";
menuFormulario("Solicitud de Acceso a Informaci&oacute;n P&uacute;blica",$arr);


//Tutoriales Derecho de Acceso
$arr=array();
$arr['Educa Transparencia']="http://www.educatransparencia.cl";
$arr['Tutorial Institucional']=(isset($_SESSION['tutoriales_institucionales']))?$_SESSION['tutoriales_institucionales']:"";
menuFormulario("Tutoriales Derecho de Acceso",$arr);


//Canales y lugares de atenci&oacute;n
$arr=array();
if(isset($_SESSION['canales_ingreso']))
  $arr['Canales o v&iacute;as de ingreso']=$_SESSION['canales_ingreso'];
else if (isset($_SESSION['msg_canales_ingreso']))
  $arr['Canales o v&iacute;as de ingreso']='canales_ingreso.html';
else
	$arr['Canales o v&iacute;as de ingreso']= '';
if(isset($_SESSION['oficinas_atencion'])){
	$arr['Direcciones de oficinas de atenci&oacute;n'] = 'oficinas_atencion.html';
}else if(isset($_SESSION['url_oficinas_atencion'])){
	$arr['Direcciones de oficinas de atenci&oacute;n'] = $_SESSION['url_oficinas_atencion'];
}else{
	$arr['Direcciones de oficinas de atenci&oacute;n'] = '';
}
menuFormulario("Canales y lugares de atenci&oacute;n",$arr);


//Dificultades t&eacute;cnicas
$arr=array();
if(isset($_SESSION['dificultad_tecnica_sistema_electronico']))
  $arr['Con el formulario online/Sistema electr&oacute;nico']=$_SESSION['dificultad_tecnica_sistema_electronico'];
else if (isset($_SESSION['msg_dificultad_tecnica_sistema_electronico']))
  $arr['Con el formulario online/Sistema electr&oacute;nico']='dificultad_tecnica_sistema_electronico.html';
else
	$arr['Con el formulario online/Sistema electr&oacute;nico']= '';

if(isset($_SESSION['dificultad_tecnica_reporte_error']))
	$arr['Reporte error t&eacute;cnico'] = $_SESSION['dificultad_tecnica_reporte_error'];
else if(isset($_SESSION['msg_dificultad_tecnica_reporte_error']))
	$arr['Reporte error t&eacute;cnico'] = 'dificultad_tecnica_reporte_error.html';
else
	$arr['Reporte error t&eacute;cnico']= '';

menuFormulario("Dificultades t&eacute;cnicas",$arr);
?>
<!-- BOTONES DE ACCION -->
<input type="submit" value="Generar" /><br/><br/>
<?php echo html_button("main.php"); ?>


</form>

<?php  html_footer();  ?>

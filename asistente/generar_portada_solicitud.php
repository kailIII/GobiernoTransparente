<?php
//require de common
require_once "common.php";

//Para descargar
if ($depurar!=1)
	header('Content-Disposition: attachment; filename="solicitud_informacion.html"');



html_header("Solicitud de Información Ley de Transparencia", null, null, null, true);

echo 'A continuación se presenta toda la información necesaria para realizar una Solicitud  de Acceso a la Información Pública a este Organismo ('.$_SESSION["nombre"].'), tales como: formulario para realizar solicitudes de acceso a la información  sea por vía electrónica  o formato material,  información sobre los canales o vías formales de ingreso y recepción de solicitudes de acceso a la información, tutoriales sobre el Derecho de Acceso a la Información Pública. Del mismo modo como forma de asegurar la presentación electrónica de solicitudes  ante dificultades técnicas u operacionales así como también informar los problemas de funcionamiento del sitio web, se ha habilitado un ítem “Dificultades técnicas”.<br><br>';

/*
 * Cuadros adicionales: ahora procesamos los cuadros generados
 * en generar-b.php. Seran agregados si tienen titulo.
 */
$titulo=$_POST['titulo'];
$opcion1=$_POST['opcion1'];
$url1=$_POST['url1'];
$opcion2=$_POST['opcion2'];
$url2=$_POST['url2'];
$opcion3=$_POST['opcion3'];
$url3=$_POST['url3'];
$opcion4=$_POST['opcion4'];
$url4=$_POST['url4'];
$opcion5=$_POST['opcion5'];
$url5=$_POST['url5'];
$opcion6=$_POST['opcion6'];
$url6=$_POST['url6'];

echo '<div class="seccion">';

for($k=0;$k<12;$k++) {
 if (!isset($titulo[$k])) continue;
 if (trim($titulo[$k])=="") continue;
 echo "<p class='subMenu'>\n";
 //Por columna...
 echo "<b>".acentosHTML($titulo[$k])."</b>";

 if (trim($opcion1[$k])!="" && trim($url1[$k])!="")
   echo "<a href='".trim($url1[$k])."'>".acentosHTML($opcion1[$k])."</a>";
 if (trim($opcion2[$k])!="" && trim($url2[$k])!="")
   echo "<a href='".trim($url2[$k])."'>".acentosHTML($opcion2[$k])."</a>";
 if (trim($opcion3[$k])!="" && trim($url3[$k])!="")
   echo "<a href='".trim($url3[$k])."'>".acentosHTML($opcion3[$k])."</a>";
 if (trim($opcion4[$k])!="" && trim($url4[$k])!="")
   echo "<a href='".trim($url4[$k])."'>".acentosHTML($opcion4[$k])."</a>";
 if (trim($opcion5[$k])!="" && trim($url5[$k])!="")
   echo "<a href='".trim($url5[$k])."'>".acentosHTML($opcion5[$k])."</a>";
 if (trim($opcion6[$k])!="" && trim($url6[$k])!="")
   echo "<a href='".trim($url6[$k])."'>".acentosHTML($opcion6[$k])."</a>";
 
 echo "<u></u><br/>\n";
 
 /*condición para mostrar caja de contacto en columna 1*/
 if($k==0){
	 if (isset($_SESSION['encargado']) && ($_SESSION['contacto_transparencia'])){
		
		echo "<b>Contacto encargado de Transparencia</b>";
		echo "<a>Encargado: ".$_SESSION['encargado']."</a>";
		//echo "<a>Encargado: ".$_SESSION['contacto_transparencia']."</a>";
		$encodedEmail = encode_email_address( $_SESSION['contacto_transparencia'] );
		printf('<a href="mailto:%s">Contacto: %s</a>', $encodedEmail, $encodedEmail);
		
		echo "<u></u><br/>\n";
	}
 }
 if ($k==3){
	 echo "<b>Estad&iacute;sticas solicitudes de acceso a la informaci&oacute;n p&uacute;blica</b>";
		echo "<a href='http://www.cdc.gob.cl/estadisticas/estadisticas-ley-n-20-285/' target='_blank'>Estad&iacute;sticas Comision Defensora Ciudadana y Transparencia</a>";
		echo "<a href='http://www.consejotransparencia.cl/consejo/site/cache/nroedic/taxport/18_70_0_1.html' target='_blank'>Estad&iacute;sticas Consejo Para La Transparencia</a>";
		echo "<u></u><br/>\n";
 }

 
 echo "</p>\n";
}
echo '</div>';

$_SESSION['generador_portada_solicitudo_info_transparencia']="SI";

echo '<div style="float:left; clear:both;">';
echo html_button("index.html");
echo '</div>';

html_footer( "codigo".trim( alfanum($_SESSION['sigla']) )." portada ".date('Y-m-d') );  ?>
<?php


require_once "common.php";


//Para descargar
if ($depurar!=1)
header('Content-Disposition: attachment; filename="index.html"');



html_header("Gobierno Transparente<br/>Ley N&deg; 20.285 - sobre Acceso a la Informaci&oacute;n P&uacute;blica",$_SESSION['nombre'],$_SESSION['sigla'],$_SESSION['logo'],true);


//echo acentosHTML($_SESSION['nombre'].", ".$_SESSION['sigla']."<br/><br/>");

echo "<h3><b>&Uacute;ltima actualizaci&oacute;n:</b>".date("d/m/Y")."</h3><br/><br/>";


/*
//NORMATIVO

echo "
<!-- Marco Normativo -->
<p class='subMenu'>
<b>Marco Normativo</b>
";

if (isset($_POST['normativa_a6']))
	echo "<a href='normativa_a6.html'>Actos y documentos publicados en el Diario Oficial</a>";
if (isset($_POST['normativa_a7b']))
	echo "<a href='normativa_a7b.html'>Funciones, competencias y responsabilidades</a>";
if (isset($_POST['normativa_a7c']))
	echo "<a href='normativa_a7c.html'>Marco normativo aplicable</a>";
if (isset($_POST['normativa_a7g']))
	echo "<a href='normativa_a7g.html'>Actos con efectos sobre terceros</a>";
if (isset($_SESSION['url_bibcongreso']))
	echo "<a href='".$_SESSION['url_bibcongreso']."'>Biblioteca del Congreso Nacional</a>";
if (isset($_SESSION['url_diariooficial']))
	echo "<a href='".$_SESSION['url_diariooficial']."'>Diario Oficial</a>";
echo "<u></u><br/>\n";



// ESTRUCTURA ORGANICA

echo "
<!-- Estructura organica -->
<b>Estructura Org&aacute;nica</b>
<a href='#'>Organigrama</a>
";

echo "<u></u><br/>
";




// DOTACION DE PERSONAL
echo "
<!-- Personal -->
<b>Dotaci&oacute;n de Personal</b>
";

if (isset($_POST['personal_planta']))
	echo "<a href='per_planta.html'>Dotaci&oacute;n de Planta</a>";
if (isset($_POST['personal_contrata']))
	echo "<a href='per_contrata.html'>Dotaci&oacute;n a Contrata</a>";
if (isset($_POST['personal_honorarios']))
	echo "<a href='per_honorarios.html'>Dotaci&oacute;n a Honorarios</a>";

echo "<u></u><br/>
</p>

";




//COMPRAS Y ADQUISICIONES
echo "
<p class='subMenu'>

<!-- compras -->
<b>Compras y Adquisiciones</b>
";

if (isset($_SESSION['url_mpublico']))
	echo "<a href='".$_SESSION['url_mpublico']."'>En Mercado P&uacute;blico</a>";
if (isset($_POST['otras_compras']))
	echo "<a href='otras_compras.html'>Otras compras y adquisiciones</a>";

echo "<u></u><br/>
";



// Transferencias
echo "
<!-- Transferencias -->
<b>Transferencias</b>
";


if (isset($_SESSION['url_registro']))
	echo "<a href='".$_SESSION['url_registro']."'>Registro de la ley N&deg; 19.862</a>";
if (isset($_POST['transferencias']))
	echo "<a href='transferencias.html'>Otras transferencias</a>";
if (isset($_POST['transferencias_hist']))
	echo "<a href='transferencias_historico.html'>Otras transferencias de a&ntilde;os anteriores</a>";

echo "<u></u>
<br/>
";



// Informacion presupuestaria

echo "
<!-- Presupuesto -->
<b>Informaci&oacute;n Presupuestaria</b>
";

if (isset($_SESSION['url_dipres'])) {
	echo "<a href='".$_SESSION['url_dipres']."'>En la Direcci&oacute;n de Presupuestos</a>";
} //else {
//	echo "<a href='http://www.dipres.cl'>DIPRES</a>";
//}//

//echo "<a href='#'>Presupuestos de a&ntilde;os anteriores</a>
echo "
<u></u>
<br/>
";




//Auditorias
echo "
<b>Auditor&iacute;as al Ejercicio Presupuestario</b>";
if (isset($_POST['auditorias']))
	echo "<a href='auditorias.html'>Resultados y aclaraciones</a>";
echo "
<a href='#'>Auditor&iacute;as anteriores</a>
<u></u>
<br/>
</p>
";





// Tramites
echo "
<p class='subMenu'>
<b>Tr&aacute;mites del Organismo</b>
";
if (isset($_SESSION['url_chileatiende']))
	echo "<a href='".$_SESSION['url_chileatiende']."'>Tr&aacute;mites en ChileAtiende</a>\n";
if (isset($_POST['otros_tramites']))
	echo "<a href='tramites.html'>Otros tr&aacute;mites</a>\n";
echo "<u></u>
<br/>
";



// Participacion Ciudadana
echo "
<b>Participaci&oacute;n Ciudadana</b>
";
if (isset($_SESSION['url_ciudadana']))
	echo "<a href='".$_SESSION['url_ciudadana']."'>Norma General de Participaci&oacute;n Ciudadana</a>\n";
if (isset($_POST['participacion_ciudadana']))
        echo "<a href='ciudadana.html'>Mecanismos de participaci&oacute;n ciudadana</a>\n";
echo "<u></u>
<br/>
";




//Subsidios y beneficios
echo "
<b>Subsidios y Beneficios</b>
<a href='#'>Programas de subsidios y beneficios</a>
<a href='#'>N&oacute;minas de beneficiarios de programas sociales</a>
<u></u>
<br/>
";




// vinculos
echo "
<b>V&iacute;nculos Institucionales</b>
";
if (isset($_POST['vinculos']))
        echo "<a href='vinculos.html'>Participaci&oacute;n, representaci&oacute;n e intervenci&oacute;n</a>\n";
if (isset($_POST['vinculos_hist']))
        echo "<a href='vinculos_historico.html'>Registro hist&oacute;rico</a>\n";
echo "<u></u>
<br/>
</p>
";

*/



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

for($c=0;$c<20;$c+=5) {
 echo "<p class='subMenu'>\n";
 //Por columna...
 for($k=$c;$k<$c+5;$k++) {
   if (trim($titulo[$k])=="") continue;
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
 }
 echo "</p>\n";
}

/*
for($k=0;$k<count($titulo);$k++) {
 if (trim($titulo[$k])=="") continue;

 $opc=array();
 if ($opcion1[$k]!="") $opc[ $opcion1[$k] ]= $url1[$k];
 if ($opcion2[$k]!="") $opc[ $opcion2[$k] ]= $url2[$k];
 if ($opcion3[$k]!="") $opc[ $opcion3[$k] ]= $url3[$k];
 if ($opcion4[$k]!="") $opc[ $opcion4[$k] ]= $url4[$k];

 menu( $titulo[$k] , $opc );
}
*/


html_footer( "codigo".trim( alfanum($_SESSION['sigla']) )." portada ".date('Y-m-d') );  ?>

<?php

require_once "common.php";

$titulo=$_POST['titulo'];
$archivo=$_POST['archivo'];
$texto=$_POST['texto'];
$sv=$_POST['sv'];


//Para descargar
if ($depurar!=1)
  header("Content-Disposition: attachment; filename=\"$archivo\"");

$_SESSION[$sv]="SI";

html_header(acentosHTML($titulo));

//echo "<h3><b>&Uacute;ltima actualizaci&oacute;n:</b>".date("d/m/Y")."</h3><br/>";

echo acentosHTML(str_replace("\n","<br/>",$texto))."<br/><br/>";

echo html_volver("javascript:history.go(-1)");

html_footer("codigo".trim( alfanum($_SESSION['sigla']) )." ".$sv." ".date('Y-m-d'));

?>

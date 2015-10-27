<?php

require_once "common.php";

if ($depurar!=1)
  header('Content-Disposition: attachment; filename="'.$_POST['archivo'].'"');

html_header(acentosHTML($_POST['titulo']));

$_SESSION[$_POST['sv']]="SI";

echo acentosHTML($_POST['mensaje']);

echo "<br/><br/>";

$titulo=$_POST['tit1'];
$opc=$_POST['opc'];
$lnk=$_POST['lnk'];

echo "<div style='overflow: hidden;'><p class='subMenu'>\n";
echo acentosHTML("<b>".$titulo."</b>");
for($i=0;$i<count($opc);$i++) {
  echo acentosHTML("<a href='".$lnk[$i]."'>".$opc[$i]."</a>");
}
echo "<u></u></p></div><br />\n";

echo html_volver("index.html");

html_footer("codigo".trim(alfanum($_SESSION['sigla']))." ".$_POST['sv']." ".date('Y-m-d'));

?>

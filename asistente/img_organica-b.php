<?php

require_once "common.php";

if ($depurar!=1)
  header("Content-Disposition: attachment; filename=organica.html");

$_SESSION['organica']='SI';

html_header("Estructura org&aacute;nica");

$dims="";
if (trim($_POST['ancho'])!="")
  $dims=" width='".trim($_POST['ancho'])."' ";
if (trim($_POST['alto'])!="")
  $dims="$dims height='".trim($_POST['alto'])."' ";

if (ereg(".swf",$_POST['texto']))
  echo "<embed src='".$_POST['texto']."' $dims></embed><br/><br/>";
else
  echo "<img src='".$_POST['texto']."' $dims/><br/><br/>";

echo acentosHTML($_POST['desc'])."<br/><br/>";

echo html_volver("index.html");

html_footer("codigo".trim( alfanum($_SESSION['sigla']) )." organica ".date('Y-m-d'));
?>

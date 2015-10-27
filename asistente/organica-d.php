<?php

require_once "common-org.php";

if ($depurar!=1)
  header("Content-Disposition: attachment; filename=organica.html");

$_SESSION['organica']='SI';

org_header("Estructura Org&aacute;nica, ".$_SESSION['nombre']);

echo toLista($_SESSION['data'],"","primer_nodo");

echo html_volver("index.html");

html_footer("codigo".trim( alfanum($_SESSION['sigla']) )." organica ".date('Y-m-d'));
?>

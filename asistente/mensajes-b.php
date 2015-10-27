<?php

require_once('common.php');


//Para descargar
if ($depurar!=1)
header('Content-Disposition: attachment; filename="mensaje.html"');


html_header($_POST['titulo']);


echo str_replace("\n","<br/>\n",$_POST['texto']);


html_footer(); ?>

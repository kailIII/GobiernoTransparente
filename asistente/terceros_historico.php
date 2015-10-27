<?php

require_once "common-menuint.php";
html_header("Directorio Hist&oacute;rico de Actos con Efectos sobre Terceros");

echo acentosHTML("
Esta funcionalidad le permitirá construir el
directorio histórico de los actos con efectos sobre terceros.
<br/><br/>");

//$enlace_actual='terceros.html';
//if(isset($_SESSION['subsecciones']['terceros']))
//    $enlace_actual=key(array_slice($_SESSION['subsecciones']['terceros'],0,1)).'.html';

formMenuIntermedio(array("Antes del 1 de septiembre de 2010"=>"terceros.html",'Después del 1 de septiembre de 2010'=>'terceros_index.html'),
  "terceros_historico","Directorio de Actos con Efectos sobre Terceros",
    "Este directorio organiza los actos con efectos sobre terceros."

);

?>

<?php
html_footer();
?>

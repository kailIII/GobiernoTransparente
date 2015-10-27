<?php

require_once "common-histo.php";
html_header("Directorio Hist&oacute;rico de Programas Sociales y Beneficiarios");

echo acentosHTML("
Esta funcionalidad le permitirá construir el
directorio histórico de las nóminas de beneficiarios
de programas sociales generadas por el conversor
indicado.
<br/><br/>");

formHistorico(
  "subsidio_historico.html","Directorio Anual de Programas de Subsidios y Otros Beneficios",
    "Este directorio organiza los programas de subsidios y otros beneficios por año.",array("Programas de subsidios y otros beneficios"=>"subsidio_programas.html"),
  "subsidio_historico_mensual.html","Directorio Mensual de Programas de Subsidios y Otros Beneficios",
    "Este directorio organiza los programas de subsidios y otros beneficios por mes.",array("Programas de subsidios y otros beneficios"=>"subsidio_programas.html"),
  "subsidio_historico", 2009
);

?>

<?php
html_footer();
?>

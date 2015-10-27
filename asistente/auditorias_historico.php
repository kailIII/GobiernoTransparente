<?php

require_once "common-histo.php";
html_header("Directorio Hist&oacute;rico de Auditor&iacute;as al Ejercicio Presupuestario");

echo acentosHTML("
Esta funcionalidad le permitirá construir el
directorio histórico de las páginas de auditoría
generadas por el conversor indicado.
<br/><br/>");

formHistorico(
  "auditorias_historico.html","Directorio Anual de Auditorías al Ejercicio Presupuestario",
    "Este directorio organiza las auditorías al Organismo por año.",array("Informes de auditoría"=>"auditorias.html"),
  "auditorias_historico_mensual.html","Directorio Mensual de Auditorías al Ejercicio Presupuestario",
    "Este directorio organiza las auditorías al Organismo por mes.",array("Informes de auditoría"=>"auditorias.html"),
  "auditorias_historico", 2009
);

?>

<?php
html_footer();
?>

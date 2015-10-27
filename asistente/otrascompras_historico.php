<?php

require_once "common-histo.php";
html_header("Directorio Hist&oacute;rico de Otras Compras y Adquisiciones");

echo acentosHTML("
Esta funcionalidad le permitirá construir el
directorio histórico de las compras y adquisiciones
que no han sido hechas a través de MercadoPúblico.
<br/><br/>");

formHistorico(
  "otrascompras_historico.html","Directorio Anual de Otras Compras y Adquisiciones",
    "Este directorio organiza las compras que no han sido hechas a través de MercadoPúblico, por año.",array("Otras compras y adquisiciones"=>"otras_compras.html"),
  "otrascompras_historico_mensual.html","Directorio Mensual de Otras Compras y Adquisiciones",
    "Este directorio organiza las compras que no han sido hechas a través de MercadoPúblico, por mes.",array("Otras compras y adquisiciones"=>"otras_compras.html"),
  "otrascompras_historico"
);

?>

<?php
html_footer();
?>

<?php

require_once "common-histo.php";
html_header("Directorio Hist&oacute;rico de Otras Transferencias");

echo acentosHTML("
Esta funcionalidad le permitirá construir el
directorio histórico de las transferencias que
no están en el sitio Registros ley N&deg; 19.862.
<br/><br/>");

formHistorico(
  "transferencias_historico.html","Directorio Anual de Otras Transferencias",
    "Este directorio organiza las transferencias fuera de Registros ley N&deg; 19.862, por año.",array("Otras transferencias"=>"transferencias.html"),
  "transferencias_historico_mensual.html","Directorio Mensual de Otras Transferencias",
    "Este directorio organiza las transferencias fuera de Registros ley N&deg; 19.862, por mes.",array("Otras transferencias"=>"transferencias.html"),
  "transferencias_historico"
);

?>

<?php
html_footer();
?>

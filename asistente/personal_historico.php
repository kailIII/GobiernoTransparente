<?php

require_once "common-histo.php";

$_SESSION['back']="personal_historico.php";
html_header("Directorio Hist&oacute;rico de Dotación de Personal");

echo acentosHTML("
Esta funcionalidad le permitirá construir el
directorio histórico de dotación de personal
de su Organismo.
<br/><br/>");

echo "<h2>Dotaci&oacute;n de Planta</h2>";
formHistorico(
  "planta_historico.html","Directorio Anual de Dotación de Planta",
    "Este directorio organiza la dotación de personal de planta por año.",array("Dotación de personal de planta"=>"per_planta.html"),
  "","","",array(),
  "planta_historico",2006,0
);

echo "<h2>Dotaci&oacute;n a Contrata</h2>";
formHistorico(
  "contrata_historico.html","Directorio Anual de Dotación a Contrata",
    "Este directorio organiza la dotación de personal a contrata por año.",array("Dotación de personal a contrata"=>"per_contrata.html"),
  "","","",array(),
  "contrata_historico",2006,0
);

echo "<h2>Dotaci&oacute;n a Honorarios</h2>";
formHistorico(
  "honorarios_historico.html","Directorio Anual de Dotación a Honorarios",
    "Este directorio organiza la dotación de personal a honorarios por año.",array("Dotación de personal a honorarios"=>"per_honorarios.html"),
  "","","",array(),
  "honorarios_historico",2006,0
);

echo "<h2>Otras Contrataciones sujetas al C&oacute;digo del Trabajo</h2>";
formHistorico(
  "codtrabajo_historico.html","Directorio Anual de Otras Contrataciones sujetas al Código del Trabajo",
    "Este directorio organiza las demás contrataciones sujetas al Código del Trabajo, por año.",array("Otras contrataciones sujetas al Código del Trabajo"=>"per_otros.html"),
  "","","",array(),
  "codtrabajo_historico",2009,0
);

echo html_button("main.php");

html_footer();
?>

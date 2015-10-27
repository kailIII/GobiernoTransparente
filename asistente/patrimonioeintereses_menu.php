<?php

require_once "common-menuint.php";
html_header("Directorio de declaraciones de patrimonio e intereses");

echo acentosHTML("
Esta funcionalidad le permitirá construir el
directorio de declaraciones de patrimonio e intereses.
<br/><br/>");


formMenuIntermedio(array("Autoridades vigentes"=>"patrimonioeintereses.html"),
  "patrimonioeintereses_menu","Directorio de declaraciones de patrimonio e intereses",
    "Este directorio organiza las declaraciones de patrimonio e intereses."

);

?>

<?php
html_footer();
?>

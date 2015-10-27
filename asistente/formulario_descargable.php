<?php

require_once "common-url.php";
require_once "common-msg.php";


html_header("URL: Enlace a formulario descargable");

?>

Ingrese la URL del enlace al formulario descargable.


<br/><br/>


<?php
echo formularioURL(
  "URL: Enlace a formulario descargable",
  "La URL del formulario descargable ha sido actualizada.",
  "formulario_descargable",
  "(Ej. http://www.probidadytransparencia.gob.cl/formulario/plantilla_2012/plantilla-formulario-2012.pdf )"
);
?>



  
<?php

echo html_footer();
?>

<?php

require_once "common-url.php";

html_header("URL: Estructura Org&aacute;nica");

echo acentosHTML("
Ingrese la URL de la página que contiene la
estructura orgánica de su organismo.<br/>
Puede usar esta funcionalidad si no desea
utilizar el editor de estructuras orgánicas o
bien si desea agregar información adicional.
");

?>

<br/><br/>


<?php
echo formularioURL(
  "URL: Estructura Orgánica",
  "La URL de la estructura orgánica ha sido actualizada.",
  "url_organica",
  "(Ej. http://www.sitio.gob.cl/organica.html )"
);
?>



<?php html_footer(); ?>

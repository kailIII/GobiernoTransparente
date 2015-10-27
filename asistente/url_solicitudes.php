<?php

require_once "common-url.php";

html_header("URL: Enlace a Sistema de Gesti&oacute;n de Solicitudes");

?>

Ingrese la URL del Sistema de Gesti&oacute;n de Solicitudes
para su Organismo.

<br/><br/>


<?php
echo formularioURL(
  "URL: Enlace a Sistema de Gesti&oacute;n de Solicitudes",
  "La URL del Sistema de Gesti&oacute;n de Solicitudes ha sido actualizada.",
  "url_solicitudes"
);
?>



<?php html_footer(); ?>

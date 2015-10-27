<?php

require_once "common-url.php";
require_once "common-msg.php";


html_header("URL: Portal de Participaci&oacute;n Ciudadana");

?>

Ingrese la URL del Banner Portal de Participaci&oacute;n Ciudadana
del organismo:


<br/><br/>


<?php
echo formularioURL(
  "URL: Portal de Participaci&oacute;n Ciudadana",
  "La URL del Portal de Participaci&oacute;n Ciudadana ha sido actualizada.",
  "url_ciudadana2",
  "(Ej. http://www.sitio.gob.cl/participacion/ )"
);
?>



  
<?php

echo html_footer();
?>

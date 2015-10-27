<?php

require_once "common-url.php";
require_once "common-msg.php";


html_header("URL: Acceso a subsitio lobby");

?>


Para obtener la URL de acceso a la información requerida en la Ley Nº 20.730 de su Institución publicados en la plataforma Ley del Lobby, revise el siguiente listado:
<a href="http://www.leylobby.gob.cl/instituciones" target="_NEW">URLs en plataforma Ley del Lobby, por instituci&oacute;n</a>.
<br/><br/>


Ingrese la URL de la plataforma Ley del Lobby que liste los trámites de la entidad:
<br/><br/>


<?php
echo formularioURL(
  "URL: Acceso a subsitio lobby",
  "La URL de acceso al subsitio lobby ha sido actualizada.",
  "url_lobby",
  "(Ej. http://www.leylobby.gob.cl/instituciones/AJ012 )"
);
?>



  
<?php


echo html_footer();
?>


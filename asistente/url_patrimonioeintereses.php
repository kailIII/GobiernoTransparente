<?php

require_once "common-url.php";
require_once "common-msg.php";


html_header("URL: Acceso a subsitio de Declaraciones de Patrimonio e Intereses");

?>


Para obtener la URL de acceso a la información requerida en el Instructivo Presidencial N° 2 de su Institución publicados en la plataforma de Declaraciones de Patrimonio e Intereses, revise el siguiente listado:
<a href="http://dpi.gobiernotransparente.cl/instituciones" target="_NEW">URLs en plataforma de Declaraciones de Patrimonio e Intereses, por instituci&oacute;n</a>.
<br/><br/>


Ingrese la URL de la plataforma de Declaraciones de Patrimonio e Intereses que liste los trámites de la entidad:
<br/><br/>


<?php
echo formularioURL(
    "URL: Acceso a subsitio Declaraciones de Patrimonio e Intereses",
    "La URL de acceso al subsitio Declaración de patrimonio e intereses ha sido actualizada.",
    "url_patrimonioeintereses",
    "(Ej. http://dpi.minsegpres.gob.cl/instituciones/XXxxx )"
);
?>




<?php


echo html_footer();
?>


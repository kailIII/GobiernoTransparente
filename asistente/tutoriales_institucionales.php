<?php

require_once "common-url.php";
require_once "common-msg.php";


html_header("URL: Tutoriales institucionales");

?>

En el caso que su instituci&oacute;n cuente con un tutorial institucional sobre la ley de transparencia, ingrese la URL en este campo.


<br/><br/>


<?php
echo formularioURL(
  "URL: Tutoriales institucionales",
  "La URL de los Tutoriales institucionales ha sido actualizada.",
  "tutoriales_institucionales",
  "(Ej. http://www.institucion.gob.cl/tutorialtransparencia )"
);
?>

<?php html_footer(); ?>

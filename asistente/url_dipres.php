<?php

require_once "common-url.php";
require_once "common-msg.php";


html_header("URL: Informes de ejecuci&oacute;n presupuestaria");

?>

Ingrese la URL que apunte a la ejecuci&oacute;n presupuestaria
que detalle el presupuesto y los informes de ejecuci&oacute;n presupuestaria del Organismo.
Si la informaci&oacute;n est&aacute; publicada en DIPRES,
puede obtener la URL del siguiente listado:
<a href="aux_dipres.php" target="_NEW">URLs de DIPRES por instituci&oacute;n</a>.

<br/><br/>


<?php
echo formularioURL(
  "URL: Informes de ejecuci&oacute;n presupuestaria",
  "La URL de los informes de ejecuci&oacute;n presupuestaria ha sido actualizada.",
  "url_dipres",
  "(Ej. http://www.dipres.gob.cl/EjecucionPresupuestaria/SUBDERE )"
);
?>

<br/>
<hr color="#ddddff" />
<br/>

<h2>Generador de página de mensaje (HTML)</h2>

Si la publicaci&oacute;n de esta informaci&oacute;n no aplica a su servicio o no existen antecedentes asociados, ingrese el mensaje jur&iacute;dico correspondiente para generar la p&aacute;gina HTML de respuesta. 
  <br/><br/>
  
<?php

$opciones=array( "No existe informaci&oacute;n asociada a este &iacute;tem" => "No existe informaci&oacute;n asociada a este &iacute;tem." );
echo formularioExcepcion($opciones,"Informes de ejecuci&oacute;n presupuestaria","msg_dipres","dipres.html");


echo html_footer();
?>
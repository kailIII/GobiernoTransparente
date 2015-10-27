<?php

require_once "common-url.php";
require_once "common-msg.php";


html_header("URL: Canales o v&iacute;as de ingreso");

?>

Ingrese la URL donde se encuentren los canales o vías formales de ingreso y recepción de solicitudes definidos por la propia institución y cumpliendo con lo señalado en la Instrucción General N° 10.

<br/><br/>

<?php
echo formularioURL(
  "URL: Canales o v&iacute;as de ingreso",
  "La URL de los Canales o v&iacute;as de ingreso ha sido actualizada.",
  "canales_ingreso",
  "(Ej. http://www.sitio.gob.cl/normagral/ )"
);
?>


<br/>
<hr style="color: #ddddff;" />
<br/>

<h2>Generador de página de mensaje (HTML)</h2>

	Si no tiene publicado los canales o v&iacute;as de ingreso en su web institucional, publique la informaci&oacute;n en este campo.
  <br/><br/>
  
<?php

$opciones=array();
echo formularioExcepcion($opciones,"Canales o v&iacute;as de ingreso","msg_canales_ingreso","canales_ingreso.html", false);


echo html_footer();
?>
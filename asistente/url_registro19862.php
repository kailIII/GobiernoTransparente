<?php

require_once "common-url.php";
require_once "common-msg.php";

html_header("URL: Registros ley N&deg; 19.862");

?>

Ingrese la URL de Registros ley N&deg; 19.862
(Registro Central de Colaboradores del Estado y
Municipalidades) que corresponda a la
informaci&oacute;n de este organismo.
Para una lista con URL de instituciones en
Registros ley N&deg; 19.862, visite el
siguiente archivo: 
<a href="aux_registros.php" target="_NEW">
URLs de Registros ley N&deg; 19.862 por
instituci&oacute;n</a>.


<br/><br/>


<?php
echo formularioURL(
  "URL: Registros ley N&deg; 19.862",
  "La URL de Registros ley N&deg; 19.862 ha sido actualizada.",
  "url_registro",
  "(Ej. http://www.registros19862.cl/institucion/72224100 )"
);
?>



<br/>
<hr color="#ddddff" />
<br/>

<h2>Generador de página de mensaje (HTML)</h2>

Si la publicaci&oacute;n de esta informaci&oacute;n no aplica a su servicio o no existen antecedentes asociados, ingrese el mensaje jur&iacute;dico correspondiente para generar la p&aacute;gina HTML de respuesta. 
  <br/><br/>
  
<?php

$opciones=array( "No existe informaci&oacute;n asociada a este &iacute;tem" => 'Esta institución no efectúa transferencias al amparo de la ley N° 19.862.' );
echo formularioExcepcion($opciones,"Registros ley N&deg; 19.862","msg_registro","registro19862.html");


echo html_footer();
?>
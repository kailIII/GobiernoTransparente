<?php

require_once "common-url.php";
require_once "common-msg.php";

html_header("URL: Costos directos de reproducci&oacute;n de la informaci&oacute;n requerida v&iacute;a ley N&deg; 20.285");

?>

Ingrese la URL del documento que fija los costos directos de reproducci&oacute;n de la informaci&oacute;n requerida v&iacute;a ley N&deg; 20.285:
<br />
<br />
Si existen leyes que expresamente autoricen cobro de otros valores por la entrega de la informaci&oacute;n solicitada estas deben incorporarse en la secci&oacute;n marco normativo.
<br />

<br/>

<?php
echo formularioURL(
  "URL: Costos directos de reproducción de la información requerida vía ley N&deg; 20.285",
  "La URL de costos directos de reproducción ha sido actualizada.",
  "url_costos_directos",
  "(Ej. http://www.sitio.gob.cl/normagral/acto.pdf )"
);
?>


<br/>
<hr style="color: #ddddff;" />
<br/>

<h2>Generador de página de mensaje (HTML)</h2>

Si la publicaci&oacute;n de esta informaci&oacute;n no aplica a su servicio o no existen antecedentes asociados, ingrese el mensaje jur&iacute;dico correspondiente para generar la p&aacute;gina HTML de respuesta. 
  <br/><br/>
  
<?php

$opciones=array( "No existe informaci&oacute;n asociada a este &iacute;tem" => "Esta institución no ha fijado los costos directos de reproducción para la entrega de la información." );
echo formularioExcepcion($opciones,"Costos directos de reproducción de la información requerida vía ley N&deg; 20.285","msg_costos_directos","costos_directos.html");

echo html_footer();
?>
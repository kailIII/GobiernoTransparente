<?php

require_once "common-url.php";
require_once "common-msg.php";


html_header("URL: Norma General de Participaci&oacute;n Ciudadana");

?>

Ingrese la URL de la Norma General de Participaci&oacute;n Ciudadana
del organismo:


<br/><br/>

<?php
echo formularioURL(
  "URL: Norma General de Participaci&oacute;n Ciudadana",
  "La URL de la Norma General de Participaci&oacute;n Ciudadana ha sido actualizada.",
  "url_ciudadana",
  "(Ej. http://www.sitio.gob.cl/normagral/ )"
);
?>




<br/>
<hr style="color: #ddddff;" />
<br/>

<h2>Generador de página de mensaje (HTML)</h2>

Si la publicaci&oacute;n de esta informaci&oacute;n no aplica a su servicio o no existen antecedentes asociados, ingrese el mensaje jur&iacute;dico correspondiente para generar la p&aacute;gina HTML de respuesta. 
  <br/><br/>
  
<?php

$opciones=array( "No existe informaci&oacute;n asociada a este &iacute;tem" => ($_SESSION['nombre']?$_SESSION['nombre']:'Esta institución').' no ha dictado una norma general de participación ciudadana.' );
echo formularioExcepcion($opciones,"Norma General de Participaci&oacute;n Ciudadana","msg_ciudadana","ciudadana.html", true);


echo html_footer();
?>
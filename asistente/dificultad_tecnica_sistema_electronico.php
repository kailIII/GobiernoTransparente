<?php

require_once "common-url.php";
require_once "common-msg.php";


html_header("URL: Dificultad t&eacute;cnica sistema electr&oacute;nico");

?>

Ingrese la URL del Plan de Contingencia, donde comunique la forma de operar en caso que el sistema electr&oacute;nico presente desperfectos, dando alternativas de soluci&oacute;n al solicitante.
<br/><br/>

<?php
echo formularioURL(
  "URL: Dificultad t&eacute;cnica sistema electr&oacute;nico",
  "La URL de la Dificultad t&eacute;cnica sistema electr&oacute;nico ha sido actualizada.",
  "dificultad_tecnica_sistema_electronico",
  "(Ej. http://www.sitio.gob.cl/normagral/ )"
);
?>


<br/>
<hr style="color: #ddddff;" />
<br/>

<h2>Generador de p&aacute;gina de mensaje (HTML)</h2>

Si no tiene publicado el Plan de Contingencia en su web institucional, publique la informaci&oacute;n en este campo.
  <br/><br/>
  
<?php

$opciones=array();
echo formularioExcepcion($opciones,"Dificultad t&eacute;cnica sistema electr&oacute;nico","msg_dificultad_tecnica_sistema_electronico","dificultad_tecnica_sistema_electronico.html", false);


echo html_footer();
?>
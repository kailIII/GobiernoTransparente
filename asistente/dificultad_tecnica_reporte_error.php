<?php

require_once "common-url.php";
require_once "common-msg.php";


html_header("URL: Dificultad t&eacute;cnica reporte un error");

?>

Ingrese la URL donde se señale el medio id&oacute;neo para informar los problemas de funcionamiento del sitio web.

<br/><br/>

<?php
echo formularioURL(
  "URL: Dificultad t&eacute;cnica reporte un error",
  "La URL de la Dificultad t&eacute;cnica reporte un error ha sido actualizada.",
  "dificultad_tecnica_reporte_error",
  "(Ej. http://www.sitio.gob.cl/normagral/ )"
);
?>


<br/>
<hr style="color: #ddddff;" />
<br/>

<h2>Generador de p&aacute;gina de mensaje (HTML)</h2>

Si no tiene publicado la informaci&oacute;n con el medio id&oacute;neo para informar problemas de funcionamiento en su sitio institucional, publique aqu&iacute; un mensaje con al menos los siguientes elementos: Para reportar un error, por favor inf&oacute;rmelo al siguiente: / correo electr&oacute;nico [error@xxx.gov.cl] / tel&eacute;fono de la unidad de transparencia fono 56 x xxxxx / en los siguientes horarios Lunes a Viernes xx:xx a xx: xx hrs.
<br/><br/>
  
<?php

$opciones=array();
echo formularioExcepcion($opciones,"Dificultad t&eacute;cnica reporte un error","msg_dificultad_tecnica_reporte_error","dificultad_tecnica_reporte_error.html", false);


echo html_footer();
?>
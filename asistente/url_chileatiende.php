<?php

require_once "common-url.php";
require_once "common-msg.php";


html_header("URL: Tr&aacute;mites en ChileAtiende");

?>


Para obtener la URL de acceso a la informaci&oacute;n de
los tr&aacute;mites, servicios y beneficios de su Instituci&oacute;n
publicados en ChileAtiende, revise el siguiente archivo:
<a href="http://www.chileatiende.cl/widget/urls" target="_NEW">URLs de ChileAtiende, por instituci&oacute;n</a>.
Si los tr&aacute;mites no est&aacute;n
listados, consulte el
<a href="aux_chileatiende2.php" target="_NEW">protocolo de
publicación de trámites de ChileAtiende</a>.
<br/><br/>


Ingrese la URL de ChileAtiende que liste los tr&aacute;mites
de la entidad:
<br/><br/>


<?php
echo formularioURL(
  "URL: Tr&aacute;mites en ChileAtiende",
  "La URL de los servicios en ChileAtiende ha sido actualizada.",
  "url_chileatiende",
  "(Ej. http://www.chileatiende.cl/transparencia/AgCI )"
);
?>



<br/>
<hr style="color: #ddddff;" />
<br/>

<h2>Generador de página de mensaje (HTML)</h2>

Si la publicaci&oacute;n de esta informaci&oacute;n no aplica a su servicio o no existen antecedentes asociados, ingrese el mensaje jur&iacute;dico correspondiente para generar la p&aacute;gina HTML de respuesta. 
  <br/><br/>
  
<?php

$opciones=array( "No existe informaci&oacute;n asociada a este &iacute;tem" => "Esta institución no realiza trámites.",
                 'No informa a través de ChileAtiende'=>'Esta institución no informa sus trámites a través del portal ChileAtiende. La información requerida puede consultarse en el enlace “Otros trámites” de este sitio.'
    );
echo formularioExcepcion($opciones,"Tr&aacute;mites en ChileAtiende","msg_chileatiende","chileatiende.html", true);


echo html_footer();
?>


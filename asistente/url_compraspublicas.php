<?php

require_once "common-url.php";
require_once "common-msg.php";


html_header("URL: Sistema de Compras P&uacute;blicas");

?>

Ingrese la URL del Sistema de Compras P&uacute;blicas
( ChileCompra, MercadoP&uacute;blico, etc.) que detalle
las compras del Organismo.
<br/><br/>
Para obtener la URL de acceso a la informaci&oacute;n de su Instituci&oacute;n,
revise el siguiente archivo:
<a href="aux_mercadopublico.php" target="_NEW">URL por Instituci&oacute;n</a>

<br/><br/>
Al ingresar las URLs, recuerde utilizar enlaces directos
(ejemplo: http://www.sernapesca.cl/).

<br/><br/>

<?php
echo formularioURL(
  "URL Compras P&uacute;blicas",
  "La URL del Sistema de Compras P&uacute;blicas ha sido actualizada.",
  "url_mpublico"
);
?>

<br/>
<hr color="#ddddff" />
<br/>

<h2>Generador de página de mensaje (HTML)</h2>

Si la publicaci&oacute;n de esta informaci&oacute;n no aplica a su servicio o no existen antecedentes asociados, ingrese el mensaje jur&iacute;dico correspondiente para generar la p&aacute;gina HTML de respuesta. 
  <br/><br/>
  
<?php

$opciones=array( "No existe informaci&oacute;n asociada a este &iacute;tem" => 'Esta institución no efectúa adquisiciones o contrataciones a través de Mercado Público' );
echo formularioExcepcion($opciones,"Sistema de Compras Públicas","msg_compraspublicas","compraspublicas.html");


echo html_footer();
?>

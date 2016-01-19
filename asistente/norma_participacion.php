<?php

/*require_once "common-url.php";
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


echo html_footer();*/

require_once "common-multi.php";
require_once "common-msg.php";

html_header("Norma General de Participaci&oacute;n Ciudadana");

?>
La siguiente planilla le permitir&aacute; presentar el detalle de la Norma General de Participaci&oacute;n Ciudadana del organismo.
<br/><br/>
Paso 1: Descargue la planilla en alguno de los siguientes formatos:
<ul>
	<li><a href="normaparticipacion.xls" target="_NEW">normaparticipacion.xls</a>,
	formato Microsoft Excel 97/XP.</li>
	<li><a href="normaparticipacion.ods" target="_NEW">normaparticipacion.ods</a>,
	formato OpenOffice Calc 2.0.</li>
	<li><a href="normaparticipacion.csv" target="_NEW">normaparticipacion.csv</a>,
	formato CSV delimitado por punto y comas (;).</li>
</ul>

Paso 2: Complete la planilla con los datos solicitados en cada columna,
de acuerdo a lo dispuesto en el art&iacute;culo 7-j de la ley N&deg; 20.285.
<br/><br/>
Paso 3: Guarde su planilla Microsoft Excel u OpenOffice Calc, en formato CSV.
Los archivos CSV (del ingl&eacute;s <i>comma separated values</i>) son un tipo
de documento sencillo para representar datos en forma de tabla.
<br/><br/>
Paso 4: Presione Examinar y seleccione el archivo CSV.
 <br/><br/>
Paso 5: Presione "Procesar" para acceder a los descargables de "Participaci&oacute;n Ciudadana".
<br/><br/>


<?php
echo formularioMultipagina(
  //Titulo
  "Norma General de Participaci&oacute;n Ciudadana",
  //Msg1
  "A continuaci&oacute;n se listan las p&aacute;ginas generadas con el detalle de la Norma General de Participaci&oacute;n Ciudadana del organismo .",
  //Msg2
  "A continuaci&oacute;n se presenta el detalle de la Norma General de Participaci&oacute;n Ciudadana que este Organismo (".$_SESSION['nombre'].") pone a disposici&oacute;n de
sus usuarios.",
  //Cols
  5,
  //Links
  array(3),
  //archivo
  "norma_participacion",
  //sesion
  "normaparticipacion",
  //volver a
  "index.html",
  "norma_participacion_rep.txt"
);
?>



<br/>

<hr style="color: ddddff;" />


<h2>Generador de p&aacute;gina de mensaje (HTML)</h2>

<p>Si la publicaci&oacute;n de esta informaci&oacute;n no aplica a su servicio,
  ingrese el mensaje jur&iacute;dico correspondiente para generar la p&aacute;gina
HTML de respuesta. </p>
<p><strong>Mensaje de ejemplo</strong>: Esta instituci&oacute;n actualmente no cuenta con Norma General de Participaci&oacute;n Ciudadana.<br/>
<br/>
  

<?php

$opciones=array(
        "No existe informaci&oacute;n asociada a este &iacute;tem" => ($_SESSION['nombre']?$_SESSION['nombre']:'Esta institución')." no ha dictado una norma general de participación ciudadana."
);
echo formularioExcepcion($opciones,"Norma General de Participaci&oacute;n Ciudadana","msg_ciudadana","norma_participacion.html");
html_footer();


?>
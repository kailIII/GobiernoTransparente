<?php

require_once "common-multi.php";

html_header("Auditor&iacute;as al Ejercicio Presupuestario");

?>

La siguiente planilla le permitir&aacute; elaborar el detalle de las
auditor&iacute;as al ejercicio presupuestario realizadas a su organismo.
<br/><br/>
Paso 1: Descargue la planilla en alguno de los siguientes formatos:

<ul>
 <li><a href="auditorias.xls" target="_NEW">auditorias.xls</a>,
 formato Microsoft Excel 97/XP.</li>
 <li><a href="auditorias.ods" target="_NEW">auditorias.ods</a>,
 formato OpenOffice Calc 2.0.</li>
 <li><a href="auditorias.csv" target="_NEW">auditorias.csv</a>,
 formato CSV delimitado por punto y comas (;).</li>
</ul>

Paso 2: Complete la planilla con los datos solicitados en cada columna,
de acuerdo a lo dispuesto en el art&iacute;culo 7-l de la ley N&deg; 20.285.
<br/><br/>
Paso 3: Guarde su planilla Microsoft Excel u OpenOffice Calc, en formato CSV.
Los archivos CSV (del ingl&eacute;s <i>comma separated values</i>) son un tipo
de documento sencillo para representar datos en forma de tabla.
<br/><br/>
Paso 4: Presione Examinar y seleccione el archivo CSV.
<br/><br/>
Paso 5: Presione "Procesar" para acceder a los descargables de "Auditor&iacute;as al Ejercicio Presupuestario".
<br/><br/>


<?php
echo formularioMultipagina(
  //Titulo
  "Auditor&iacute;as al Ejercicio Presupuestario",
  //Msg1
  "A continuaci&oacute;n se listan las p&aacute;ginas generadas con los detalles de las auditor&iacute;as del ejercicio presupuestario.",
  //Msg2
  "A continuaci&oacute;n se presenta el detalle de las auditor&iacute;as al ejercicio presupuestario realizadas a este Organismo (".$_SESSION['nombre'].") por la Contralor&iacute;a General de la Rep&uacute;blica.",
  //Cols
  11,
  //Links
  array(8,10),
  //archivo
  "auditorias",
  //sesion
  "auditorias",
  //volver a
  "../auditorias_historico.html",
  "auditorias_rep.txt"
);
?>


<hr style="color: #ddddff;" />


<h2>Generador de p&aacute;gina de mensaje (HTML)</h2>

<p>Si la publicaci&oacute;n de esta informaci&oacute;n no aplica a su servicio en este periodo de tiempo,
  ingrese el mensaje jur&iacute;dico correspondiente para generar la p&aacute;gina
HTML de respuesta. </p>
<p><strong>Mensaje de ejemplo</strong>: No existen informes de auditor&iacute;as durante este periodo solicitado.<br/>
  <br/>
  
<?php 

$opciones=array( "No existe informaci&oacute;n en el per&iacute;odo" => "Esta institución no ha sido objeto de auditorías durante el período consultado." );
echo formularioExcepcion($opciones,"Auditor&iacute;as al Ejercicio Presupuestario","auditorias","auditorias.html");
  
html_footer(); ?>

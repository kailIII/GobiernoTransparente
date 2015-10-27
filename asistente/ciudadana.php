<?php

require_once "common-multi.php";

html_header("Mecanismos de participaci&oacute;n Ciudadana");

?>


La siguiente planilla le permitir&aacute; presentar el detalle de
los mecanismos de participaci&oacute;n ciudadana con que cuenta su organismo.
<br/><br/>
Paso 1: Descargue la planilla en alguno de los siguientes formatos:
<ul>
 <li><a href="ciudadana.xls" target="_NEW">ciudadana.xls</a>,
 formato Microsoft Excel 97/XP.</li>
 <li><a href="ciudadana.ods" target="_NEW">ciudadana.ods</a>,
 formato OpenOffice Calc 2.0.</li>
 <li><a href="ciudadana.csv" target="_NEW">ciudadana.csv</a>,
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
  "Mecanismos de participaci&oacute;n Ciudadana",
  //Msg1
  "A continuaci&oacute;n se listan las p&aacute;ginas generadas con el detalle de los mecanismos de participaci&oacute;n ciudadana del Organismo.",
  //Msg2
  "A continuaci&oacute;n se presentan los mecanismos de participaci&oacute;n ciudadana que este Organismo (".$_SESSION['nombre'].") pone a disposici&oacute;n de
sus usuarios.",
  //Cols
  8,
  //Links
  array(3,7),
  //archivo
  "ciudadana",
  //sesion
  "participacion_ciudadana",
  //volver a
  "index.html",
  "ciudadana_rep.txt"
);
?>



<br/>

<hr style="color: ddddff;" />


<h2>Generador de p&aacute;gina de mensaje (HTML)</h2>

<p>Si la publicaci&oacute;n de esta informaci&oacute;n no aplica a su servicio,
  ingrese el mensaje jur&iacute;dico correspondiente para generar la p&aacute;gina
HTML de respuesta. </p>
<p><strong>Mensaje de ejemplo</strong>: Esta instituci&oacute;n actualmente no cuenta con mecanismos de participaci&oacute;n ciudadana.<br/>
  <br/>
  

<?php

$opciones=array(
        "No genera informaci&oacute;n" => ($_SESSION['nombre']?$_SESSION['nombre']:'Esta repartición')." no cuenta con mecanismos de participaci&oacute;n ciudadana."
);
echo formularioExcepcion($opciones,"Mecanismos de participaci&oacute;n Ciudadana","participacion_ciudadana","ciudadana.html");
html_footer();

?>

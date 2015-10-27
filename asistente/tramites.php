<?php

require_once "common-multi.php";

html_header("Otros Tr&aacute;mites");

?>

La siguiente planilla le permitir&aacute; elaborar el detalle de los
tr&aacute;mites que presta su organismo que no se encuentren listados en ChileAtiende.
<br/><br/>
Paso 1: Descargue la planilla en alguno de los siguientes formatos:
<ul>
 <li><a href="tramites.xls" target="_NEW">tramites.xls</a>,
 formato Microsoft Excel 97/XP.</li>
 <li><a href="tramites.ods" target="_NEW">tramites.ods</a>,
 formato OpenOffice Calc 2.0.</li>
 <li><a href="tramites.csv" target="_NEW">tramites.csv</a>,
 formato CSV delimitado por punto y comas (;).</li>
</ul>

Paso 2: Complete la planilla con los datos solicitados en cada columna,
de acuerdo a lo dispuesto en el art&iacute;culo 7-h de la ley N&deg; 20.285.
<br/><br/>
Paso 3: Guarde su planilla Microsoft Excel u OpenOffice Calc, en formato CSV.
Los archivos CSV (del ingl&eacute;s <i>comma separated values</i>) son un tipo
de documento sencillo para representar datos en forma de tabla.
<br/><br/>
Paso 4: Presione Examinar y seleccione el archivo CSV.
 <br/><br/>
Paso 5: Presione "Procesar" para acceder a los descargables de "Otros Tr&aacute;mites". 
<br/><br/>


<?php
echo formularioMultipagina(
  //Titulo
  "Otros Tr&aacute;mites",
  //Msg1
  "A continuaci&oacute;n se presentan las p&aacute;ginas generadas a partir del detalle de los tramites que no se encuentran publicados en ChileAtiende.",
  //Msg2
  "A continuaci&oacute;n se presenta el detalle de los tr&aacute;mites que presta este Organismo (".$_SESSION['nombre'].") que no se encuentran publicados en ChileAtiende.",
  //Cols
  13,
  //Links
  array(11,12),
  //archivo
  "tramites",
  //sesion
  "otros_tramites",
  //volver a
  "index.html",
  "tramites_rep.txt"
);
?>


<br/>
<hr style="color: #ddddff;" />
<br/>

<h2>Generador de p&aacute;gina de mensaje (HTML)</h2>

Si la publicaci&oacute;n de esta informaci&oacute;n no aplica a su servicio o en el perido se&ntilde;alado  no ha realizado compras y adquisiciones,
ingrese el mensaje jur&iacute;dico correspondiente para generar la p&aacute;gina
HTML de respuesta.
  <br/><br/>
  
<?php

$opciones=array(
        "No genera informaci&oacute;n" => 'Esta institución no realiza trámites.',
        'Informa a través de ChileAtiende'=>'Esta institución informa todos sus trámites a través del portal ChileAtiende.'
);
echo formularioExcepcion($opciones,"Otros Tr&aacute;mites","otros_tramites","tramites.html"); html_footer(); ?>

<?php

require_once "common-multi.php";

html_header("CSV: Declaraci&oacute;n de patrimonio e intereses de autoridades");

?>

La siguiente planilla le permitir&aacute; elaborar la declaraci&oacute;n de patrimonio e intereses de autoridades.

<br/><br/>
Paso 1: Descargue la planilla en alguno de los siguientes formatos:

<ul>
 <li><a href="patrimonioeintereses.xls" target="_NEW">patrimonioeintereses.xls</a>,
 formato Microsoft Excel 97/XP.</li>
 <li><a href="patrimonioeintereses.ods" target="_NEW">patrimonioeintereses.ods</a>,
 formato OpenOffice Calc 2.0.</li>
 <li><a href="patrimonioeintereses.csv" target="_NEW">patrimonioeintereses.csv</a>,
 formato CSV delimitado por punto y comas (;).</li>
</ul>

Paso 2: Complete la planilla con los datos solicitados en cada columna.
<br/><br/>
Paso 3: Guarde su planilla Microsoft Excel u OpenOffice Calc, en formato CSV.
Los archivos CSV (del ingl&eacute;s <i>comma separated values</i>) son un tipo
de documento sencillo para representar datos en forma de tabla.
<br/><br/>
Paso 4: Presione Examinar y seleccione el archivo CSV.
<br/><br/>
Paso 5: Presione "Procesar" para acceder a los descargables de "Declaraci&oacute;n de patrimonio e intereses de autoridades".
<br/><br/>

<?php
echo formularioMultipagina(
  "Declaraci&oacute;n de patrimonio e intereses de autoridades",
  "A continuaci&oacute;n se presentan las p&aacute;ginas generadas que detallan la declaraci&oacute;n de patrimonio e intereses de autoridades de este Organismo.",
  "A continuaci&oacute;n se presenta la declaraci&oacute;n de patrimonio e intereses de los declarantes.",
  7,array(6),"patrimonioeintereses","patrimonioeintereses","index.html"
);
?>
  

<?php html_footer();?>
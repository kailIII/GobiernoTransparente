<?php

require_once "common-multi.php";

html_header("CSV: Consejos consultivos");

?>

La siguiente planilla le permitir&aacute; elaborar el listado de los consejos consultivos de su organizaci&oacute;n. 

<br/><br/>
Paso 1: Descargue la planilla en alguno de los siguientes formatos:

<ul>
 <li><a href="consejosconsultivos.xls" target="_NEW">consejosconsultivos.xls</a>,
 formato Microsoft Excel 97/XP.</li>
 <li><a href="consejosconsultivos.ods" target="_NEW">consejosconsultivos.ods</a>,
 formato OpenOffice Calc 2.0.</li>
 <li><a href="consejosconsultivos.csv" target="_NEW">consejosconsultivos.csv</a>,
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
Paso 5: Presione "Procesar" para acceder a los descargables de "Consejos consultivos". 
<br/><br/>

<?php
echo formularioMultipagina(
  "Consejos consultivos",
  "A continuaci&oacute;n se presentan las p&aacute;ginas generadas que detallan el consejo consultivo de este Organismo.",
  "A continuaci&oacute;n se presenta el detalle de el consejo consultivo de este Organismo. (".$_SESSION['nombre'].")",
  3,array(),"consejosconsultivos","consejosconsultivos","index.html"
);
?>
  
<?php

html_footer();

?>

<?php

require_once "common-multi.php";

html_header("CSV: Actos y documentos publicados en el Diario Oficial");

?>

La siguiente planilla le permitirá elaborar el listado de normas aplicables a su organización.

<ul><li>
Art. 6: Actos y documentos publicados en el Diario Oficial y aquellos que establezcan funciones, competencias y responsabilidades del órgano.
    </li></ul>
<br/>
Paso 1: Descargue la planilla en alguno de los siguientes formatos:

<ul>
 <li><a href="diariooficial.xls" target="_NEW">diariooficial.xls</a>,
 formato Microsoft Excel 97/XP.</li>
 <li><a href="diariooficial.ods" target="_NEW">diariooficial.ods</a>,
 formato OpenOffice Calc 2.0.</li>
 <li><a href="diariooficial.csv" target="_NEW">diariooficial.csv</a>,
 formato CSV delimitado por punto y comas (;).</li>
</ul>

Paso 2: Complete la planilla con los datos solicitados en cada columna,
de acuerdo a lo dispuesto en el art&iacute;culo 6 de la ley N&deg; 20.285.
<br/><br/>
Paso 3: Guarde su planilla Microsoft Excel u OpenOffice Calc, en formato CSV.
Los archivos CSV (del ingl&eacute;s <i>comma separated values</i>) son un tipo
de documento sencillo para representar datos en forma de tabla.
<br/><br/>
Paso 4: Presione Examinar y seleccione el archivo CSV.
<br/><br/>
Paso 5: Presione "Procesar" para acceder a los descargables de "Actos y documentos publicados en el Diario Oficial". 
<br/><br/>

<?php
echo formularioMultipagina(
  "Actos y documentos publicados en el Diario Oficial",
  "A continuaci&oacute;n se presentan las p&aacute;ginas generadas que detallan los actos y documentos publicados en el Diario Oficial de este Organismo.",
  "A continuación se presentan todos los actos y resoluciones de este Organismo (".$_SESSION['nombre'].") que han sido objeto de publicación en el Diario Oficial.<br /><br />En relación a los actos y documentos publicados a continuación es importante precisar que se indican sólo aquellas modificaciones que hubiesen ocurrido con posterioridad al 1 de julio de 2010. Por lo tanto, en aquellos casos en que se señale que no existen modificaciones, ello no implica necesariamente que ello no hubiese ocurrido con posterioridad a su publicación en el Diario Oficial. Esto en virtud de que esta información corresponde señalarla a partir de la entrada en vigencia de la Instrucción General N°4 de Consejo para la Transparencia.",
  7,array(4,6),"diariooficial","diariooficial","index.html","diariooficial_rep.txt"
);
?>

<br/>
<hr style="color: #ddddff;" />
<br/>

<h2>Generador de p&aacute;gina de mensaje (HTML)</h2>

  
<?php

$opciones=array('No genera información'=>'No existen actos y documentos publicados en el Diario Oficial en el período consultado.' );
echo formularioExcepcion($opciones,"Actos y documentos publicados en el Diario Oficial","diariooficial","diariooficial.html");

html_footer();

?>

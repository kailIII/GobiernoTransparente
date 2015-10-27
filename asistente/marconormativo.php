<?php

require_once "common-multi.php";

html_header("CSV: Marco Normativo aplicable");

?>

La siguiente planilla le permitir&aacute; elaborar el listado de normas aplicables a su organizaci&oacute;n. 

<ul><li>
Art. 7-c: Establece marco normativo aplicable.
    </li></ul>
<br/>
Paso 1: Descargue la planilla en alguno de los siguientes formatos:

<ul>
 <li><a href="marconormativo.xls" target="_NEW">marconormativo.xls</a>,
 formato Microsoft Excel 97/XP.</li>
 <li><a href="marconormativo.ods" target="_NEW">marconormativo.ods</a>,
 formato OpenOffice Calc 2.0.</li>
 <li><a href="marconormativo.csv" target="_NEW">marconormativo.csv</a>,
 formato CSV delimitado por punto y comas (;).</li>
</ul>

Paso 2: Complete la planilla con los datos solicitados en cada columna,
de acuerdo a lo dispuesto en el art&iacute;culo 7c de la ley N&deg; 20.285.
<br/><br/>
Paso 3: Guarde su planilla Microsoft Excel u OpenOffice Calc, en formato CSV.
Los archivos CSV (del ingl&eacute;s <i>comma separated values</i>) son un tipo
de documento sencillo para representar datos en forma de tabla.
<br/><br/>
Paso 4: Presione Examinar y seleccione el archivo CSV.
<br/><br/>
Paso 5: Presione "Procesar" para acceder a los descargables de "Marco normativo". 
<br/><br/>

<?php
echo formularioMultipagina(
  "Marco normativo",
  "A continuaci&oacute;n se presentan las p&aacute;ginas generadas que detallan el marco normativo de este Organismo.",
  "A continuación se presenta el marco normativo aplicable a este Organismo (".$_SESSION['nombre'].").",
  7,array(5),"marconormativo","marconormativo","index.html","marconormativo_rep.txt"
);
?>
  
<?php

html_footer();

?>

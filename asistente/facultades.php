<?php

require_once "common-multi.php";

html_header("CSV: Facultades, funciones y atribuciones de sus unidades u &oacute;rganos internos");

?>

La siguiente planilla le permitir&aacute; elaborar el listado de normas aplicables a su organizaci&oacute;n. 

<ul><li>
Art. 7-b: Establece funciones o atribuciones.
    </li></ul>
<br/>
Paso 1: Descargue la planilla en alguno de los siguientes formatos:

<ul>
 <li><a href="facultades.xls" target="_NEW">facultades.xls</a>,
 formato Microsoft Excel 97/XP.</li>
 <li><a href="facultades.ods" target="_NEW">facultades.ods</a>,
 formato OpenOffice Calc 2.0.</li>
 <li><a href="facultades.csv" target="_NEW">facultades.csv</a>,
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
Paso 5: Presione "Procesar" para acceder a los descargables de "Facultades, funciones y atribuciones de sus unidades u &oacute;rganos internos". 
<br/><br/>

<?php
echo formularioMultipagina(
  "Facultades, funciones y atribuciones de sus unidades u &oacute;rganos internos",
  "A continuaci&oacute;n se presentan las p&aacute;ginas generadas que detallan las facultades, funciones y atribuciones de sus unidades u &oacute;rganos internos de este Organismo.",
  "A continuaci&oacute;n se presenta el detalle de las facultades, funciones y atribuciones de sus unidades u &oacute;rganos internos realizadas por este Organismo (".$_SESSION['nombre'].").",
  5,array(3),"facultades","facultades","index.html","facultades_rep.txt"
);
?>
  
<?php

html_footer();

?>

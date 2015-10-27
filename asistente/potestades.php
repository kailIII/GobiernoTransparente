<?php

require_once "common-multi.php";

html_header("CSV: Potestades, competencias, responsabilidades, funciones, atribuciones y/o tareas");

?>

La siguiente planilla le permitir&aacute; elaborar el listado de normas aplicables a su organizaci&oacute;n. 

<ul><li>
Art. 6: Actos y documentos publicados en el Diario Oficial y aquellos que establezcan funciones, competencias y responsabilidades del órgano.
    </li></ul>

<br/>
Paso 1: Descargue la planilla en alguno de los siguientes formatos:

<ul>
 <li><a href="potestades.xls" target="_NEW">potestades.xls</a>,
 formato Microsoft Excel 97/XP.</li>
 <li><a href="potestades.ods" target="_NEW">potestades.ods</a>,
 formato OpenOffice Calc 2.0.</li>
 <li><a href="potestades.csv" target="_NEW">potestades.csv</a>,
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
Paso 5: Presione "Procesar" para acceder a los descargables de "Potestades, competencias, responsabilidades, funciones, atribuciones y/o tareas". 
<br/><br/>

<?php
echo formularioMultipagina(
  "Potestades, competencias, responsabilidades, funciones, atribuciones y/o tareas",
  "A continuaci&oacute;n se presentan las p&aacute;ginas generadas que detallan las potestades, competencias, responsabilidades, funciones, atribuciones y/o tareas de este Organismo.",
  "A continuación se presenta toda la normativa que establece potestades, competencias, responsabilidades, funciones, atribuciones y/o tareas para este Organismo (".$_SESSION['nombre'].").",
  3,array(2),"potestades","potestades","index.html"
);
?>
  
<?php

html_footer();

?>

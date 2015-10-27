<?php

require_once "common-especial.php";

html_header("CSV: Actos con efectos sobre terceros");

?>

La siguiente planilla le permitir&aacute; elaborar el listado de normas aplicables a su organizaci&oacute;n. 

<ul><li>Art. 7-g: Establece actos y resoluciones con efecto sobre terceros</li></ul>


<br/>
Paso 1: Descargue la planilla en alguno de los siguientes formatos:

<ul>
 <li><a href="terceros.xls" target="_NEW">terceros.xls</a>,
 formato Microsoft Excel 97/XP.</li>
 <li><a href="terceros.ods" target="_NEW">terceros.ods</a>,
 formato OpenOffice Calc 2.0.</li>
 <li><a href="terceros.csv" target="_NEW">terceros.csv</a>,
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
Paso 5: Presione "Procesar" para acceder a los descargables de "Actos con efectos sobre terceros". 
<br/><br/>

<?php
/*
echo formularioMultipagina(
  "Actos con efectos sobre terceros",
  "A continuaci&oacute;n se presentan las p&aacute;ginas generadas que detallan los actos con efectos sobre terceros de este Organismo.",
  "A continuación se presentan los actos y resoluciones de este Organismo (".$_SESSION['nombre'].") que tienen efecto sobre terceros.",
  4,array(3),"terceros","terceros","index.html"
);
 */

echo formularioEspecial('Actos con efectos sobre terceros',
        "A continuación se presentan los actos y resoluciones de este Organismo (".$_SESSION['nombre'].") que tienen efecto sobre terceros.",
        0,
        TRUE,
        10,
        array(9),
        'terceros_index',
        1,
        'Seleccione según tipología',
        'terceros_rep.txt'
        );
?>

<br/>
<hr style="color:#ddddff;" />
<br/>

<h2>Generador de p&aacute;gina de mensaje (HTML)</h2>

  
<?php

$opciones=array('No genera información'=>'Este órgano no ha dictado actos y resoluciones que tengan efectos sobre terceros.' );
echo formularioExcepcion($opciones,"Actos con efectos sobre terceros","terceros","terceros.html");

html_footer();

?>

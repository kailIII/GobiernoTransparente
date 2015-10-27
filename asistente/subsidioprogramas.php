<?php

require_once "common-especial.php";

html_header("Programas de Subsidios y Otros Beneficios");

?>

La siguiente planilla le permitir&aacute; elaborar el detalle de los
programas de subsidio ofrecidos por su organismo.
<br/><br/>
Paso 1: Descargue la planilla en alguno de los siguientes formatos:

<ul>
 <li><a href="subsidioprogramas.xls" target="_NEW">subsidioprogramas.xls</a>,
 formato Microsoft Excel 97/XP.</li>
 <li><a href="subsidioprogramas.ods" target="_NEW">subsidioprogramas.ods</a>,
 formato OpenOffice Calc 2.0.</li>
 <li><a href="subsidioprogramas.csv" target="_NEW">subsidioprogramas.csv</a>,
 formato CSV delimitado por punto y comas (;).</li>
</ul>

Paso 2: Complete la planilla con los datos solicitados en cada columna,
de acuerdo a lo dispuesto en el art&iacute;culo 7-i de la ley N&deg; 20.285.
<br/><br/>
Paso 3: Guarde su planilla Microsoft Excel u OpenOffice Calc, en formato CSV.
Los archivos CSV (del ingl&eacute;s <i>comma separated values</i>) son un tipo
de documento sencillo para representar datos en forma de tabla.
<br/><br/>
Paso 4: Presione Examinar y seleccione el archivo CSV.
<br/><br/>
Paso 5: Presione "Procesar" para acceder a los descargables de "Montos de Subsidio". 
<br/><br/>

<?php
/*
echo formularioMultipagina(
  "Programas de Subsidios y Otros Beneficios",
  "A continuaci&oacute;n se presentan las p&aacute;ginas generadas que detallan los programas de subsidio de este Organismo.",
  "A continuaci&oacute;n se presenta el detalle de los subsidios ofrecidos por este Organismo (".$_SESSION['nombre'].").",
  15,array(3,10,13,14),"subsidio_programas","subsidio_programas","../index.html","subsidioprogramas_rep.txt"
);
 * 
 */

echo formularioEspecial('Programas de Subsidios y Otros Beneficios',
        "A continuaci&oacute;n se presentan las p&aacute;ginas generadas que detallan los programas de subsidio de este Organismo.",
        0,
        TRUE,
        14,
        array(3,9,12,13),
        'subsidio_programas',
        1,
        'Seleccione nombre del subsidio y otros beneficios ',
        'subsidioprogramas_rep.txt'
        );
?>


<br/>
<hr color="#ddddff" />
<br/>

<h2>Generador de p&aacute;gina de mensaje (HTML)</h2>

Si la publicaci&oacute;n de esta informaci&oacute;n no aplica a su servicio o en el perido se&ntilde;alado  no ha realizado compras y adquisiciones,
ingrese el mensaje jur&iacute;dico correspondiente para generar la p&aacute;gina
HTML de respuesta.
  <br/><br/>
  
<?php

$opciones=array(
 "No genera informaci&oacute;n" => ($_SESSION['nombre']?$_SESSION['nombre']:'Esta institución')." no otorga subsidios y otros beneficios."
);
echo formularioExcepcion($opciones,
	"Programas de Subsidios y Otros Beneficios",
	"subsidio_programas",
	"subsidio_programas.html"
);


html_footer();

?>

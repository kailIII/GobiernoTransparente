<?php

require_once "common-especial.php";

html_header("CSV: Horas extraordinarias");

?>

La siguiente planilla le permitir&aacute; elaborar las horas extraordinarias para un trabajador.

<br/><br/>
Paso 1: Descargue la planilla en alguno de los siguientes formatos:

<ul>
 <li><a href="horasextraordinarias_multicarga.xls" target="_NEW">horasextraordinarias_multicarga.xls</a>,
 formato Microsoft Excel 97/XP.</li>
 <li><a href="horasextraordinarias_multicarga.ods" target="_NEW">horasextraordinarias_multicarga.ods</a>,
 formato OpenOffice Calc 2.0.</li>
 <li><a href="horasextraordinarias_multicarga.csv" target="_NEW">horasextraordinarias_multicarga.csv</a>,
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
Paso 5: Presione "Procesar" para acceder a los descargables de "Horas extraordinarias".
<br/><br/>

<?php
echo formularioEspecial('Horas Extraordinarias',
        "A continuación se presenta el detalle del pago de horas extraordinarias de",
        0,
        FALSE,
        8,
        array(),
        'horasextraordinarias',
        0,
        '',
        'horasextraordinarias_multicarga_rep.txt'
        );
?>
  



<?php

html_footer();

?>
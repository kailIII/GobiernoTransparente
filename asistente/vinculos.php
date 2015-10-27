<?php

require_once "common-multi.php";

html_header("CSV: V&iacute;nculos institucionales");

?>


La siguiente planilla le permitir&aacute; presentar las entidades en que
el organismo tenga participaci&oacute;n, representaci&oacute;n e intervenci&oacute;n.
<br/><br/>
Paso 1: Descargue la planilla en alguno de los siguientes formatos:
<ul>
 <li><a href="vinculos.xls" target="_NEW">vinculos.xls</a>,
 formato Microsoft Excel 97/XP.</li>
 <li><a href="vinculos.ods" target="_NEW">vinculos.ods</a>,
 formato OpenOffice Calc 2.0.</li>
 <li><a href="vinculos.csv" target="_NEW">vinculos.csv</a>,
 formato CSV delimitado por punto y comas (;).</li>
</ul>

Paso 2: Complete la planilla con los datos solicitados en cada columna,
de acuerdo a lo dispuesto en el art&iacute;culo 7-m de la ley N&deg; 20.285.
<br/><br/>
Paso 3: Guarde su planilla Microsoft Excel u OpenOffice Calc, en formato CSV.
Los archivos CSV (del ingl&eacute;s <i>comma separated values</i>) son un tipo
de documento sencillo para representar datos en forma de tabla.
<br/><br/>
Paso 4: Presione Examinar y seleccione el archivo CSV.
<br/><br/>
Paso 5: Presione "Procesar" para acceder a los descargables de "V&iacute;nculos Institucionales".
<br/><br/>



<?php
echo formularioMultipagina(
  //Titulo
  "V&iacute;nculos Institucionales",
  //Msg1
  "A continuaci&oacute;n se listan las p&aacute;ginas generadas con la informaci&oacute;n de v&iacute;nculos institucionales suministrada.",
  //Msg2
  "A continuaci&oacute;n se listan los distintos v&iacute;nculos de participaci&oacute;n, representaci&oacute;n e intervenci&oacute;n que este Organismo (".$_SESSION['nombre'].") tiene con otros.",
  //Cols
  7,
  //Links
  array(6),
  //archivo
  "vinculos",
  //sesion
  "vinculos",
  //volver a
  "index.html",
  "vinculos_rep.txt"
);
?>


<br/>
<hr style="color: #ddddff;" />
<br/>

<h2>Generador de p&aacute;gina de mensaje (HTML)</h2>


<?php

$opciones=array('No genera información'=>'Esta institución no tiene participación, representación e intervención en otras entidades.' );
echo formularioExcepcion($opciones,"Vínculos institucionales","vinculos","vinculos.html");

html_footer();

?>
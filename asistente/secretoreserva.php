<?php

require_once "common-multi.php";

html_header("CSV: &Iacute;ndice de actos y documentos calificados como secretos o reservados");

?>

La siguiente planilla le permitir&aacute; elaborar el &iacute;ndice de actos y documentos calificados como secretos o reservados aplicables a su organizaci&oacute;n. 

<br/><br/>
Paso 1: Descargue la planilla en alguno de los siguientes formatos:

<ul>
 <li><a href="secretoreserva.xls" target="_NEW">secretoreserva.xls</a>,
 formato Microsoft Excel 97/XP.</li>
 <li><a href="secretoreserva.ods" target="_NEW">secretoreserva.ods</a>,
 formato OpenOffice Calc 2.0.</li>
 <li><a href="secretoreserva.csv" target="_NEW">secretoreserva.csv</a>,
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
Paso 5: Presione "Procesar" para acceder a los descargables de "&Iacute;ndice de actos y documentos calificados como secretos o reservados". 
<br/><br/>

<?php
echo formularioMultipagina(
  "&Iacute;ndice de actos y documentos calificados como secretos o reservados",
  "A continuaci&oacute;n se presentan las p&aacute;ginas generadas que detallan el &Iacute;ndice de actos y documentos calificados como secretos o reservados de este Organismo.",
  "A continuaci&oacute;n se presenta el &iacute;ndice de actos y documentos calificados como secretos o reservados realizadas por este Organismo (".$_SESSION['nombre'].").",
  6,array(5),"secretoreserva","secretoreserva","index.html"
);
?>
  
<br/>
<hr style="color: #ddddff;" />
<br/>

<h2>Generador de p&aacute;gina de mensaje (HTML)</h2>


<?php

$opciones=array('No genera información'=>'No existen actos o documentos declarados secretos o reservados, en virtud de lo señalado por el Consejo para la Transparencia en su Instrucción General N°3. De acuerdo a dicha instrucción las resoluciones deberán incorporarse una vez que se encuentren firmes, es decir, cuando:

a)	Habiendo transcurrido el plazo para presentar la reclamación a que se refiere el artículo 24 de la Ley, esta no se hubiere presentado;

b)	Habiéndose presentado la reclamación anterior, el Consejo hubiere denegado el acceso a la información sin que se interpusiere el reclamo de ilegalidad en el plazo contemplado en el artículo 28 de la Ley, o

c)	Habiéndose presentado el reclamo de ilegalidad, la Corte de Apelaciones confirmare la resolución denegatoria del órgano o servicio de la Administración del Estado' );
echo formularioExcepcion($opciones,"&Iacute;ndice de actos y documentos calificados como secretos o reservados","secretoreserva","secretoreserva.html");

html_footer();

?>
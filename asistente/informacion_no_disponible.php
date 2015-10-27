<?php

require_once "common-multi.php";

html_header("CSV: Informaci&oacute;n no disponible en poder del servicio");

?>

<p>
	La siguiente plantilla  permite elaborar el listado de  informaci&oacute;n que no obra en poder del servicio, dando cumplimiento al punto 2.3 de la Instrucci&oacute;n General N° 10
</p>
<p>
	<strong>Buena Pr&aacute;ctica:</strong> “Se considerar&aacute; buena pr&aacute;ctica que los &oacute;rganos dispongan de un registro al que incorporen el acto administrativo en virtud del cual se notifique al solicitante que la informaci&oacute;n no obra en su poder, como consecuencia de la expurgaci&oacute;n de los respectivos documentos o de la b&uacute;squeda infructuosa, a que se refieren los literales a) y b) precedentes, individualizando el acto administrativo correspondiente y la descripci&oacute;n de la informaci&oacute;n inexistente. Se recomienda que dicho registro sea publicado en el banner de Transparencia Activa del &oacute;rgano.”
</p>
<p>
	<strong>Importante:</strong> Si la Instituci&oacute;n no  adhiere a esta buena pr&aacute;ctica NO debe utilizar la planilla.
</p>
Paso 1: Descargue la planilla en alguno de los siguientes formatos:

<ul>
 <li><a href="informacion_no_disponible.xls" target="_NEW">informacion_no_disponible.xls</a>,
 formato Microsoft Excel 97/XP.</li>
 <li><a href="informacion_no_disponible.ods" target="_NEW">informacion_no_disponible.ods</a>,
 formato OpenOffice Calc 2.0.</li>
 <li><a href="informacion_no_disponible.csv" target="_NEW">informacion_no_disponible.csv</a>,
 formato CSV delimitado por punto y comas (;).</li>
</ul>

Paso 2: Complete esta planilla con los datos solicitados en la Instrucci&oacute;n General N° 10, de acuerdo a lo se&ntilde;alado en el <a href="oficios/anexotecnico_cpyt.pdf">Anexo T&eacute;cnico</a> de la Comisi&oacute;n de Probidad y Transparencia.
<br/><br/>
Paso 3: Guarde su planilla Microsoft Excel u OpenOffice Calc, en formato CSV.
Los archivos CSV (del ingl&eacute;s <i>comma separated values</i>) son un tipo
de documento sencillo para representar datos en forma de tabla.
<br/><br/>
Paso 4: Presione Examinar y seleccione el archivo CSV.
<br/><br/>
Paso 5: Presione "Procesar" para acceder a los descargables de "Informaci&oacute;n no disponible en poder del servicio". 
<br/><br/>

<?php
echo formularioMultipagina(
  "Informaci&oacute;n no disponible en poder del servicio",
  "La informaci&oacute;n contenida en esta planilla constituye una Buena Pr&aacute;ctica en virtud de la Instrucci&oacute;n General N° 10 del Consejo para la Transparencia.",
  "La informaci&oacute;n contenida en esta planilla constituye una Buena Pr&aacute;ctica en virtud de la Instrucci&oacute;n General N° 10 del Consejo para la Transparencia.<br/><br/>A continuaci&oacute;n se individualiza la informaci&oacute;n que no obra en poder de este Organismo (".$_SESSION['nombre']."), como consecuencia del expurgo de los documentos se&ntilde;alados en el acta correspondiente o en su defecto del resultado de una b&uacute;squeda infructuosa, ambas en conformidad a lo estipulado en la Instrucci&oacute;n General N° 10 del Consejo para la Transparencia.",
  5,array(4),"informacion_no_disponible","informacion_no_disponible","index.html"
);
?>
  
<?php

html_footer();

?>

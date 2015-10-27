<?php

require_once "common-especial.php";
require_once "common.php";

html_header("CSV: Registro de respuestas de solicitudes");

?>
<p>
La siguiente plantilla permite elaborar el listado de informaci&oacute;n que no obra en poder del servicio, dando cumplimiento al punto 2.3 de la Instrucci&oacute;n General N° 10
</p>
<p>
<strong>Buena Pr&aacute;ctica:</strong> "Se considerar&aacute; buena pr&aacute;ctica que los &oacute;rganos dispongan de un registro al que incorporen el acto administrativo en virtud del cual se notifique al solicitante que la informaci&oacute;n no obra en su poder, como consecuencia de la expurgaci&oacute;n de los respectivos documentos o de la b&uacute;squeda infructuosa, a que se refieren los literales a) y b) precedentes, individualizando el acto administrativo correspondiente y la descripci&oacute;n de la informaci&oacute;n inexistente. Se recomienda que dicho registro sea publicado en el banner de Transparencia Activa del &oacute;rgano."
</p>
<p>
<strong>Importante:</strong> Si la Instituci&oacute;n no adhiere a esta buena pr&aacute;ctica NO debe utilizar la planilla.
</p>
Paso 1: Descargue la planilla en alguno de los siguientes formatos:

<ul>
 <li><a href="registro_respuestas_solicitudes.xls" target="_NEW">registro_respuestas_solicitudes.xls</a>,
 formato Microsoft Excel 97/XP.</li>
 <li><a href="registro_respuestas_solicitudes.ods" target="_NEW">registro_respuestas_solicitudes.ods</a>,
 formato OpenOffice Calc 2.0.</li>
 <li><a href="registro_respuestas_solicitudes.csv" target="_NEW">registro_respuestas_solicitudes.csv</a>,
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
Paso 5: Presione "Procesar" para acceder a los descargables de "Registro de respuestas de solicitudes". 
<br/><br/>

<?php
/*echo formularioMultipagina(
  "Registro de respuestas de solicitudes",
  "La informaci&oacute;n contenida en esta planilla constituye una Buena Pr&aacute;ctica en virtud de la Instrucci&oacute;n General N° 10 del Consejo para la Transparencia.",
  "A continuaci&oacute;n se presenta un listado de respuestas de solicitudes de Acceso a la Informaci&oacute;n P&uacute;blica realizadas a este Organismo (".$_SESSION['nombre']."). Se excluyen del listado informaci&oacute;n que hubiese sido entregada exclusivamente en atenci&oacute;n a la persona del peticionario, por ejemplo, cuando lo solicitado sean datos sensibles y el solicitante es el titular de esos datos.",
  5,array(),"registro_respuestas_solicitudes","registro_respuestas_solicitudes","index.html"
);
*/

echo formularioEspecial('Registro de respuestas de solicitudes',
        "La informaci&oacute;n contenida en esta planilla constituye una Buena Pr&aacute;ctica en virtud de la Instrucci&oacute;n General N° 10 del Consejo para la Transparencia.<br />
        	A continuaci&oacute;n se presenta un listado de respuestas de solicitudes de Acceso a la Informaci&oacute;n P&uacute;blica realizadas a este Organismo (".$_SESSION['nombre']."). Se excluyen del listado informaci&oacute;n que hubiese sido entregada exclusivamente en atenci&oacute;n a la persona del peticionario, por ejemplo, cuando lo solicitado sean datos sensibles y el solicitante es el titular de esos datos.",
        0,
        TRUE,
        5,
        array(4),
        'registro_respuestas_solicitudes',
        1,
        'Seleccione seg&uacute;n materia',
        'registro_respuestas_solicitudes_rep.txt'
        );
echo '<br />';
echo html_button($_SESSION['back']);

html_footer();

?>

<?php

require_once "common-multi.php";
require_once "common-url.php";

html_header("CSV: Direcciones de oficinas de atenci&oacute;n");

?>
<p>
	Definir texto para las direcciones de las oficina de atenci&oacute;n
</p>
Paso 1: Descargue la planilla en alguno de los siguientes formatos:

<ul>
 <li><a href="oficinas_atencion.xls" target="_NEW">oficinas_atencion.xls</a>,
 formato Microsoft Excel 97/XP.</li>
 <li><a href="oficinas_atencion.ods" target="_NEW">oficinas_atencion.ods</a>,
 formato OpenOffice Calc 2.0.</li>
 <li><a href="oficinas_atencion.csv" target="_NEW">oficinas_atencion.csv</a>,
 formato CSV delimitado por punto y comas (;).</li>
</ul>

Paso 2: Complete esta planilla con los datos solicitados en la Instrucci&oacute;n General N° 10, 
de acuerdo a lo señalado en el <a href="oficios/anexotecnico_cpyt.pdf">Anexo T&eacute;cnico</a> 
de la Comisi&oacute;n de Probidad y Transparencia.

<br/><br/>
Paso 3: Guarde su planilla Microsoft Excel u OpenOffice Calc, en formato CSV.
Los archivos CSV (del ingl&eacute;s <i>comma separated values</i>) son un tipo
de documento sencillo para representar datos en forma de tabla.
<br/><br/>
Paso 4: Presione Examinar y seleccione el archivo CSV.
<br/><br/>
Paso 5: Presione "Procesar" para acceder a los descargables de "Direcciones de oficinas de atenci&oacute;n". 
<br/><br/>

<?php
echo formularioMultipagina(
  "Direcciones de oficinas de atenci&oacute;n",
  "Direcciones de oficinas de atenci&oacute;n",
  "A continuaci&oacute;n se presenta el listado de oficinas de atenci&oacute;n de este Organismo (".$_SESSION['nombre'].") que reciben solicitudes de acceso a la informaci&oacute;n p&uacute;blica.",
  5,array(),"oficinas_atencion","oficinas_atencion","index.html","oficinas_atencion_rep.txt", NULL, array(), array(), false
);
?>
<hr>
<p>
	En el caso que su instituci&oacute;n cuente con una p&aacute;gina web con la informaci&oacute;n correspondiente a las direcciones de oficinas de atenci&oacute;n, ingrese la URL en este campo.
</p>

<?php
echo formularioURL(
  "CSV: Direcciones de oficinas de atenci&oacute;n",
  "La URL de las direcciones de oficinas de atenci&oacute;n ha sido actualizada.",
  "url_oficinas_atencion",
  "(Ej. 'http://www.dominioservicio/oficinas_de_atencion.html' )"
);
?>

<?php

html_footer();

?>

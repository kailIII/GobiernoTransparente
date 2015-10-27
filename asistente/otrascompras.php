<?php

require_once "common-multi.php";

html_header("CSV: Otras compras y adquisiciones");

?>

La siguiente planilla le permitir&aacute; elaborar el detalle de las compras y
adquisiciones realizadas por su organismo que no se encuentren listadas
en el Sistema de Compras P&uacute;blicas.
<br/><br/>
Paso 1: Descargue la planilla en alguno de los siguientes formatos:

<ul>
 <li><a href="otrascompras.xls" target="_NEW">otrascompras.xls</a>,
 formato Microsoft Excel 97/XP.</li>
 <li><a href="otrascompras.ods" target="_NEW">otrascompras.ods</a>,
 formato OpenOffice Calc 2.0.</li>
 <li><a href="otrascompras.csv" target="_NEW">otrascompras.csv</a>,
 formato CSV delimitado por punto y comas (;).</li>
</ul>

Paso 2: Complete la planilla con los datos solicitados en cada columna,
de acuerdo a lo dispuesto en el art&iacute;culo 7-e de la ley N&deg; 20.285.
<br/><br/>
Paso 3: Guarde su planilla Microsoft Excel u OpenOffice Calc, en formato CSV.
Los archivos CSV (del ingl&eacute;s <i>comma separated values</i>) son un tipo
de documento sencillo para representar datos en forma de tabla.
<br/><br/>
Paso 4: Presione Examinar y seleccione el archivo CSV.
<br/><br/>
Paso 5: Presione "Procesar" para acceder a los descargables de "Otras Compras". 
<br/><br/>

<?php
echo formularioMultipagina(
  "Otras compras y adquisiciones",
  "A continuaci&oacute;n se presentan las p&aacute;ginas generadas que detallan las compras y adquisiciones de este Organismo.",
  "A continuaci&oacute;n se presenta el detalle de las compras y contrataciones realizadas por este Organismo (".$_SESSION['nombre'].") que no se encuentran listadas en el Sistema de Compras P&uacute;blicas.",
  16,array(13,14),"otras_compras","otras_compras","../otrascompras_historico.html","otrascompras_rep.txt"
);
?>

<br/>
<hr style="color: #ddddff;" />
<br/>

<h2>Generador de p&aacute;gina de mensaje (HTML)</h2>

Si la publicaci&oacute;n de esta informaci&oacute;n no aplica a su servicio o en el perido se&ntilde;alado  no ha realizado compras y adquisiciones,
ingrese el mensaje jur&iacute;dico correspondiente para generar la p&aacute;gina
HTML de respuesta.
  <br/><br/>
  
<?php

$opciones=array( "No se ha realizado compras" => "Esta institución no ha realizado otras adquisiciones o contrataciones en el período consultado.",
		'No efectúa otras compras'=>'Esta institución no efectúa adquisiciones o contrataciones no sometidas al Sistema de Compras Públicas.',
                'No efectúa compras'=>'Esta institución no efectúa adquisiciones o contrataciones.');
echo formularioExcepcion($opciones,"Otras Compras","otras_compras","otras_compras.html");

html_footer();

?>

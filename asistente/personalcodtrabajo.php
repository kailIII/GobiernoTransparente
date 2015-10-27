<?php

require_once "common-multi.php";

html_header("CSV: Otras contrataciones sujetas al C&oacute;digo del Trabajo");

?>


La siguiente planilla le permitir&aacute; presentar la
dotaci&oacute;n de personal que no pertenece a planta,
contrata ni honorarios.
<br/><br/>
Paso 1: Descargue la planilla en alguno de los siguientes formatos:
<ul>
 <li><a href="personalcodtrabajo.xls" target="_NEW">personalcodtrabajo.xls</a>,
 formato Microsoft Excel 97/XP.</li>
 <li><a href="personalcodtrabajo.ods" target="_NEW">personalcodtrabajo.ods</a>,
 formato OpenOffice Calc 2.0.</li>
 <li><a href="personalcodtrabajo.csv" target="_NEW">personalcodtrabajo.csv</a>,
 formato CSV delimitado por punto y comas (;).</li>
</ul>

Paso 2: Complete la planilla con los datos solicitados en cada columna,
de acuerdo a lo dispuesto en el art&iacute;culo 7-d de la ley N&deg; 20.285.
<br/><br/>
Paso 3: Guarde su planilla Microsoft Excel u OpenOffice Calc, en formato CSV.
Los archivos CSV (del ingl&eacute;s <i>comma separated values</i>) son un tipo
de documento sencillo para representar datos en forma de tabla.
<br/><br/>
Paso 4: Presione Examinar y seleccione el archivo CSV.
<br/><br/>
Paso 5: Presione "Procesar" para acceder a los descargables de "Otras contrataciones".
<br/><br/>



<?php
echo formularioMultipagina(
  //Titulo
  "Otras contrataciones sujetas al C&oacute;digo del Trabajo",
  //Msg1
  "A continuaci&oacute;n se listan las p&aacute;ginas generadas con la informaci&oacute;n de otras contrataciones.",
  //Msg2
  "A continuaci&oacute;n se presenta la dotaci&oacute;n de personal que tiene este Organismo (".$_SESSION['nombre'].")
   que no corresponde a planta, contrata ni honorarios.<br /><br />En la información publicada en los meses de febrero y marzo no se considera la asignación de modernización, pues el monto de sus componentes por desempeño institucional y colectivo sólo se determinará en marzo de 2013. En consecuencia, dicha asignación se informará sólo a partir de la actualización de abril.",
  //Cols
  14,
  //Links
  array(10),
  //archivo
  "per_otros",
  //sesion
  "personal_otros",
  //indice
  "../codtrabajo_historico.html",
  //reemplazo headers
  "per_otros_rep.txt",
'Nota:
    
(i) En la información publicada en los meses de febrero y marzo no se considera la asignación de modernización, pues el monto de sus componentes por desempeño institucional y colectivo sólo se determinará en marzo de 2013. En consecuencia, dicha asignación se informará sólo a partir de la actualización de abril.

(1) El funcionario no ha percibido pago de asignaciones especiales durante el período informado.
(2) Asignación de Antigüedad (Bienio)
(3) Asignación de Alta Dirección Pública
(4) Asignación de  Dirección Superior
(5) Asignación de Funciones Críticas
(6) Asignación de Zona',
       array('Si'),array('No')

);



?>

<hr color="#ddddff" />
<br/>

<h2>Generador de p&aacute;gina de mensaje (HTML)</h2>

Si la publicaci&oacute;n de esta informaci&oacute;n no aplica a su servicio,
ingrese el mensaje jur&iacute;dico correspondiente para generar la p&aacute;gina
HTML de respuesta.
  <br/><br/>


<?php

$opciones=array(
 "No hay contrataciones"=>"Este servicio no tiene personal sujeto al Código del Trabajo en el periodo informado.",
);
echo formularioExcepcion($opciones,"Otras contrataciones sujetas al C&oacute;digo del Trabajo","personal_otros","per_otros.html");


html_footer(); ?>

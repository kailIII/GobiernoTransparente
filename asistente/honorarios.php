<?php

require_once "common-multi.php";

html_header("CSV: Generador de personal a honorarios");

?>


La siguiente planilla le permitir&aacute; elaborar el listado de la dotaci&oacute;n de personal de su organizaci&oacute;n.
<br/><br/>
Art. 7-d: Personal de Honorarios, con sus correspondientes remuneraciones.
<br/><br/>
Paso 1: Descargue la planilla en alguno de los siguientes formatos :
<ul>
 <li><a href="honorarios.xls" target="_NEW">honorarios.xls</a>,
 formato Microsoft Excel 97/XP.</li>
 <li><a href="honorarios.ods" target="_NEW">honorarios.ods</a>,
 formato OpenOffice Calc 2.0.</li>
 <li><a href="honorarios.csv" target="_NEW">honorarios.csv</a>,
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
Paso 5: Presione "Procesar" para acceder a los descargables de "Dotaci&oacute;n de Personal a Honorarios". 
<br/><br/>

<?php
echo formularioMultipagina(
  "Dotaci&oacute;n a Honorarios",
  "A continuaci&oacute;n se presentan las p&aacute;ginas generadas que listan la dotación de personal a honorarios de este Organismo.",
  "A continuaci&oacute;n se presentan las contrataciones a honorarios de este Organismo (".$_SESSION['nombre'].").",
  13,array(),"per_honorarios","personal_honorarios","../honorarios_historico.html",'per_honorarios_rep.txt',""
        );
?>

<br/><br/>


<hr color="blue">
<br/>

<h2>Generador de p&aacute;gina de mensaje (HTML)</h2>

<?php

$opciones=array(
'No genera informaci&oacute;n'=>'Este servicio no tiene personas contratadas a honorarios en el periodo informado.'
/*
 "No disponible: art. 436, C&oacute;digo de Justicia Militar"
   => "La informaci&oacute;n referida a esta materia se encuentra limitada seg&uacute;n lo dispuesto por el art&iacute;culo 436 del C&oacute;digo de Justicia Militar.",
 "No disponible: secreto o reserva seg&uacute;n ley N&deg; 20.285"
   => "La informaci&oacute;n referida a esta materia se encuentra bajo causal de secreto o reserva seg&uacute;n los t&eacute;rminos de la ley N&deg; 20.285."
*/
);
echo formularioExcepcion($opciones,"Dotaci&oacute;n a Honorarios","personal_honorarios","per_honorarios.html");

?>



<?php  html_footer(); ?>

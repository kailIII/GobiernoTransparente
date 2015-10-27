<?php

require_once "common-msg.php";
require_once "common-multi.php";

html_header("CSV: Generador de remuneraciones seg&uacute;n estamentos, grados o jornadas");

?>




La siguiente planilla le permitir&aacute; elaborar la tabla de
remuneraciones para la dotaci&oacute;n de planta y contrata,
de acuerdo a su grado.
<br/><br/>
Art. 7-d: Planta y contrata, remuneraciones.
<br/><br/>
Paso 1: Descargue las planilla :
<ul>
 <li><a href="remuneraciones.xls" target="_NEW">remuneraciones.xls</a>,
 formato Microsoft Excel 97/XP.</li>
  <li><a href="bienios.xls" target="_NEW">bienios.xls</a>,
 formato Microsoft Excel 97/XP.</li>
   <li><a href="incentivos.xls" target="_NEW">incentivos.xls</a>,
 formato Microsoft Excel 97/XP.</li>

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
Paso 5: Presione "Procesar" para acceder a los descargables de
"Tabla de remuneraciones asignada a planta y contrata". 
<br/><br/>


 <form method='post' action='remuneraciones-b.php' enctype='multipart/form-data'>
     <label style="display: inline-block; width:100px;">Remuneraciones</label>
   <input type='file' name='archivo_remuneraciones' />
   <select name='tipo_remuneraciones'>
     <option value='excel' selected>CSV generado por Excel</option>
     <option value='calc'>CSV generado por OpenOffice</option>
   </select>
   <br/>
   <label style="display: inline-block; width:100px;">Bienios</label>
   <input type='file' name='archivo_bienios' />
   <select name='tipo_bienios'>
     <option value='excel' selected>CSV generado por Excel</option>
     <option value='calc'>CSV generado por OpenOffice</option>
   </select>
   <br/>
   <label style="display: inline-block; width:100px;">Incentivos</label>
   <input type='file' name='archivo_incentivos' />
   <select name='tipo_incentivos'>
     <option value='excel' selected>CSV generado por Excel</option>
     <option value='calc'>CSV generado por OpenOffice</option>
   </select>
   <br/>
   <!-- <input type='button' value='Volver' onclick='location.href=\"main.php\";' /> -->
   <input type='submit' value='Procesar' />

  <br/><br/>
 </form>
<?=html_button($_SESSION['back'])?>

<?php
/*
echo formularioMultipagina(
  "Escala de Remuneraciones de ".$_SESSION['nombre'],
  "A continuaci&oacute;n se presentan las p&aacute;ginas generadas que detallan las remuneraciones asignadas a planta y contrata.",
  "A continuaci&oacute;n se presenta el detalle de las remuneraciones de planta y contrata de este Organismo (".$_SESSION['nombre']."), seg&uacute;n estamento, grado o jornada.",
  99,array(),"per_remuneraciones","remuneraciones","../index.html","",
  "<ol>
<li>La presente Escala comprende la suma mensual de las
 contraprestaciones en dinero que para cada grado (o contrato
 por jornadas) debe recibir un funcionario en raz&oacute;n de
 su empleo o funci&oacute;n pagadas habitual y  permanentemente,
 sin los descuentos legales que correspondan (remuneraci&oacute;n
 bruta).</li>
<li>No se contemplan las contraprestaciones eventuales y
 accidentales y afectas a fines determinados, tales como: la
 asignaci&oacute;n familiar, los aguinaldos y horas extraordinarias,
 cuando no tienen car&aacute;cter de permanentes, y ciertos
 derechos estatuarios que constituyen beneficios indemnizatorios,
 como los vi&aacute;ticos y el bono de escolaridad. Esto de
 acuerdo a lo establecido por la Contralor&iacute;a General de la
 Rep&uacute;blica (entre otros, dictamen N&deg;25.275 de 2005).</li>
<li>Asimismo, no se consignan aquellas prestaciones que
 correspondan en atenci&oacute;n a la situaci&oacute;n personal
 de cada funcionario, tales como los bienios (antiguedad).</li>
<li>Para las asignaciones que no son pagadas mensualmente, se ha
 calculado un promedio mensual para cada grado (asignaci&oacute;n
 mensualizada).</li>
</ol>" );
 */
?>

<br/>
<hr color="#ddddff" />
<br/>

<h2>Generador de p&aacute;gina de mensaje (HTML)</h2>

Si la publicaci&oacute;n de esta informaci&oacute;n no aplica a su servicio,
ingrese el mensaje jur&iacute;dico correspondiente para generar la p&aacute;gina
HTML de respuesta.
  <br/><br/>



<?php

$opciones=array( 
 "No disponible: art. 436, C&oacute;digo de Justicia Militar"
   => "La informaci&oacute;n referida a esta materia se encuentra limitada seg&uacute;n lo dispuesto por el art&iacute;culo 436 del C&oacute;digo de Justicia Militar.",
 "No disponible: secreto o reserva seg&uacute;n ley N&deg; 20.285"
   => "La informaci&oacute;n referida a esta materia se encuentra bajo causal de secreto o reserva seg&uacute;n los t&eacute;rminos de la ley N&deg; 20.285.",
 "No disponible: otros motivos"=>'Este servicio no tiene escala de remuneraciones.'
);
echo formularioExcepcion($opciones,"Tabla de remuneraciones asignada a estamentos, grados o jornadas","remuneraciones","per_remuneraciones.html");

html_footer();
?>

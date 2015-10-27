<?php

require_once "common-msg.php";

html_header("CSV: Generador de Planta y Contrata");

?>


La siguiente planilla le permitir&aacute; elaborar el listado de la dotaci&oacute;n de personal de su organizaci&oacute;n.
<br/><br/>
Art. 7-d: La planta del personal y el personal a contrata.
<br/><br/>
Paso 1: Descargue la planilla en alguno de los siguientes formatos:
<ul>
 <li><a href="plantaycontrata.xls" target="_NEW">plantaycontrata.xls</a>,
 formato Microsoft Excel 97/XP.</li>
 <li><a href="plantaycontrata.ods" target="_NEW">plantaycontrata.ods</a>,
 formato OpenOffice Calc 2.0.</li>
 <li><a href="plantaycontrata.csv" target="_NEW">plantaycontrata.csv</a>,
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
Paso 5: Presione "Procesar" para acceder a los descargables de "Dotaci&oacute;n de Personal de Planta y Contrata". 
<br/><br/>
<strong>Nota:</strong> En caso de que no exista información de horas extraordinarias para la columna ("Horas extraordinarias - enlace") el campo se debe llenar con el símbolo – (guión) y el sistema automáticamente se encargará de publicar el mensaje “NO”.<br />
 <br />
Ante cualquier otro texto ingresado, el sistema se asumirá que es un enlace al documento en donde se encuentra publicada la información de horas extraordinarias.<br />
<br />

<form method="post" action="plantaycontrata-b.php" enctype="multipart/form-data">
 <input type="file" name="archivo" />
 <select name="tipo">
  <option value="excel" selected>CSV generado por Excel</option>
  <option value="calc">CSV generado por OpenOffice</option>
 </select><br/>
 <br />
 Notas a pie de página:
 <br />
 <textarea rows="10" cols="60" name="footnotes">
Notas:

(i) En la información publicada en los meses de febrero y marzo no se considera la asignación de modernización, pues el monto de sus componentes por desempeño institucional y colectivo sólo se determinará en marzo de 2013. En consecuencia, dicha asignación se informará sólo a partir de la actualización de abril.

(1) El funcionario no ha percibido pago de asignaciones especiales durante el periodo informado.
(2) Asignación de Antigüedad (Bienio)
(3) Asignación de Alta Dirección Pública
(4) Asignación de Dirección Superior
(5) Asignación de Funciones Críticas
(6) Asignación de Zona
 </textarea>
 <br /><br />
 <input type="submit" value="Procesar" />
</form>
<br/><br/>
<?php echo html_button($_SESSION['back']); ?>

<br/><br/>


<hr color="blue">
<br/>

<table width="100%" border="0">
<tr>
<td width="50%" valign="top">

<h2>Generador de p&aacute;gina de mensaje<br/>
para dotaci&oacute;n de planta (HTML)</h2>

<?php

$opciones=array(
	'No genera informaci&oacute;n' => 'Este servicio no tiene personal de planta en el periodo informado.'
/* "No disponible: art. 436, C&oacute;digo de Justicia Militar"
   => "La informaci&oacute;n referida a esta materia se encuentra limitada seg&uacute;n lo dispuesto por el art&iacute;culo 436 del C&oacute;digo de Justicia Militar.",
 "No disponible: secreto o reserva seg&uacute;n ley N&deg; 20.285"
   => "La informaci&oacute;n referida a esta materia se encuentra bajo causal de secreto o reserva seg&uacute;n los t&eacute;rminos de la ley N&deg; 20.285."
*/
);
echo formularioExcepcion($opciones,"Dotaci&oacute;n de Planta","personal_planta","per_planta.html");

?>

</td>
<td width="50%" valign="top">

<h2>Generador de p&aacute;gina de mensaje<br/>
para dotaci&oacute;n a contrata (HTML)</h2>

<!-- Copiado del anterior, generado en HTML -->
<form method='post' action='msg-proc.php' name='frm2'>

 <input type='hidden' name='titulo' value='Dotaci&oacute;n a Contrata' />
 <input type='hidden' name='sv' value='personal_contrata' />
 <input type='hidden' name='archivo' value='per_contrata.html' />

 Textos predefinidos: &nbsp; 
 <select name='sel' onchange='frm2.texto.value=frm2.sel.value;'>
  <option value=''>-- Elija un texto --</option>
  <option value="Este servicio no tiene personal a contrata en el periodo informado.">No genera informaci&oacute;n</option>
 </select><br/>

 <textarea name="texto" cols="40" rows="6"></textarea><br/>
 <input type="submit" value="Procesar" />
</form>

</td>
</tr>
</table>


<?php  html_footer(); ?>

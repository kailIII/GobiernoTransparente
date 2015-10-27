<?php

require_once "common-multi.php";

html_header("N&oacute;mina de Beneficiarios de Programas Sociales
en Ejecuci&oacute;n");

?>

La siguiente planilla le permitir&aacute; elaborar el detalle de las
n&oacute;minas de beneficiarios de subsidios entregados por su Organismo.
<br/><br/>
Paso 1: Descargue la planilla en alguno de los siguientes formatos:

<ul>
 <li><a href="subsidionominas.xls" target="_NEW">subsidionominas.xls</a>,
 formato Microsoft Excel 97/XP.</li>
 <li><a href="subsidionominas.ods" target="_NEW">subsidionominas.ods</a>,
 formato OpenOffice Calc 2.0.</li>
 <li><a href="subsidionominas.csv" target="_NEW">subsidionominas.csv</a>,
 formato CSV delimitado por punto y comas (;).</li>
</ul>

Paso 2: Complete la planilla con los datos solicitados en cada columna,
de acuerdo a lo dispuesto en el art&iacute;culo 7-i de la ley N&deg; 20.285.
<br/><br/>
Paso 3: Guarde su planilla Microsoft Excel u OpenOffice Calc, en formato CSV.
Los archivos CSV (del ingl&eacute;s <i>comma separated values</i>) son un tipo
de documento sencillo para representar datos en forma de tabla.
<br/><br/>
Paso 4: Presione Examinar y seleccione el archivo CSV.
<br/><br/>
Paso 5: Presione "Procesar" para acceder a los descargables de
"N&oacute;minas de Beneficiarios de Subsidios".
<br/><br/>

<?php
echo formularioMultipagina(
  "N&oacute;mina de Beneficiarios de Programas Sociales en Ejecuci&oacute;n",
  "A continuaci&oacute;n se presentan las p&aacute;ginas generadas que detallan las n&oacute;minas de beneficiarios de los programas sociales en ejecución.",
  "A continuaci&oacute;n se presenta la n&oacute;mina de beneficiarios de los programas sociales en ejecución entregados por este Organismo (".$_SESSION['nombre'].").",
  9,array(),"subsidio_nominas","subsidio_nominas","javascript:history.go(-1);","subsidionominas_rep.txt"
);
?>


<br/><br/>


<hr style="color: blue;">
<br/>

<table width="100%" border="0">
<tr>
<td width="50%" valign="top">

<h2>Generador de p&aacute;gina de mensaje<br/>
para nómina de beneficiarios (HTML)</h2>

<form name="frm_subsidionominas" action="msg-proc.php" method="post">

 <input type="hidden" value="Nómina de beneficiarios" name="titulo">
 <input type="hidden" value="subsidionominas" name="sv">
 <input type="hidden" value="subsidionominas.html" name="archivo">

 Textos predefinidos: &nbsp;
 <select onchange="frm_subsidionominas.texto.value=frm_subsidionominas.sel.value.replace('[numero]',nbeneficiarios.value);" name="sel">
  <option value="">-- Elija un texto --</option>
  <option value="El número total de beneficiarios de este programa es [numero].

Las razones fundadas que impiden la publicación de la nómina de beneficiarios [razones].">Se revelan datos sensibles</option>
  <option value="Este [programa/subsidio/otro beneficio] no se encuentra actualmente en ejecución.">No se encuentra en ejecución</option>
 </select>
 &nbsp; Nº de Beneficiarios: &nbsp;
 <input type="text" name="nbeneficiarios" value="" onkeyup="frm_subsidionominas.texto.value=frm_subsidionominas.sel.value.replace('[numero]',nbeneficiarios.value);" />

 <br>

 <textarea rows="6" cols="40" name="texto"></textarea><br>
 <input type="submit" value="Procesar">
</form>

</td>
</tr>
</table>


<?php  html_footer(); ?>


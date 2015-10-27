<?php

require_once "common.php";

html_header("Conversor CSV a XHTML");

?>

Guarde su planilla Microsoft Excel u OpenOffice Calc
en formato CSV. Luego, s&uacute;bala a este conversor y obtenga la tabla
XHTML asociada.<br/><br/>
Los archivos CSV (del ingl&eacute;s <i>comma separated values</i>) son un tipo
de documento sencillo para representar datos en forma de tabla.
<br/><br/>

<form method="post" action="csv2xhtml2-b.php" enctype="multipart/form-data">

<table class="tabla">

<tr>
 <td>T&iacute;tulo de la P&aacute;gina</td>
 <td><input type="text" name="titulo" size="40" /></td>
</tr>

<tr>
 <td>Descripci&oacute;n<br/>(aparecer&aacute; bajo el t&iacute;tulo)</td>
 <td><textarea name="descripcion" cols="40" rows="6"></textarea></td>
</tr>

<tr>
 <td>Planilla CSV</td>
 <td>
  <input type="file" name="archivo" />
  <select name="tipo">
   <option value="excel" selected>CSV generado por Excel</option>
   <option value="calc">CSV generado por OpenOffice</option>
  </select>
 </td>
</tr>

<tr>
 <td> </td>
 <td>
  <input type="submit" value="Procesar" />
 </td>
</tr>
</table>

</form>

<br/>
<?php echo html_button($_SESSION['back']); ?>


<?php  html_footer();  ?>

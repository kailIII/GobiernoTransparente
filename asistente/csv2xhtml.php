<?php

require_once "common.php";

html_header("Conversor CSV a XHTML");

?>

Guarde su planilla Microsoft Excel, OpenOffice Calc
o en cualquier otro formato en formato CSV. Luego,
s&uacute;bala a este conversor y obtenga la tabla
XHTML asociada.<br/><br/>
Los archivos CSV (del ingl&eacute;s <i>comma separated values</i>) son un tipo
de documento sencillo para representar datos en forma de tabla.
<br/>
<br/>

<form method="post" action="csv2xhtml-b.php" enctype="multipart/form-data">
 <input type="file" name="archivo" />
 <select name="tipo">
  <option value="excel" selected>CSV generado por Excel</option>
  <option value="calc">CSV generado por OpenOffice</option>
 </select>
 <br/>
 <input type="button" value="Volver"
 onclick="location.href='main.php';" />
 <input type="submit" value="Procesar" />
</form>



<br/><br/>
<br/><br/>


<?php  html_footer();  ?>

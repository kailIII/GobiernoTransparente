<?php

require_once "common.php";

html_header("Generador de Directorio Anual");


$tit1=$_POST['tit1'];
$url1=$_POST['url1'];



?>

A continuaci&oacute;n se presenta el formulario para la
generaci&oacute;n del directorio hist&oacute;rico.


<!-- Formulario para el directorio -->

<br/><br/>

<form name="frm" method="POST" action="histo-proc.php">

<input type="submit" value="Generar hist&oacute;rico" />
<br/><br/>

<?php

echo "<input type='hidden' name='titulo' value='".$_POST['titulo1']."'/>\n";
echo "<input type='hidden' name='archivo' value='".$_POST['archivo1']."'/>\n";
echo "<input type='hidden' name='sv' value='".$_POST['sv']."'/>\n";

//Valores anuales
echo "<table class='tabla'><tr><th>T&iacute;tulo: </th><th colspan='3'>";
echo acentosHTML("<input type='text' size='60' name='tit1' value='".$_POST['tit1']."'/></th></tr>\n");
echo "<tr><td>Mensaje: </td><td colspan='3'>";
echo acentosHTML("<textarea cols='50' rows='3' name='mensaje'>".$_POST['msg1']."</textarea></td></tr>\n");
for($y=$_POST['desde_ano'];$y<=$para_ano;$y++) {
  echo "<tr><td>Opci&oacute;n $y: </td><td><input type='text' size='30' name='opc[]' value='A&ntilde;o $y'/></td>";
  echo "<td>Enlace: </td><td><input type='text' size='30' name='lnk[]' value='$y/$url1'/></td></tr>\n";
}
echo "</table><br/><br/>\n";

?>

<input type="submit" value="Generar hist&oacute;rico" />
<br/><br/><?php echo html_button($_SESSION['back']); ?>

</form>


<?php
html_footer();
?>

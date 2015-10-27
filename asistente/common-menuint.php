<?php

require_once "common.php";

function formMenuIntermedio($items,$sv,$titulo1,$msg1){

?>






A continuaci&oacute;n se presenta el formulario para la
generaci&oacute;n de páginas intermedias.


<!-- Formulario para el directorio -->

<br/><br/>

<form name="frm" method="POST" action="histo-proc.php">

<input type="submit" value="Generar página" />
<br/><br/>

<?php

echo "<input type='hidden' name='titulo' value='".$titulo1."'/>\n";
echo "<input type='hidden' name='sv' value='".$sv."'/>\n";
echo "<input type='hidden' name='archivo' value='".$sv.'.html'."'/>\n";

//Valores anuales
echo "<table class='tabla'><tr><th>T&iacute;tulo: </th><th colspan='3'>";
echo acentosHTML("<input type='text' size='60' name='tit1' value='".$titulo1."'/></th></tr>\n");
echo "<tr><td>Mensaje: </td><td colspan='3'>";
echo acentosHTML("<textarea cols='50' rows='3' name='mensaje'>".$msg1."</textarea></td></tr>\n");
//for($y=$_POST['desde_ano'];$y<=$para_ano;$y++) {
//  echo "<tr><td>Opci&oacute;n $y: </td><td><input type='text' size='30' name='opc[]' value='A&ntilde;o $y'/></td>";
//  echo "<td>Enlace: </td><td><input type='text' size='30' name='lnk[]' value='$y/$url1'/></td></tr>\n";
//}
foreach($items as $key=>$val){
    echo '<tr>';
    echo '<td>Opción</td>';
    echo '<td><input type="text" name="opc[]" value="'.$key.'"/></td>';
    echo '<td>Enlace</td>';
    echo '<td><input type="text" name="lnk[]" value="'.$val.'"/></td>';
    echo '</tr>';
}
echo "</table><br/><br/>\n";

?>

<input type="submit" value="Generar página" />
<br/><br/><?php echo html_button($_SESSION['back']); ?>

</form>



<?php }?>
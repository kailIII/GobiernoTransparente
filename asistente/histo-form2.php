<?php

require_once "common.php";

html_header("Generador de Directorio Mensual");

/*
$_SESSION['data'][0]=$_POST['archivo2'];
$_SESSION['data'][1]=$_POST['titulo2'];
$_SESSION['data'][2]=$_POST['msg2'];
$_SESSION['data'][3]=explode(",",$_POST['tit2']);
$_SESSION['data'][4]=explode(",",$_POST['url2']);
*/

$arch=$_SESSION['data'][0];
$titu=$_SESSION['data'][1];
$msg=$_SESSION['data'][2];
$ops=$_SESSION['data'][3];
$lnk=$_SESSION['data'][4];

$lista=array();
$meses=array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

for($i=1;$i<=$para_mes;$i++) {
  $lista2=array();
  for($k=0;$k<count($ops);$k++)
    $lista2[ $ops[$k] ]=(($i<10)?"0$i/":"$i/").$lnk[$k];
  $lista[ $meses[$i] ]=$lista2; 
}


$_SESSION[$arch]="SI";


?>

A continuaci&oacute;n se presenta el formulario para la
generaci&oacute;n del directorio hist&oacute;rico mensual
de este a&ntilde;o.


<!-- Formulario para el directorio -->

<br/><br/>

<form name="frm" method="POST" action="histo-proc.php">

<input type="submit" value="Generar hist&oacute;rico" />

<br/><br/>

<?php

echo "<input type='hidden' name='titulo' value='".$titu."'/>\n";
echo "<input type='hidden' name='archivo' value='".$arch."'/>\n";
echo "<input type='hidden' name='mensaje' value='".$msg."'/>\n";

//Valores anuales
foreach($lista as $a=>$b) {
 echo "<table class='tabla'><tr><th>T&iacute;tulo: </th><th colspan='3'>";
 echo acentosHTML("<input type='text' size='60' name='menu[]' value='$a'/></th></tr>\n");
 $k=1;
 foreach($b as $c=>$d) {
  echo acentosHTML("<tr><td>Opci&oacute;n $k: </td><td><input type='text' size='30' name='opc".$k."[]' value='$c'/></td>");
  echo acentosHTML("<td>Enlace: </td><td><input type='text' size='30' name='lnk".$k."[]' value='$d'/></td></tr>\n");
  $k++;
  if ($k==4) break;
 }
 for(;$k<=4;$k++) {
  echo "<tr><td>Opci&oacute;n $k: </td><td><input type='text' size='30' name='opc".$k."[]' value=''/></td>";
  echo "<td>Enlace: </td><td><input type='text' size='30' name='lnk".$k."[]' value=''/></td></tr>\n";
 }
 echo "</table><br/><br/>\n";
}

?>

<input type="submit" value="Generar hist&oacute;rico" /><br/><br/>
<?php echo html_button($_SESSION['back']); ?>


</form>


<?php
html_footer();
?>

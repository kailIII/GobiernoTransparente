<?php

require_once "common.php";

function formHistorico(
  $archivo1, $titulo1, $msg1, $opc1,
  $archivo2, $titulo2, $msg2, $opc2,
  $sv, $defano=2006, $boton=1
) {

global $para_mes, $para_ano;

$tit1="";
$url1="";
foreach($opc1 as $k => $v) {
  $tit1="$tit1,$k";
  $url1="$url1,$v";
}
$tit1=substr($tit1,1);
$url1=substr($url1,1);

$tit2="";
$url2="";
foreach($opc2 as $k => $v) {
  $tit2="$tit2,$k";
  $url2="$url2,$v";
}
$tit2=substr($tit2,1);
$url2=substr($url2,1);

?>


<form method="POST" action="histo-form1.php" name="frm<?php echo $sv; ?>">

<input type="hidden" name="archivo1" value="<?php echo acentosHTML($archivo1); ?>"/>
<input type="hidden" name="titulo1"  value="<?php echo acentosHTML($titulo1); ?>"/>
<input type="hidden" name="msg1"     value="<?php echo acentosHTML($msg1); ?>"/>
<input type="hidden" name="url1"     value="<?php echo acentosHTML($url1); ?>"/>
<input type="hidden" name="tit1"     value="<?php echo acentosHTML($tit1); ?>"/>
<input type="hidden" name="sv"       value="<?php echo $sv; ?>"/>


<table class="tabla">

<tr>
 <td><b>Desde qu&eacute; a&ntilde;o se inicia el directorio:</b><br/>
   El directorio hist&oacute;rico comenzar&aacute; en dicho año e
   incluir&aacute; entradas hasta el <?php echo $para_ano; ?>.
<?php
if ($defano==2006) {
  echo "<br/>La publicaci&oacute;n de esta informaci&oacute;n se realiza a partir del a&ntilde;o 2006 conforme al Instructivo Presidencial N&deg; 008 (04/12/2006) sobre Transparencia Activa.";
}
?>
 </td>
 <td valign="top">
   <select name="desde_ano">
<?php
for($i=2006;$i<=$para_ano;$i++)
  echo "     <option value='$i' ".(($i==$defano)?"selected":"").">A&ntilde;o $i</option>\n";
?>
   </select>
 </td>
</tr>

<tr>
<?php
if (isset($_SESSION[$sv]))
  echo " <th align='left'> &nbsp; &nbsp; (Este directorio hist&oacute;rico ya ha sido generado)</th>";
else
  echo " <td> </td>";
?>
 <td><input type="submit" value="Siguiente paso" />
 </td>
</tr>

</table><br/>

</form>

<?php
if ($boton==1) echo html_button($_SESSION['back']);
}

?>

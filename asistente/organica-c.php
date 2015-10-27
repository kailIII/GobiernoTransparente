<?php

require_once "common-org.php";

html_header("Editar nivel");

$id=$_GET['n'];
$info=getInfo($_SESSION['data'],$id);

?>

Detalle la informaci&oacute;n de este nivel de la
estructura org&aacute;nica de su instituci&oacute;n
(<?php echo $_SESSION['nombre']; ?>).

<br/><br/>

<form action="organica-b.php" method="post" name="frm">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<table class="tabla">
<tr>
 <td>Nombre del nivel &nbsp; </td>
 <td><select name="funcion" onchange="frm.otra.value=frm.funcion.value;">

<?php

$arr=array("Direcci&oacute;n Nacional","Direcci&oacute;n Regional","Departamento","Subdepartamento","Secci&oacute;n","Oficina");
$otra=1;
foreach($arr as $X) {
  if ( strlen($X)>6 && substr($X,0,5)==substr($info['funcion'],0,5) ) {
    echo "<option value='$X' selected>$X</option>\n";
    $otra=0;
  } else {
    echo "<option value='$X'>$X</option>\n";
  }
}

//Ultima opcion
if ($otra==1) 
    echo "<option value='' selected>Otra</option>";
  else
    echo "<option value=''>Otra</option>";
?>

</select>
<input type="text" name="otra" value="<?php echo $info['funcion']; ?>" size="20" onkeypress="frm.funcion.value='';" /> (Opcional)
 </td>
 <td><input type="text" name="titulo" size="30" value="<?php echo $info['titulo']; ?>" /></td>
</tr>
<tr>
 <td>Descripci&oacute;n (opcional) &nbsp;</td>
 <td colspan="2"><input type="text" name="glosa" value="<?php echo $info['glosa']; ?>" size="60" /></td>
</tr>
<tr>
 <td>Enlace (opcional) &nbsp;</td>
 <td colspan="2"><input type="text" name="url" value="<?php echo $info['url']; ?>" size="60" /></td>
</tr>
</table>
<input type="button" value="Cancelar" onclick="location.href='organica-b.php';"/>
<input type="submit" value="Modificar" />
</form>

<?php
html_footer();
?>
